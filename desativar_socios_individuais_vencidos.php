<?php
/**
 * Sistema de Desativação de Sócios Individuais Vencidos - FCB
 * Desativa sócios individuais quando a anuidade está vencida
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
 * Classe para desativar sócios individuais vencidos
 */
class DesativarSociosIndividuaisVencidos {
    
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
                'log_file' => 'desativacao_socios_individuais.log',
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
            $query = "CREATE TABLE IF NOT EXISTS desativacao_socios_individuais_log (
                id INT AUTO_INCREMENT PRIMARY KEY,
                socio_id INT NOT NULL,
                data_desativacao DATE NOT NULL,
                hora_desativacao TIME NOT NULL,
                email_enviado ENUM('SIM', 'NAO') DEFAULT 'NAO',
                data_vencimento DATE,
                INDEX idx_socio (socio_id),
                INDEX idx_data (data_desativacao)
            )";
            
            DB::Query($query);
            $this->log("Tabela desativacao_socios_individuais_log criada/verificada com sucesso");
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
     * Processa sócios individuais vencidos
     */
    public function processarSociosVencidos() {
        $hoje = date('Y-m-d');
        
        $this->log("Iniciando processamento de sócios individuais vencidos - " . date('Y-m-d H:i:s'));
        
        try {
            // Busca sócios individuais ativos com data de vencimento anterior a hoje
            $query = "SELECT id, nome, cpf, email, datavenci, datacricad, endereco, numero, 
                             cidade, estado, pais, telefone, perfilusu
                      FROM socio
                      WHERE perfilusu = 'SÓCIO INDIVIDUAL' 
                      AND datavenci < '{$hoje}' 
                      AND datavenci IS NOT NULL
                      AND ativo = 'SIM'";
            
            $result = DB::Query($query);
            $count = 0;
            
            while ($socio = $result->fetchAssoc()) {
                if ($this->desativarSocio($socio)) {
                    $count++;
                }
            }
            
            if ($count > 0) {
                $this->log("Processados {$count} sócios individuais vencidos");
            } else {
                $this->log("Nenhum sócio individual vencido encontrado");
            }
            
        } catch (Exception $e) {
            $this->log("Erro ao processar sócios individuais vencidos: " . $e->getMessage());
        }
        
        $this->log("Processamento de sócios individuais vencidos concluído");
    }
    
    /**
     * Desativa um sócio individual
     */
    private function desativarSocio($socio) {
        try {
            $this->log("Processando sócio individual: {$socio['nome']} (ID: {$socio['id']})");
            
            // Verifica se já foi desativado hoje
            if ($this->jaDesativadoHoje($socio['id'])) {
                $this->log("Sócio {$socio['nome']} já foi desativado hoje");
                return false;
            }
            
            // Desativa o sócio no banco
            $query = "UPDATE socio SET ativo = 'NAO' WHERE id = '{$socio['id']}'";
            DB::Query($query);
            
            $this->log("Sócio individual {$socio['nome']} desativado");
            
            // Envia email de notificação
            $emailEnviado = false;
            if (!empty($socio['email'])) {
                $emailEnviado = $this->enviarEmailDesativacao($socio);
            } else {
                $this->log("Email não encontrado para sócio {$socio['nome']}");
            }
            
            // Registra a desativação
            $this->registrarDesativacao($socio['id'], $socio['datavenci'], $emailEnviado);
            
            return true;
            
        } catch (Exception $e) {
            $this->log("Erro ao desativar sócio {$socio['nome']}: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Envia email de desativação para o sócio
     */
    private function enviarEmailDesativacao($socio) {
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
            $mail->isHTML(true);
            $mail->Subject = 'Desativação de Cadastro - Anuidade Vencida';
            
            $mensagem = $this->montarCorpoEmail($socio);
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
    private function montarCorpoEmail($socio) {
        $dataVencimento = !empty($socio['datavenci']) ? date('d/m/Y', strtotime($socio['datavenci'])) : 'Não informada';
        $dataCadastro = !empty($socio['datacricad']) ? date('d/m/Y', strtotime($socio['datacricad'])) : 'Não informada';
        
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
                .warning-box { background-color: #fff3cd; padding: 15px; margin: 20px 0; border-left: 4px solid #ffc107; }
                .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
                .button { display: inline-block; padding: 10px 20px; background-color: #2c5530; color: white; text-decoration: none; border-radius: 5px; margin: 20px 0; }
                strong { color: #d32f2f; }
                h3 { color: #2c5530; margin-top: 0; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h1>DESATIVAÇÃO DE CADASTRO</h1>
                    <h3>Sócio Individual</h3>
                </div>
                
                <div class="content">
                    <p>Prezado(a) <strong>' . htmlspecialchars($socio['nome']) . '</strong>,</p>
                    
                    <p>Informamos que seu cadastro como <strong>SÓCIO INDIVIDUAL</strong> da Federação Columbófila Brasileira foi <strong>DESATIVADO</strong> devido ao vencimento da sua anuidade.</p>
                    
                    <div class="info-box">
                        <h3>📋 Seus Dados:</h3>
                        <p><strong>Nome:</strong> ' . htmlspecialchars($socio['nome']) . '</p>
                        <p><strong>CPF:</strong> ' . htmlspecialchars($socio['cpf']) . '</p>
                        <p><strong>Email:</strong> ' . htmlspecialchars($socio['email']) . '</p>
                        ' . (!empty($socio['telefone']) ? '<p><strong>Telefone:</strong> ' . htmlspecialchars($socio['telefone']) . '</p>' : '') . '
                        ' . (!empty($socio['cidade']) && !empty($socio['estado']) ? '<p><strong>Localização:</strong> ' . htmlspecialchars($socio['cidade']) . '/' . htmlspecialchars($socio['estado']) . '</p>' : '') . '
                    </div>
                    
                    <div class="warning-box">
                        <h3>⚠️ Informações da Anuidade:</h3>
                        <p><strong>Data de Cadastro:</strong> ' . $dataCadastro . '</p>
                        <p><strong>Data de Vencimento:</strong> <span style="color: #d32f2f; font-size: 18px;">' . $dataVencimento . '</span></p>
                        <p><strong>Status:</strong> <span style="color: #d32f2f;">VENCIDA</span></p>
                    </div>
                    
                    <h3>🔄 Como Regularizar sua Situação:</h3>
                    <ol>
                        <li>Entre em contato com a Federação Columbófila Brasileira</li>
                        <li>Solicite as informações para renovação da anuidade</li>
                        <li>Efetue o pagamento da anuidade</li>
                        <li>Aguarde a confirmação e reativação do seu cadastro</li>
                    </ol>
                    
                    <div class="info-box">
                        <h3>📞 Contato:</h3>
                        <p><strong>Email:</strong> <a href="mailto:contato@fcb.org.br">contato@fcb.org.br</a></p>
                        <p>Nossa equipe está à disposição para auxiliá-lo no processo de regularização.</p>
                    </div>
                    
                    <p style="margin-top: 30px;">Atenciosamente,<br>
                    <strong>Federação Columbófila Brasileira</strong></p>
                </div>
                
                <div class="footer">
                    <p><strong>Federação Columbófila Brasileira - FCB</strong></p>
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
    private function jaDesativadoHoje($socioId) {
        $hoje = date('Y-m-d');
        try {
            $query = "SELECT COUNT(*) as total FROM desativacao_socios_individuais_log 
                      WHERE socio_id = '{$socioId}' AND data_desativacao = '{$hoje}'";
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
    private function registrarDesativacao($socioId, $dataVencimento, $emailEnviado) {
        try {
            $hoje = date('Y-m-d');
            $agora = date('H:i:s');
            $emailStatus = $emailEnviado ? 'SIM' : 'NAO';
            
            $query = "INSERT INTO desativacao_socios_individuais_log 
                      (socio_id, data_desativacao, hora_desativacao, email_enviado, data_vencimento) 
                      VALUES ('{$socioId}', '{$hoje}', '{$agora}', '{$emailStatus}', '{$dataVencimento}')";
            
            DB::Query($query);
        } catch (Exception $e) {
            $this->log("Erro ao registrar desativação no log: " . $e->getMessage());
        }
    }
}

// Execução do script
try {
    $desativador = new DesativarSociosIndividuaisVencidos();
    $desativador->processarSociosVencidos();
    echo "Processamento de sócios individuais vencidos concluído com sucesso!\n";
} catch (Exception $e) {
    echo "Erro ao processar sócios individuais vencidos: " . $e->getMessage() . "\n";
}
?>

