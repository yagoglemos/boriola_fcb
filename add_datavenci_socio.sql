-- Script para adicionar campo datavenci na tabela socio
-- Data: 2025-10-15
-- Descrição: Campo de data de vencimento para sócios individuais

-- Adiciona o campo datavenci na tabela socio
ALTER TABLE `socio` 
ADD COLUMN `datavenci` DATE NULL DEFAULT NULL 
COMMENT 'Data de vencimento (obrigatório apenas para SÓCIO INDIVIDUAL)' 
AFTER `perfilusu`;

-- Cria índice para melhor performance nas consultas de vencimento
CREATE INDEX `idx_datavenci` ON `socio` (`datavenci`);

-- Mensagem de confirmação
SELECT 'Campo datavenci adicionado com sucesso na tabela socio!' as Resultado;

