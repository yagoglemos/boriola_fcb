<?php
/**
 * Hook personalizado para processar o campo datavenci
 * Intercepta os dados antes de salvar no banco
 */

// Hook para processar dados antes de salvar
function processDatavenciBeforeSave($data, $pageType, $tableName) {
    if ($tableName !== 'socio') {
        return $data;
    }
    
    // Processa o campo datavenci se estiver presente
    if (isset($data['datavenci'])) {
        $value = $data['datavenci'];
        
        // Se está vazio, define como NULL
        if (empty($value) || $value === 'null' || $value === '') {
            $data['datavenci'] = null;
        } else {
            // Se já está no formato correto, mantém
            if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
                $data['datavenci'] = $value;
            } else {
                // Tenta converter de formato brasileiro
                if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $value)) {
                    $parts = explode('/', $value);
                    if (count($parts) === 3) {
                        $day = $parts[0];
                        $month = $parts[1];
                        $year = $parts[2];
                        $data['datavenci'] = $year . '-' . $month . '-' . $day;
                    } else {
                        $data['datavenci'] = null;
                    }
                } else {
                    $data['datavenci'] = null;
                }
            }
        }
    }
    
    return $data;
}

// Adiciona o hook ao sistema PHPRunner
if (function_exists('addBeforeSaveHook')) {
    addBeforeSaveHook('socio', 'processDatavenciBeforeSave');
}

// Hook alternativo usando eventos globais
function handleDatavenciField($fieldName, $fieldValue, $pageObject) {
    if ($fieldName === 'datavenci') {
        if (empty($fieldValue) || $fieldValue === 'null' || $fieldValue === '') {
            return null;
        }
        
        // Se já está no formato correto, mantém
        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $fieldValue)) {
            return $fieldValue;
        }
        
        // Tenta converter de formato brasileiro
        if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $fieldValue)) {
            $parts = explode('/', $fieldValue);
            if (count($parts) === 3) {
                $day = $parts[0];
                $month = $parts[1];
                $year = $parts[2];
                return $year . '-' . $month . '-' . $day;
            }
        }
        
        return null;
    }
    
    return $fieldValue;
}

// Registra o hook
if (function_exists('addFieldProcessHook')) {
    addFieldProcessHook('socio', 'datavenci', 'handleDatavenciField');
}
?>
