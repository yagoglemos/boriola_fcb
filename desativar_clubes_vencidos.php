<?php
/**
 * Sistema de Desativação de Clubes Vencidos - FCB
 * Desativa clubes, presidentes e sócios quando a anuidade está vencida
 * 
 * @author Sistema FCB
 * @version 1.0
 */

@ini_set("display_errors", "1");
@ini_set("display_startup_errors", "1");

require_once("include/dbcommon.php");
require_once('libs/phpmailer/class.phpmailer.php');
require_once('libs/phpmailer/class.smtp.php');

/**
 * Classe para desativar clubes vencidos e seus membros
 */
class DesativarClubesVencidos {
    
    private $config;
    
    public function __construct() {
        $this->config = [
            'smtp' => [
                'host' => 'smtp.hostinger.com',
                'port' => 465,
                'encryption' => 'ssl',
                'username' => 'contato@fcb.org.br',
                'password' => 'Bor18@snryz',
                'from_email' => 'contato@fcb.org.br',
                'from_name' => 'Federação Columbófila Brasileira'
            ],
            'logging' => [
                'enabled' => true,
                'log_file' => 'desativacao_clubes.log',
                'max_size_mb' => 10
            ]
        ];
        
        $this->verificarTabelaLog();
    }
    
    /**
     * Cria a tabela de log se não existir
     */
    private function verificarTabelaLog() {
        try {
            $query = "CREATE TABLE IF NOT EXISTS desativacao_clubes_log (
                id INT AUTO_INCREMENT PRIMARY KEY,
                clube_id INT NOT NULL,
                socio_id INT NOT NULL,
                data_desativacao DATE NOT NULL,
                hora_desativacao TIME NOT NULL,
                email_enviado ENUM('SIM', 'NAO') DEFAULT 'NAO',
                INDEX idx_clube_socio (clube_id, socio_id),
                INDEX idx_data (data_desativacao)
            )";
            
            DB::Query($query);
            $this->log("Tabela desativacao_clubes_log criada/verificada com sucesso");
        } catch (Exception $e) {
            $this->log("Erro ao criar tabela de log: " . $e->getMessage());
        }
    }
    
    /**
     * Registra mensagem no log
     */
    private function log($mensagem) {
        if (!$this->config['logging']['enabled']) {
            return;
        }
        
        $logFile = $this->config['logging']['log_file'];
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[{$timestamp}] {$mensagem}\n";
        
        // Verifica tamanho do arquivo e rotaciona se necessário
        if (file_exists($logFile)) {
            $sizeMB = filesize($logFile) / (1024 * 1024);
            if ($sizeMB > $this->config['logging']['max_size_mb']) {
                rename($logFile, $logFile . '.' . date('Y-m-d-His') . '.bak');
            }
        }
        
        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
    
    /**
     * Processa clubes vencidos
     */
    public function processarClubesVencidos() {
        $hoje = date('Y-m-d');
        
        $this->log("Iniciando processamento de clubes vencidos - " . date('Y-m-d H:i:s'));
        
        try {
            // Busca clubes ativos com data de vencimento anterior a hoje
            $query = "SELECT c.id, c.nome, c.presidente, c.datavenci, c.cidade, c.uf, c.federacao
                      FROM clube c
                      WHERE c.datavenci < '{$hoje}' AND c.ativo = 'SIM'";
            
            $result = DB::Query($query);
            $count = 0;
            
            while ($clube = $result->fetchAssoc()) {
                if ($this->desativarClube($clube)) {
                    $count++;
                }
            }
            
            if ($count > 0) {
                $this->log("Processados {$count} clubes vencidos");
            } else {
                $this->log("Nenhum clube vencido encontrado");
            }
            
        } catch (Exception $e) {
            $this->log("Erro ao processar clubes vencidos: " . $e->getMessage());
        }
        
        $this->log("Processamento de clubes vencidos concluído");
    }
    
    /**
     * Desativa um clube e seus membros
     */
    private function desativarClube($clube) {
        try {
            $this->log("Processando clube: {$clube['nome']} (ID: {$clube['id']})");
            
            // 1. Busca todos os sócios do clube
            $socios = $this->buscarSociosClube($clube['id']);
            
            if (empty($socios)) {
                $this->log("Nenhum sócio encontrado para o clube {$clube['nome']}");
            } else {
                $this->log("Encontrados " . count($socios) . " sócios do clube {$clube['nome']}");
                
                // 2. Desativa e notifica cada sócio
                foreach ($socios as $socio) {
                    $this->desativarSocio($socio, $clube);
                }
            }
            
            // 3. Desativa o presidente
            if (!empty($clube['presidente'])) {
                $this->desativarPresidente($clube['presidente'], $clube);
            }
            
            // 4. Desativa o clube
            $this->desativarClubeNoBanco($clube['id']);
            
            $this->log("Clube {$clube['nome']} desativado com sucesso");
            return true;
            
        } catch (Exception $e) {
            $this->log("Erro ao desativar clube {$clube['nome']}: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Busca todos os sócios de um clube
     */
    private function buscarSociosClube($clubeId) {
        try {
            $query = "SELECT id, nome, email, clube, cidade, estado
                      FROM socio
                      WHERE clube = '{$clubeId}' AND ativo = 'SIM'";
            
            $result = DB::Query($query);
            $socios = [];
            
            while ($socio = $result->fetchAssoc()) {
                $socios[] = $socio;
            }
            
            return $socios;
        } catch (Exception $e) {
            $this->log("Erro ao buscar sócios do clube {$clubeId}: " . $e->getMessage());
            return [];
        }
    }
    
    /**
     * Desativa um sócio e envia notificação
     */
    private function desativarSocio($socio, $clube) {
        try {
            // Verifica se já foi desativado hoje
            if ($this->jaDesativadoHoje($clube['id'], $socio['id'])) {
                $this->log("Sócio {$socio['nome']} já foi desativado hoje");
                return;
            }
            
            // Desativa o sócio no banco
            $query = "UPDATE socio SET ativo = 'NAO' WHERE id = '{$socio['id']}'";
            DB::Query($query);
            
            $this->log("Sócio {$socio['nome']} desativado");
            
            // Envia email de notificação
            if (!empty($socio['email'])) {
                $enviado = $this->enviarEmailDesativacao($socio, $clube);
                $this->registrarDesativacao($clube['id'], $socio['id'], $enviado);
            } else {
                $this->log("Email não encontrado para sócio {$socio['nome']}");
                $this->registrarDesativacao($clube['id'], $socio['id'], false);
            }
            
        } catch (Exception $e) {
            $this->log("Erro ao desativar sócio {$socio['nome']}: " . $e->getMessage());
        }
    }
    
    /**
     * Desativa o presidente do clube
     */
    private function desativarPresidente($presidenteId, $clube) {
        try {
            $query = "SELECT id, nome, email FROM socio WHERE id = '{$presidenteId}' AND ativo = 'SIM'";
            $result = DB::Query($query);
            $presidente = $result->fetchAssoc();
            
            if ($presidente) {
                // Verifica se já foi desativado hoje
                if ($this->jaDesativadoHoje($clube['id'], $presidente['id'])) {
                    $this->log("Presidente {$presidente['nome']} já foi desativado hoje");
                    return;
                }
                
                // Desativa o presidente
                $queryUpdate = "UPDATE socio SET ativo = 'NAO' WHERE id = '{$presidenteId}'";
                DB::Query($queryUpdate);
                
                $this->log("Presidente {$presidente['nome']} desativado");
                
                // Envia email de notificação
                if (!empty($presidente['email'])) {
                    $enviado = $this->enviarEmailDesativacao($presidente, $clube, true);
                    $this->registrarDesativacao($clube['id'], $presidente['id'], $enviado);
                } else {
                    $this->log("Email não encontrado para presidente {$presidente['nome']}");
                    $this->registrarDesativacao($clube['id'], $presidente['id'], false);
                }
            }
        } catch (Exception $e) {
            $this->log("Erro ao desativar presidente: " . $e->getMessage());
        }
    }
    
    /**
     * Desativa o clube no banco de dados
     */
    private function desativarClubeNoBanco($clubeId) {
        try {
            $query = "UPDATE clube SET ativo = 'NAO' WHERE id = '{$clubeId}'";
            DB::Query($query);
            $this->log("Clube ID {$clubeId} marcado como inativo no banco");
        } catch (Exception $e) {
            $this->log("Erro ao desativar clube no banco: " . $e->getMessage());
        }
    }
    
    /**
     * Envia email de desativação para o sócio
     */
    private function enviarEmailDesativacao($socio, $clube, $ehPresidente = false) {
        try {
            $mail = new PHPMailer(true);
            
            // Configurações do servidor SMTP
            $mail->isSMTP();
            $mail->Host = $this->config['smtp']['host'];
            $mail->SMTPAuth = true;
            $mail->Username = $this->config['smtp']['username'];
            $mail->Password = $this->config['smtp']['password'];
            $mail->SMTPSecure = $this->config['smtp']['encryption'];
            $mail->Port = $this->config['smtp']['port'];
            $mail->CharSet = 'UTF-8';
            
            // Remetente e destinatário
            $mail->setFrom($this->config['smtp']['from_email'], $this->config['smtp']['from_name']);
            $mail->addAddress($socio['email'], $socio['nome']);
            
            // Conteúdo do email
            $cargo = $ehPresidente ? 'Presidente' : 'Sócio';
            $mail->isHTML(true);
            $mail->Subject = 'Desativação de Cadastro - Clube Vencido';
            
            $mensagem = $this->montarCorpoEmail($socio, $clube, $cargo);
            $mail->Body = $mensagem;
            $mail->AltBody = strip_tags($mensagem);
            
            // Envia o email
            $mail->send();
            $this->log("Email de desativação enviado para {$socio['nome']} ({$socio['email']})");
            return true;
            
        } catch (Exception $e) {
            $this->log("Erro ao enviar email para {$socio['nome']}: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Monta o corpo do email de desativação
     */
    private function montarCorpoEmail($socio, $clube, $cargo) {
        $dataVencimento = date('d/m/Y', strtotime($clube['datavenci']));
        
        $html = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #d32f2f; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 30px; border: 1px solid #ddd; }
                .info-box { background-color: white; padding: 15px; margin: 20px 0; border-left: 4px solid #d32f2f; }
                .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
                .button { display: inline-block; padding: 10px 20px; background-color: #d32f2f; color: white; text-decoration: none; border-radius: 5px; margin: 20px 0; }
                strong { color: #d32f2f; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h1>DESATIVAÇÃO DE CADASTRO</h1>
                </div>
                
                <div class="content">
                    <p>Prezado(a) <strong>' . htmlspecialchars($socio['nome']) . '</strong>,</p>
                    
                    <p>Informamos que seu cadastro foi <strong>DESATIVADO</strong> devido ao vencimento da documentação do clube.</p>
                    
                    <div class="info-box">
                        <h3>Informações do Clube:</h3>
                        <p><strong>Clube:</strong> ' . htmlspecialchars($clube['nome']) . '</p>
                        <p><strong>Data de Vencimento:</strong> ' . $dataVencimento . '</p>
                        <p><strong>Cidade/UF:</strong> ' . htmlspecialchars($clube['cidade']) . '/' . htmlspecialchars($clube['uf']) . '</p>
                    </div>
                    
                    <div class="info-box">
                        <h3>Seus Dados:</h3>
                        <p><strong>Nome:</strong> ' . htmlspecialchars($socio['nome']) . '</p>
                        <p><strong>Cargo:</strong> ' . $cargo . '</p>
                        <p><strong>Email:</strong> ' . htmlspecialchars($socio['email']) . '</p>
                    </div>
                    
                    <p><strong style="color: #d32f2f;">Importante:</strong></p>
                    <ul>
                        <li>Seu cadastro foi desativado automaticamente</li>
                        <li>Para reativar, o clube deve regularizar sua situação</li>
                        <li>Entre em contato com a presidência do clube para mais informações</li>
                    </ul>
                    
                    <p>Para dúvidas ou mais informações, entre em contato conosco através do email <a href="mailto:contato@fcb.org.br">contato@fcb.org.br</a>.</p>
                </div>
                
                <div class="footer">
                    <p><strong>Federação Columbófila Brasileira</strong></p>
                    <p>Este é um email automático, por favor não responda.</p>
                    <p>Data de envio: ' . date('d/m/Y H:i:s') . '</p>
                </div>
            </div>
        </body>
        </html>
        ';
        
        return $html;
    }
    
    /**
     * Verifica se o sócio já foi desativado hoje
     */
    private function jaDesativadoHoje($clubeId, $socioId) {
        $hoje = date('Y-m-d');
        try {
            $query = "SELECT COUNT(*) as total FROM desativacao_clubes_log 
                      WHERE clube_id = '{$clubeId}' AND socio_id = '{$socioId}' AND data_desativacao = '{$hoje}'";
            $result = DB::Query($query);
            $row = $result->fetchAssoc();
            
            return $row['total'] > 0;
        } catch (Exception $e) {
            $this->log("Erro ao verificar se sócio já foi desativado: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Registra a desativação no log
     */
    private function registrarDesativacao($clubeId, $socioId, $emailEnviado) {
        try {
            $hoje = date('Y-m-d');
            $agora = date('H:i:s');
            $emailStatus = $emailEnviado ? 'SIM' : 'NAO';
            
            $query = "INSERT INTO desativacao_clubes_log (clube_id, socio_id, data_desativacao, hora_desativacao, email_enviado) 
                      VALUES ('{$clubeId}', '{$socioId}', '{$hoje}', '{$agora}', '{$emailStatus}')";
            
            DB::Query($query);
        } catch (Exception $e) {
            $this->log("Erro ao registrar desativação no log: " . $e->getMessage());
        }
    }
}

// Execução do script
try {
    $desativador = new DesativarClubesVencidos();
    $desativador->processarClubesVencidos();
    echo "Processamento de clubes vencidos concluído com sucesso!\n";
} catch (Exception $e) {
    echo "Erro ao processar clubes vencidos: " . $e->getMessage() . "\n";
}
?>
