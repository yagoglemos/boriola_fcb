<?php
/**
 * Sistema de Notificações por Email - FCB (Hostinger)
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
        'host' => 'smtp.hostinger.com',           // Servidor SMTP
        'port' => 465,                        // Porta SMTP
        'encryption' => 'ssl',                // Criptografia (tls ou ssl)
        'username' => 'contato@fcb.org.br', // Email da FCB
        'password' => 'Bor18@snryz',       // Senha do email
        'from_email' => 'contato@fcb.org.br',
        'from_name' => 'Federação Columbófila Brasileira'
    ],
    'logging' => [
        'enabled' => true,
        'log_file' => 'email_notifications.log',
        'max_log_size' => 10485760 // 10MB
    ]
];

class EmailNotificationsHostinger {
    
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
     * Busca o email do presidente na tabela socio baseado no nome
     */
    private function getPresidenteEmail($nomePresidente) {
        try {
            // $nomeEscaped = DB::CurrentConnection()->addSlashes($nomePresidente);
            $query = "SELECT email FROM socio WHERE id = $nomePresidente AND ativo = 'SIM'";
            $result = DB::Query($query);
            $row = $result->fetchAssoc();

            if ($row && !empty($row['email'])) {
                return $row['email'];
            }
            
            return null;
        } catch (Exception $e) {
            $this->log("Erro ao buscar email do presidente {$nomePresidente}: " . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Verifica clubes com vencimentos próximos
     */
    public function verificarVencimentos() {
        $hoje = date('Y-m-d');
        $data30Dias = date('Y-m-d', strtotime('+30 days'));
        $data15Dias = date('Y-m-d', strtotime('+15 days'));
        
        $this->log("Iniciando verificação de vencimentos - " . date('Y-m-d H:i:s'));
        
        try {
            // Busca clubes ativos com vencimento em 30 dias
            $this->processarVencimentos($data30Dias, 30);
            
            // Busca clubes ativos com vencimento em 15 dias
            $this->processarVencimentos($data15Dias, 15);
            
            // Busca clubes ativos com vencimento hoje
            $this->processarVencimentos($hoje, 0);
            
        } catch (Exception $e) {
            $this->log("Erro geral ao verificar vencimentos: " . $e->getMessage());
        }
        
        $this->log("Verificação de vencimentos concluída");
    }
    
    /**
     * Processa vencimentos para uma data específica
     */
    private function processarVencimentos($data, $diasRestantes) {
        try {
            $query = "SELECT c.id, c.nome, c.presidente, c.datavenci, c.cidade, c.uf, c.federacao, s.email, s.nome nomePresidente, f.nome nomeFederacao
                      FROM clube c
                      INNER JOIN socio s ON s.id = c.presidente
                      INNER JOIN federacao f ON f.id = c.federacao
                      WHERE c.datavenci = '{$data}' AND c.ativo = 'SIM'";
            
            $result = DB::Query($query);
            $count = 0;
            
            while ($clube = $result->fetchAssoc()) {
                
                if ($this->enviarNotificacao($clube, $diasRestantes)) {
                    $count++;
                }
            }
            
            if ($count > 0) {
                $this->log("Processados {$count} clubes com vencimento em {$diasRestantes} dias");
            }else{
                $this->log("Nenhum clube encontrado com vencimento em {$diasRestantes} dias");
            }
            
        } catch (Exception $e) {
            $this->log("Erro ao processar vencimentos para data {$data}: " . $e->getMessage());
        }
    }
    
    /**
     * Envia notificação por email
     */
    private function enviarNotificacao($clube, $diasRestantes) {
        $emailPresidente = $this->getPresidenteEmail($clube['presidente']);
        if (!$emailPresidente) {
            $this->log("Email do presidente não encontrado para: {$clube['presidente']} - Clube: {$clube['nome']}");
            return false;
        }
        
        // Verifica se já foi enviado hoje (evita spam)
        if ($this->jaEnviadoHoje($clube['id'], $diasRestantes)) {
            $this->log("Email já enviado hoje para clube {$clube['nome']} - {$diasRestantes} dias");
            return true;
        }
        
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($emailPresidente, $clube['nomePresidente']);
            
            // Assunto baseado nos dias restantes
            $assunto = $this->getAssunto($diasRestantes);
            $this->mail->Subject = $assunto;
            
            // Corpo do email
            $corpo = $this->getCorpoEmail($clube, $diasRestantes);
            $this->mail->Body = $corpo;
            
            // Envia o email
            if ($this->mail->send()) {
                $this->log("Email enviado com sucesso para {$clube['presidente']} ({$emailPresidente}) - Clube: {$clube['nome']} - {$diasRestantes} dias restantes");
                $this->registrarEnvio($clube['id'], $diasRestantes);
                return true;
            }
            
        } catch (Exception $e) {
            $this->log("Erro ao enviar email para {$clube['presidente']}: " . $e->getMessage());
        }
        
        return false;
    }
    
    /**
     * Gera o assunto do email baseado nos dias restantes
     */
    private function getAssunto($diasRestantes) {
        switch ($diasRestantes) {
            case 30:
                return "FCB - Aviso de Vencimento: 30 dias restantes";
            case 15:
                return "FCB - Aviso Urgente: 15 dias restantes para vencimento";
            case 0:
                return "FCB - VENCIMENTO HOJE - Ação Imediata Necessária";
            default:
                return "FCB - Notificação de Vencimento";
        }
    }
    
    /**
     * Gera o corpo do email
     */
    private function getCorpoEmail($clube, $diasRestantes) {
        $dataVencimento = date('d/m/Y', strtotime($clube['datavenci']));
        $diasTexto = $diasRestantes == 0 ? 'HOJE' : $diasRestantes . ' dias';
        
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
                .alert { background-color: #fff3cd; border: 1px solid #ffeaa7; padding: 15px; margin: 15px 0; border-radius: 5px; }
                .urgent { background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; }
                .footer { background-color: #2c5530; color: white; padding: 15px; text-align: center; font-size: 12px; }
                .info-table { width: 100%; border-collapse: collapse; margin: 15px 0; }
                .info-table td { padding: 8px; border-bottom: 1px solid #ddd; }
                .info-table td:first-child { font-weight: bold; width: 30%; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Federação Columbófila Brasileira</h2>
                    <h3>Notificação de Vencimento</h3>
                </div>
                
                <div class='content'>
                    <p>Prezado(a) <strong>{$clube['nomePresidente']}</strong>,</p>
                    
                    <div class='alert" . ($diasRestantes <= 15 ? " urgent" : "") . "'>
                        <h4>Atenção: Vencimento em {$diasTexto}</h4>
                        <p>Informamos que o vencimento do seu clube está próximo e requer atenção.</p>
                    </div>
                    
                    <h4>Informações do Clube:</h4>
                    <table class='info-table'>
                        <tr><td>Nome do Clube:</td><td>{$clube['nome']}</td></tr>
                        <tr><td>Presidente:</td><td>{$clube['nomePresidente']}</td></tr>
                        <tr><td>Cidade:</td><td>{$clube['cidade']} - {$clube['uf']}</td></tr>
                        <tr><td>Federação:</td><td>{$clube['nomeFederacao']}</td></tr>
                        <tr><td>Data de Vencimento:</td><td><strong>{$dataVencimento}</strong></td></tr>
                    </table>
                    
                    <h4>Próximos Passos:</h4>
                    <ul>
                        <li>Entre em contato com a Federação Columbófila Brasileira</li>
                        <li>Verifique a documentação necessária para renovação</li>
                        <li>Efetue o pagamento das taxas em dia</li>
                        <li>Mantenha os dados do clube atualizados</li>
                    </ul>
                    
                    <p>Para mais informações, entre em contato conosco através dos canais oficiais da FCB.</p>
                    
                    <p>Atenciosamente,<br>
                    <strong>Federação Columbófila Brasileira</strong></p>
                </div>
                
                <div class='footer'>
                    <p>Este é um email automático. Por favor, não responda a esta mensagem.</p>
                    <p>FCB - Sistema de Gestão de Clubes</p>
                </div>
            </div>
        </body>
        </html>";
        
        return $corpo;
    }
    
    /**
     * Verifica se o email já foi enviado hoje para evitar spam
     */
    private function jaEnviadoHoje($clubeId, $diasRestantes) {
        $hoje = date('Y-m-d');
        try {
            $query = "SELECT COUNT(*) as total FROM email_notifications_log 
                      WHERE clube_id = '{$clubeId}' AND dias_restantes = '{$diasRestantes}' AND data_envio = '{$hoje}'";
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
    private function registrarEnvio($clubeId, $diasRestantes) {
        try {
            $hoje = date('Y-m-d');
            $agora = date('H:i:s');
            $query = "INSERT INTO email_notifications_log (clube_id, dias_restantes, data_envio, hora_envio) 
                      VALUES ('{$clubeId}', '{$diasRestantes}', '{$hoje}', '{$agora}')";
            
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
            $query = "CREATE TABLE IF NOT EXISTS email_notifications_log (
                id INT AUTO_INCREMENT PRIMARY KEY,
                clube_id INT NOT NULL,
                dias_restantes INT NOT NULL,
                data_envio DATE NOT NULL,
                hora_envio TIME NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_clube_data (clube_id, data_envio),
                INDEX idx_data_envio (data_envio)
            )";
            
            DB::Query($query);
            $this->log("Tabela email_notifications_log criada/verificada com sucesso");
            
        } catch (Exception $e) {
            $this->log("Erro ao criar tabela de log: " . $e->getMessage());
        }
    }
}

// Execução principal - adaptada para Hostinger
try {
    $notifications = new EmailNotificationsHostinger($config);
    $notifications->criarTabelaLog();
    $notifications->verificarVencimentos();
    
    // Resposta para o cron job da Hostinger
    echo "Processo de notificações por email concluído em " . date('d/m/Y H:i:s') . "\n";
    
} catch (Exception $e) {
    echo "Erro no processo de notificações: " . $e->getMessage() . "\n";
}
?>


