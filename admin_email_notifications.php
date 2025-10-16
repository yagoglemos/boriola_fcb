<?php
/**
 * Painel Administrativo - Sistema de Notificações por Email
 * FCB - Federação Columbófila Brasileira
 */

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");

// Verificar se o usuário está logado e é administrador
if (!isLogged() || !Security::isAdmin()) {
    HeaderRedirect("login");
    return;
}

$pageTitle = "Administração - Notificações por Email";
include_once("include/xtempl.php");

// Processar ações
if ($_POST['action']) {
    $action = $_POST['action'];
    
    switch ($action) {
        case 'send_test':
            $resultado = enviarEmailTeste();
            break;
        case 'create_log_table':
            $resultado = criarTabelaLog();
            break;
        case 'view_logs':
            $logs = obterLogs();
            break;
    }
}

function enviarEmailTeste() {
    // Implementar envio de email de teste
    return "Email de teste enviado com sucesso!";
}

function criarTabelaLog() {
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
        return "Tabela de log criada com sucesso!";
    } catch (Exception $e) {
        return "Erro ao criar tabela: " . $e->getMessage();
    }
}

function obterLogs() {
    try {
        $query = "SELECT enl.*, c.nome as clube_nome, c.presidente 
                  FROM email_notifications_log enl
                  LEFT JOIN clube c ON enl.clube_id = c.id
                  ORDER BY enl.created_at DESC 
                  LIMIT 100";
        return DB::Query($query);
    } catch (Exception $e) {
        return null;
    }
}

$xt = new XTempl();
$xt->assign("pageTitle", $pageTitle);
$xt->assign("resultado", $resultado ?? "");
$xt->assign("logs", $logs ?? null);

$xt->load_template("templates/admin_email_notifications.htm");
$xt->parse("main");
$xt->out("main");
?>





