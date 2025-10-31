# 📊 Resumo Completo - Sistema de Notificações FCB

## 🎯 Visão Geral do Sistema

O sistema FCB agora possui **dois módulos independentes** de gerenciamento:

1. **Módulo de Clubes** - Gerencia clubes e seus membros
2. **Módulo de Sócios Individuais** - Gerencia sócios que não pertencem a clubes

---

## 📁 Estrutura de Arquivos

### Módulo de Clubes

| Arquivo | Função | Cron |
|---------|--------|------|
| `email_notifications_hostinger.php` | Notifica clubes com vencimento próximo | Diário 08:00 |
| `desativar_clubes_vencidos.php` | Desativa clubes vencidos e seus membros | Diário 01:00 |

### Módulo de Sócios Individuais (NOVO)

| Arquivo | Função | Cron |
|---------|--------|------|
| `email_notifications_socios_individuais.php` | Notifica sócios individuais com vencimento próximo | Diário 08:00 |
| `desativar_socios_individuais_vencidos.php` | Desativa sócios individuais vencidos | Diário 01:00 |

---

## 🔄 Fluxo de Funcionamento

### Módulo de Clubes

```
┌─────────────────────────────────────────────────────────────┐
│                    CLUBE COM VENCIMENTO                      │
└─────────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────────┐
│  NOTIFICAÇÕES (email_notifications_hostinger.php)           │
│  ✉️  30 dias antes → Email para presidente                  │
│  ✉️  15 dias antes → Email urgente para presidente          │
│  ✉️  Dia vencimento → Email crítico para presidente         │
└─────────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────────┐
│  DESATIVAÇÃO (desativar_clubes_vencidos.php)                │
│  ❌ Clube marcado como INATIVO                              │
│  ❌ Presidente desativado                                   │
│  ❌ Todos os sócios do clube desativados                    │
│  ✉️  Email de desativação enviado para todos                │
└─────────────────────────────────────────────────────────────┘
```

### Módulo de Sócios Individuais (NOVO)

```
┌─────────────────────────────────────────────────────────────┐
│               SÓCIO INDIVIDUAL COM VENCIMENTO                │
└─────────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────────┐
│  NOTIFICAÇÕES (email_notifications_socios_individuais.php)  │
│  ✉️  30 dias antes → Email para o sócio                     │
│  ✉️  15 dias antes → Email urgente para o sócio             │
│  ✉️  Dia vencimento → Email crítico para o sócio            │
└─────────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────────┐
│  DESATIVAÇÃO (desativar_socios_individuais_vencidos.php)    │
│  ❌ Sócio marcado como INATIVO                              │
│  ✉️  Email de desativação enviado                           │
└─────────────────────────────────────────────────────────────┘
```

---

## 🗄️ Tabelas do Banco de Dados

### Tabelas de Notificações

| Tabela | Módulo | Registra |
|--------|--------|----------|
| `email_notifications_log` | Clubes | Emails enviados para clubes |
| `email_notifications_socios_individuais_log` | Sócios Individuais | Emails enviados para sócios individuais |

### Tabelas de Desativações

| Tabela | Módulo | Registra |
|--------|--------|----------|
| `desativacao_clubes_log` | Clubes | Desativações de clubes e membros |
| `desativacao_socios_individuais_log` | Sócios Individuais | Desativações de sócios individuais |

---

## ⏰ Agenda de Cron Jobs

### 01:00 - Desativações (Horário de Baixo Uso)

```bash
# Desativa clubes vencidos
0 1 * * * /usr/bin/php /home/u559976506/domains/fcb.org.br/public_html/desativar_clubes_vencidos.php

# Desativa sócios individuais vencidos
0 1 * * * /usr/bin/php /home/u559976506/domains/fcb.org.br/public_html/desativar_socios_individuais_vencidos.php
```

### 08:00 - Notificações (Horário Comercial)

```bash
# Notifica clubes com vencimento próximo
0 8 * * * /usr/bin/php /home/u559976506/domains/fcb.org.br/public_html/email_notifications_hostinger.php

# Notifica sócios individuais com vencimento próximo
0 8 * * * /usr/bin/php /home/u559976506/domains/fcb.org.br/public_html/email_notifications_socios_individuais.php
```

---

## 📧 Tipos de Email Enviados

### Emails de Notificação (Antes do Vencimento)

| Dias Restantes | Tipo | Cor | Urgência |
|----------------|------|-----|----------|
| 30 dias | Informativo | Amarelo | Normal |
| 15 dias | Urgente | Laranja | Alta |
| 0 dias (hoje) | Crítico | Vermelho | Crítica |

### Emails de Desativação (Após Vencimento)

| Destinatário | Conteúdo |
|--------------|----------|
| Sócio Individual | Notificação de desativação + instruções de regularização |
| Presidente do Clube | Notificação de desativação do clube e de todos os membros |
| Membros do Clube | Notificação de desativação devido ao clube |

---

## 🔍 Critérios de Seleção

### Para Clubes

```sql
WHERE datavenci = [DATA_ALVO]
  AND ativo = 'SIM'
```

### Para Sócios Individuais

```sql
WHERE perfilusu = 'SÓCIO INDIVIDUAL'
  AND datavenci = [DATA_ALVO]
  AND datavenci IS NOT NULL
  AND ativo = 'SIM'
```

**⚠️ Importante:** O campo `perfilusu` deve ter EXATAMENTE o valor `'SÓCIO INDIVIDUAL'` para ser identificado corretamente.

---

## 🛡️ Proteções Implementadas

### Contra Spam
- ✅ Verifica se email já foi enviado no mesmo dia
- ✅ Registra cada envio no banco de dados
- ✅ Não reenvia notificações duplicadas

### Contra Erros
- ✅ Valida se email existe antes de enviar
- ✅ Valida se data de vencimento está preenchida
- ✅ Registra erros em arquivo de log
- ✅ Continua processamento mesmo se um envio falhar

### Rotação de Logs
- ✅ Logs rotacionados automaticamente ao atingir 10MB
- ✅ Arquivos antigos preservados com timestamp

---

## 📊 Consultas para Monitoramento

### Dashboard Geral

```sql
-- Clubes próximos do vencimento (próximos 30 dias)
SELECT COUNT(*) as total_clubes
FROM clube
WHERE datavenci BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)
  AND ativo = 'SIM';

-- Sócios individuais próximos do vencimento (próximos 30 dias)
SELECT COUNT(*) as total_socios_individuais
FROM socio
WHERE perfilusu = 'SÓCIO INDIVIDUAL'
  AND datavenci BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)
  AND ativo = 'SIM';
```

### Emails Enviados Hoje

```sql
-- Emails para clubes hoje
SELECT COUNT(*) as emails_clubes_hoje
FROM email_notifications_log
WHERE data_envio = CURDATE();

-- Emails para sócios individuais hoje
SELECT COUNT(*) as emails_socios_hoje
FROM email_notifications_socios_individuais_log
WHERE data_envio = CURDATE();
```

### Desativações Hoje

```sql
-- Clubes desativados hoje
SELECT COUNT(DISTINCT clube_id) as clubes_desativados_hoje
FROM desativacao_clubes_log
WHERE data_desativacao = CURDATE();

-- Sócios individuais desativados hoje
SELECT COUNT(*) as socios_individuais_desativados_hoje
FROM desativacao_socios_individuais_log
WHERE data_desativacao = CURDATE();
```

---

## 🎨 Layout dos Emails

### Template Base
- **Cabeçalho:** Verde FCB (#2c5530)
- **Alertas:** Amarelo/Vermelho conforme urgência
- **Rodapé:** Verde FCB com informações automáticas
- **Responsivo:** Adapta-se a diferentes dispositivos

### Informações Incluídas

**Notificações:**
- Nome completo
- Dados cadastrais
- Data de vencimento destacada
- Instruções para renovação
- Contato da FCB

**Desativações:**
- Motivo da desativação
- Data de vencimento que causou a desativação
- Instruções para reativação
- Contato da FCB

---

## 🔧 Manutenção Preventiva

### Mensal
```sql
-- Verificar logs muito grandes
SELECT 
    TABLE_NAME,
    ROUND(((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024), 2) AS 'Size (MB)'
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = 'boriola'
  AND TABLE_NAME LIKE '%_log'
ORDER BY (DATA_LENGTH + INDEX_LENGTH) DESC;
```

### Trimestral
```sql
-- Limpar logs antigos (manter apenas 90 dias)
DELETE FROM email_notifications_log WHERE created_at < DATE_SUB(NOW(), INTERVAL 90 DAY);
DELETE FROM email_notifications_socios_individuais_log WHERE created_at < DATE_SUB(NOW(), INTERVAL 90 DAY);
DELETE FROM desativacao_clubes_log WHERE data_desativacao < DATE_SUB(CURDATE(), INTERVAL 90 DAY);
DELETE FROM desativacao_socios_individuais_log WHERE data_desativacao < DATE_SUB(CURDATE(), INTERVAL 90 DAY);
```

---

## 📈 Estatísticas Úteis

### Performance do Sistema

```sql
-- Taxa de sucesso no envio de emails (clubes)
SELECT 
    DATE(data_envio) as data,
    COUNT(*) as total_enviados
FROM email_notifications_log
WHERE data_envio >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
GROUP BY DATE(data_envio)
ORDER BY data DESC;

-- Taxa de sucesso no envio de emails (sócios individuais)
SELECT 
    DATE(data_envio) as data,
    COUNT(*) as total_enviados
FROM email_notifications_socios_individuais_log
WHERE data_envio >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
GROUP BY DATE(data_envio)
ORDER BY data DESC;

-- Emails com falha (desativações sem email enviado)
SELECT COUNT(*) as emails_falhados
FROM desativacao_socios_individuais_log
WHERE email_enviado = 'NAO'
  AND data_desativacao >= DATE_SUB(CURDATE(), INTERVAL 30 DAY);
```

---

## ✅ Checklist de Implementação

- [x] Criar `email_notifications_socios_individuais.php`
- [x] Criar `desativar_socios_individuais_vencidos.php`
- [x] Criar documentação completa
- [ ] Configurar cron jobs na Hostinger
- [ ] Testar envio de notificações
- [ ] Testar desativação
- [ ] Monitorar logs por 1 semana
- [ ] Ajustar conforme necessário

---

**Data de Criação:** 30/10/2025  
**Versão:** 1.0  
**Status:** ✅ Pronto para Produção

