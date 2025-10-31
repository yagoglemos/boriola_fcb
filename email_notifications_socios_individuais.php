<?php
/**
 * Sistema de Notificações por Email - Sócios Individuais FCB (Hostinger)
 * Versão adaptada para hospedagem compartilhada
 * 
 * @author Sistema FCB
 * @version 1.0 - Hostinger
 */

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("libs/phpmailer/PHPMailer/src/PHPMailer.php");
require_once("libs/phpmailer/PHPMailer/src/SMTP.php");
require_once("libs/phpmailer/PHPMailer/src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Configurações de timezone
date_default_timezone_set('America/Sao_Paulo');

// Configurações específicas para Hostinger
$config = [
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
        'log_file' => 'email_notifications_socios_individuais.log',
        'max_log_size' => 10485760 // 10MB
    ]
];

class EmailNotificationsSociosIndividuais {
    
    private $mail;
    private $config;
    private $logFile;
    
    public function __construct($config) {
        $this->config = $config;
        $this->logFile = $config['logging']['log_file'];
        $this->initMailer();
    }
    
    /**
     * Inicializa o PHPMailer com configurações da Hostinger
     */
    private function initMailer() {
        $this->mail = new PHPMailer(true);
        
        try {
            // Configurações do servidor SMTP da Hostinger
            $this->mail->isSMTP();
            $this->mail->Host = $this->config['smtp']['host'];
            $this->mail->SMTPAuth = true;
            $this->mail->Username = $this->config['smtp']['username'];
            $this->mail->Password = $this->config['smtp']['password'];
            $this->mail->SMTPSecure = $this->config['smtp']['encryption'];
            $this->mail->Port = $this->config['smtp']['port'];
            $this->mail->CharSet = 'UTF-8';
            
            // Configurações do remetente
            $this->mail->setFrom($this->config['smtp']['from_email'], $this->config['smtp']['from_name']);
            $this->mail->isHTML(true);
            
        } catch (Exception $e) {
            $this->log("Erro ao configurar PHPMailer: " . $e->getMessage());
        }
    }
    
    /**
     * Verifica sócios individuais com vencimentos próximos
     */
    public function verificarVencimentos() {
        $hoje = date('Y-m-d');
        $data30Dias = date('Y-m-d', strtotime('+30 days'));
        $data15Dias = date('Y-m-d', strtotime('+15 days'));
        
        $this->log("Iniciando verificação de vencimentos de sócios individuais - " . date('Y-m-d H:i:s'));
        
        try {
            // Busca sócios individuais ativos com vencimento em 30 dias
            $this->processarVencimentos($data30Dias, 30);
            
            // Busca sócios individuais ativos com vencimento em 15 dias
            $this->processarVencimentos($data15Dias, 15);
            
            // Busca sócios individuais ativos com vencimento hoje
            $this->processarVencimentos($hoje, 0);
            
        } catch (Exception $e) {
            $this->log("Erro geral ao verificar vencimentos: " . $e->getMessage());
        }
        
        $this->log("Verificação de vencimentos de sócios individuais concluída");
    }
    
    /**
     * Processa vencimentos para uma data específica
     */
    private function processarVencimentos($data, $diasRestantes) {
        try {
            $query = "SELECT id, nome, cpf, email, datavenci, datacricad, endereco, 
                             numero, cidade, estado, pais, telefone, perfilusu
                      FROM socio
                      WHERE perfilusu = 'SÓCIO INDIVIDUAL'
                      AND datavenci = '{$data}'
                      AND datavenci IS NOT NULL
                      AND ativo = 'SIM'
                      AND email IS NOT NULL
                      AND email != ''";
            
            $result = DB::Query($query);
            $count = 0;
            
            while ($socio = $result->fetchAssoc()) {
                if ($this->enviarNotificacao($socio, $diasRestantes)) {
                    $count++;
                }
            }
            
            if ($count > 0) {
                $this->log("Processados {$count} sócios individuais com vencimento em {$diasRestantes} dias");
            } else {
                $this->log("Nenhum sócio individual encontrado com vencimento em {$diasRestantes} dias");
            }
            
        } catch (Exception $e) {
            $this->log("Erro ao processar vencimentos para data {$data}: " . $e->getMessage());
        }
    }
    
    /**
     * Envia notificação por email
     */
    private function enviarNotificacao($socio, $diasRestantes) {
        if (empty($socio['email'])) {
            $this->log("Email não encontrado para: {$socio['nome']} - ID: {$socio['id']}");
            return false;
        }
        
        // Verifica se já foi enviado hoje (evita spam)
        if ($this->jaEnviadoHoje($socio['id'], $diasRestantes)) {
            $this->log("Email já enviado hoje para sócio {$socio['nome']} - {$diasRestantes} dias");
            return true;
        }
        
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($socio['email'], $socio['nome']);
            
            // Assunto baseado nos dias restantes
            $assunto = $this->getAssunto($diasRestantes);
            $this->mail->Subject = $assunto;
            
            // Corpo do email
            $corpo = $this->getCorpoEmail($socio, $diasRestantes);
            $this->mail->Body = $corpo;
            
            // Envia o email
            if ($this->mail->send()) {
                $this->log("Email enviado com sucesso para {$socio['nome']} ({$socio['email']}) - {$diasRestantes} dias restantes");
                $this->registrarEnvio($socio['id'], $diasRestantes);
                return true;
            }
            
        } catch (Exception $e) {
            $this->log("Erro ao enviar email para {$socio['nome']}: " . $e->getMessage());
        }
        
        return false;
    }
    
    /**
     * Gera o assunto do email baseado nos dias restantes
     */
    private function getAssunto($diasRestantes) {
        switch ($diasRestantes) {
            case 30:
                return "FCB - Sócio Individual: Vencimento em 30 dias";
            case 15:
                return "FCB - Sócio Individual: Aviso Urgente - 15 dias para vencimento";
            case 0:
                return "FCB - Sócio Individual: VENCIMENTO HOJE - Ação Necessária";
            default:
                return "FCB - Sócio Individual: Notificação de Vencimento";
        }
    }
    
    /**
     * Gera o corpo do email
     */
    private function getCorpoEmail($socio, $diasRestantes) {
        $dataVencimento = date('d/m/Y', strtotime($socio['datavenci']));
        $dataCadastro = !empty($socio['datacricad']) ? date('d/m/Y', strtotime($socio['datacricad'])) : 'Não informada';
        $diasTexto = $diasRestantes == 0 ? 'HOJE' : $diasRestantes . ' dias';
        
        // Define cor do alerta baseado na urgência
        $corAlerta = $diasRestantes <= 15 ? '#f8d7da' : '#fff3cd';
        $corBordaAlerta = $diasRestantes <= 15 ? '#f5c6cb' : '#ffeaa7';
        
        $corpo = "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #2c5530; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; background-color: #f9f9f9; }
                .alert { background-color: {$corAlerta}; border: 1px solid {$corBordaAlerta}; padding: 15px; margin: 15px 0; border-radius: 5px; }
                .footer { background-color: #2c5530; color: white; padding: 15px; text-align: center; font-size: 12px; }
                .info-table { width: 100%; border-collapse: collapse; margin: 15px 0; background-color: white; }
                .info-table td { padding: 8px; border-bottom: 1px solid #ddd; }
                .info-table td:first-child { font-weight: bold; width: 30%; background-color: #f5f5f5; }
                .button { display: inline-block; padding: 12px 24px; background-color: #2c5530; color: white; text-decoration: none; border-radius: 5px; margin: 15px 0; }
                h3 { color: #2c5530; }
                .warning { color: #d32f2f; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Federação Columbófila Brasileira</h2>
                    <h3>Notificação de Vencimento - Sócio Individual</h3>
                </div>
                
                <div class='content'>
                    <p>Prezado(a) <strong>{$socio['nome']}</strong>,</p>
                    
                    <div class='alert'>
                        <h4>⚠️ Atenção: Vencimento em {$diasTexto}</h4>
                        <p>Informamos que o vencimento da sua anuidade como <strong>SÓCIO INDIVIDUAL</strong> está próximo e requer atenção.</p>
                    </div>
                    
                    <h4>📋 Suas Informações:</h4>
                    <table class='info-table'>
                        <tr><td>Nome:</td><td>{$socio['nome']}</td></tr>
                        <tr><td>CPF:</td><td>{$socio['cpf']}</td></tr>
                        " . (!empty($socio['cidade']) && !empty($socio['estado']) ? "<tr><td>Cidade/UF:</td><td>{$socio['cidade']} - {$socio['estado']}</td></tr>" : "") . "
                        " . (!empty($socio['telefone']) ? "<tr><td>Telefone:</td><td>{$socio['telefone']}</td></tr>" : "") . "
                        <tr><td>Email:</td><td>{$socio['email']}</td></tr>
                        <tr><td>Data de Cadastro:</td><td>{$dataCadastro}</td></tr>
                        <tr><td>Data de Vencimento:</td><td><strong class='warning'>{$dataVencimento}</strong></td></tr>
                    </table>
                    
                    <h4>🔄 Próximos Passos para Renovação:</h4>
                    <ol>
                        <li>Entre em contato com a Federação Columbófila Brasileira</li>
                        <li>Solicite as informações para renovação da anuidade</li>
                        <li>Verifique a documentação necessária</li>
                        <li>Efetue o pagamento das taxas em dia</li>
                        <li>Mantenha seus dados cadastrais atualizados</li>
                    </ol>
                    
                    <p><strong>⚠️ IMPORTANTE:</strong> Após o vencimento, seu cadastro será <strong>DESATIVADO AUTOMATICAMENTE</strong> até a regularização.</p>
                    
                    <h4>📞 Contato FCB:</h4>
                    <p>
                        <strong>Email:</strong> <a href='mailto:contato@fcb.org.br'>contato@fcb.org.br</a><br>
                        Nossa equipe está à disposição para auxiliá-lo no processo de renovação.
                    </p>
                    
                    <p style='margin-top: 30px;'>Atenciosamente,<br>
                    <strong>Federação Columbófila Brasileira</strong></p>
                </div>
                
                <div class='footer'>
                    <p>Este é um email automático. Por favor, não responda a esta mensagem.</p>
                    <p>FCB - Sistema de Gestão de Sócios</p>
                    <p>Data de envio: " . date('d/m/Y H:i:s') . "</p>
                </div>
            </div>
        </body>
        </html>";
        
        return $corpo;
    }
    
    /**
     * Verifica se o email já foi enviado hoje para evitar spam
     */
    private function jaEnviadoHoje($socioId, $diasRestantes) {
        $hoje = date('Y-m-d');
        try {
            $query = "SELECT COUNT(*) as total FROM email_notifications_socios_individuais_log 
                      WHERE socio_id = '{$socioId}' AND dias_restantes = '{$diasRestantes}' AND data_envio = '{$hoje}'";
            $result = DB::Query($query);
            $row = $result->fetchAssoc();
            
            return $row['total'] > 0;
        } catch (Exception $e) {
            $this->log("Erro ao verificar se email já foi enviado: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Registra o envio do email no log
     */
    private function registrarEnvio($socioId, $diasRestantes) {
        try {
            $hoje = date('Y-m-d');
            $agora = date('H:i:s');
            $query = "INSERT INTO email_notifications_socios_individuais_log (socio_id, dias_restantes, data_envio, hora_envio) 
                      VALUES ('{$socioId}', '{$diasRestantes}', '{$hoje}', '{$agora}')";
            
            DB::Query($query);
        } catch (Exception $e) {
            $this->log("Erro ao registrar envio no log: " . $e->getMessage());
        }
    }
    
    /**
     * Registra logs no arquivo
     */
    private function log($mensagem) {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[{$timestamp}] {$mensagem}" . PHP_EOL;
        
        // Log no arquivo
        if ($this->config['logging']['enabled']) {
            file_put_contents($this->logFile, $logMessage, FILE_APPEND | LOCK_EX);
        }
        
        // Log no console se executado via linha de comando
        if (php_sapi_name() === 'cli') {
            echo $logMessage;
        }
    }
    
    /**
     * Cria a tabela de log se não existir
     */
    public function criarTabelaLog() {
        try {
            $query = "CREATE TABLE IF NOT EXISTS email_notifications_socios_individuais_log (
                id INT AUTO_INCREMENT PRIMARY KEY,
                socio_id INT NOT NULL,
                dias_restantes INT NOT NULL,
                data_envio DATE NOT NULL,
                hora_envio TIME NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_socio_data (socio_id, data_envio),
                INDEX idx_data_envio (data_envio)
            )";
            
            DB::Query($query);
            $this->log("Tabela email_notifications_socios_individuais_log criada/verificada com sucesso");
            
        } catch (Exception $e) {
            $this->log("Erro ao criar tabela de log: " . $e->getMessage());
        }
    }
}

// Execução principal - adaptada para Hostinger
try {
    $notifications = new EmailNotificationsSociosIndividuais($config);
    $notifications->criarTabelaLog();
    $notifications->verificarVencimentos();
    
    // Resposta para o cron job da Hostinger
    echo "Processo de notificações de sócios individuais concluído em " . date('d/m/Y H:i:s') . "\n";
    
} catch (Exception $e) {
    echo "Erro no processo de notificações: " . $e->getMessage() . "\n";
}
?>

