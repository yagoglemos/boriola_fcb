<?php
/**
 * Configurações de Email - FCB
 * Arquivo de configuração para o sistema de notificações
 */

return [
    // Configurações SMTP
    'smtp' => [
        'host' => 'smtp.hostinger.com',           // Servidor SMTP
        'port' => 465,                        // Porta SMTP
        'encryption' => 'ssl',                // Criptografia (tls ou ssl)
        'username' => 'contato@fcb.org.br', // Email da FCB
        'password' => 'bor18@snryz',       // Senha do email
        'from_email' => 'no-reply@fcb.org.br',
        'from_name' => 'Federação Columbófila Brasileira'
    ],
    
    // Configurações de notificação
    'notifications' => [
        'days_30' => true,    // Enviar aviso 30 dias antes
        'days_15' => true,    // Enviar aviso 15 dias antes
        'days_0' => true,     // Enviar aviso no dia do vencimento
        'max_emails_per_day' => 100,  // Limite de emails por dia
        'timeout' => 30       // Timeout em segundos
    ],
    
    // Configurações de log
    'logging' => [
        'enabled' => true,
        'log_file' => 'email_notifications.log',
        'max_log_size' => 10485760, // 10MB
        'log_level' => 'INFO'       // DEBUG, INFO, WARNING, ERROR
    ]
];
?>





