# Configuração de Cron Jobs - Sócios Individuais FCB

## 📋 Visão Geral

Este documento explica como configurar os cron jobs para gerenciar automaticamente os **sócios individuais** da FCB, incluindo notificações de vencimento e desativação automática.

## 📁 Arquivos Criados

### 1. `email_notifications_socios_individuais.php`
- **Função:** Envia notificações por email para sócios individuais que estão com vencimento próximo
- **Períodos:** 30 dias, 15 dias e no dia do vencimento
- **Execução:** Diariamente às 08:00

### 2. `desativar_socios_individuais_vencidos.php`
- **Função:** Desativa automaticamente sócios individuais com anuidade vencida
- **Execução:** Diariamente às 01:00

## ⚙️ Configuração dos Cron Jobs na Hostinger

### Acesso ao Painel de Cron Jobs

1. Faça login no painel da Hostinger
2. Vá em **Advanced** → **Cron Jobs**

### Cron Job 1: Notificações de Vencimento

**Comando:**
```bash
/usr/bin/php /home/u559976506/domains/fcb.org.br/public_html/email_notifications_socios_individuais.php
```

**Configuração de Horário:**
- **Minuto:** 0
- **Hora:** 8
- **Dia do Mês:** *
- **Mês:** *
- **Dia da Semana:** *

**Expressão Cron Completa:**
```
0 8 * * * /usr/bin/php /home/u559976506/domains/fcb.org.br/public_html/b.php
```

**Descrição:** Executa todos os dias às 08:00 da manhã


### Cron Job 2: Desativação de Sócios Vencidos

**Comando:**
```bash
/usr/bin/php /home/u559976506/domains/fcb.org.br/public_html/desativar_socios_individuais_vencidos.php
```

**Configuração de Horário:**
- **Minuto:** 0
- **Hora:** 1
- **Dia do Mês:** *
- **Mês:** *
- **Dia da Semana:** *

**Expressão Cron Completa:**
```
0 1 * * * /usr/bin/php /home/u559976506/domains/fcb.org.br/public_html/desativar_socios_individuais_vencidos.php
```

**Descrição:** Executa todos os dias à 01:00 da manhã (horário com menos uso do sistema)

## 📊 Tabelas de Log Criadas

### 1. `email_notifications_socios_individuais_log`
Registra todos os emails enviados para sócios individuais.

**Estrutura:**
```sql
CREATE TABLE email_notifications_socios_individuais_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    socio_id INT NOT NULL,
    dias_restantes INT NOT NULL,
    data_envio DATE NOT NULL,
    hora_envio TIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_socio_data (socio_id, data_envio),
    INDEX idx_data_envio (data_envio)
);
```

### 2. `desativacao_socios_individuais_log`
Registra todas as desativações de sócios individuais.

**Estrutura:**
```sql
CREATE TABLE desativacao_socios_individuais_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    socio_id INT NOT NULL,
    data_desativacao DATE NOT NULL,
    hora_desativacao TIME NOT NULL,
    email_enviado ENUM('SIM', 'NAO') DEFAULT 'NAO',
    data_vencimento DATE,
    INDEX idx_socio (socio_id),
    INDEX idx_data (data_desativacao)
);
```

## 🔍 Como Funciona

### Fluxo de Notificações

1. **30 dias antes do vencimento:**
   - Sistema envia primeiro aviso
   - Email com informações sobre renovação

2. **15 dias antes do vencimento:**
   - Sistema envia aviso urgente
   - Email destacando a proximidade do vencimento

3. **No dia do vencimento:**
   - Sistema envia último aviso
   - Email alertando que a desativação ocorrerá automaticamente

### Fluxo de Desativação

1. **Verificação diária às 01:00:**
   - Sistema busca sócios individuais com `datavenci < hoje`
   - Verifica se `perfilusu = 'SÓCIO INDIVIDUAL'`
   - Verifica se `ativo = 'SIM'`

2. **Processo de desativação:**
   - Atualiza `ativo = 'NAO'` na tabela `socio`
   - Envia email de notificação de desativação
   - Registra no log

3. **Proteção contra duplicação:**
   - Verifica se já foi desativado no mesmo dia
   - Evita envio duplicado de emails

## 🔐 Configurações SMTP

Os emails são enviados usando as configurações:
- **Host:** smtp.hostinger.com
- **Porta:** 465
- **Criptografia:** SSL
- **Usuário:** contato@fcb.org.br
- **Remetente:** Federação Columbófila Brasileira

## 📝 Arquivos de Log

### Localização dos Logs:
- `email_notifications_socios_individuais.log` - Log de notificações
- `desativacao_socios_individuais.log` - Log de desativações

### Rotação de Logs:
- Logs são automaticamente rotacionados quando atingem 10MB
- Arquivos antigos são renomeados com timestamp

## 🧪 Teste Manual

Para testar os scripts manualmente via navegador:

### Testar Notificações:
```
http://fcb.org.br/email_notifications_socios_individuais.php
```

### Testar Desativações:
```
http://fcb.org.br/desativar_socios_individuais_vencidos.php
```

**⚠️ Atenção:** Executar via navegador pode causar timeout em servidores com limite de tempo. Prefira executar via SSH ou aguarde os cron jobs.

## 📊 Consultas Úteis

### Ver sócios individuais próximos do vencimento (30 dias):
```sql
SELECT id, nome, email, datavenci, 
       DATEDIFF(datavenci, CURDATE()) as dias_restantes
FROM socio
WHERE perfilusu = 'SÓCIO INDIVIDUAL'
AND ativo = 'SIM'
AND datavenci BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)
ORDER BY datavenci;
```

### Ver últimas notificações enviadas:
```sql
SELECT l.*, s.nome, s.email
FROM email_notifications_socios_individuais_log l
JOIN socio s ON s.id = l.socio_id
ORDER BY l.created_at DESC
LIMIT 50;
```

### Ver últimas desativações:
```sql
SELECT l.*, s.nome, s.email, s.datavenci
FROM desativacao_socios_individuais_log l
JOIN socio s ON s.id = l.socio_id
ORDER BY l.data_desativacao DESC
LIMIT 50;
```

## 🔧 Manutenção

### Limpeza de Logs Antigos:
```sql
-- Remover logs de notificações com mais de 1 ano
DELETE FROM email_notifications_socios_individuais_log 
WHERE created_at < DATE_SUB(NOW(), INTERVAL 1 YEAR);

-- Remover logs de desativações com mais de 1 ano
DELETE FROM desativacao_socios_individuais_log 
WHERE data_desativacao < DATE_SUB(CURDATE(), INTERVAL 1 YEAR);
```

## ❓ Troubleshooting

### Emails não estão sendo enviados:
1. Verifique o arquivo de log
2. Verifique se as credenciais SMTP estão corretas
3. Verifique se o email do sócio está cadastrado corretamente
4. Verifique se o campo `email` não está vazio

### Sócios não estão sendo desativados:
1. Verifique se `perfilusu = 'SÓCIO INDIVIDUAL'` exatamente
2. Verifique se a data de vencimento está preenchida
3. Verifique o log de desativações

### Duplicação de notificações:
- O sistema verifica automaticamente se já enviou email no mesmo dia
- Se ocorrer, verifique a tabela de log

## 📞 Suporte

Para dúvidas ou problemas, consulte os arquivos de log ou entre em contato com o administrador do sistema.

---

**Última atualização:** 30/10/2025
**Versão:** 1.0

