<?php
/**
 * Validação customizada para o campo datavenci
 * Garante que o campo seja salvo corretamente no banco
 */

function validateDatavenci($value, $fieldName, $pageObject) {
    // Se o valor está vazio ou é null, retorna null
    if (empty($value) || $value === 'null' || $value === '') {
        return null;
    }
    
    // Se já está no formato correto (YYYY-MM-DD), retorna como está
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
        return $value;
    }
    
    // Tenta converter de formato brasileiro (DD/MM/YYYY) para (YYYY-MM-DD)
    if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $value)) {
        $parts = explode('/', $value);
        if (count($parts) === 3) {
            $day = $parts[0];
            $month = $parts[1];
            $year = $parts[2];
            return $year . '-' . $month . '-' . $day;
        }
    }
    
    // Se não conseguiu converter, retorna null
    return null;
}

// Adiciona a validação ao sistema PHPRunner
if (function_exists('addCustomFieldValidation')) {
    addCustomFieldValidation('socio', 'datavenci', 'validateDatavenci');
}
?>