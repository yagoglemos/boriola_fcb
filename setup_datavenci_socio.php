<?php
/**
 * Script de Setup - Campo datavenci para Sócio
 * Adiciona o campo datavenci na tabela socio e configura validações
 * 
 * @author Sistema FCB
 * @version 1.0
 */

@ini_set("display_errors", "1");
@ini_set("display_startup_errors", "1");

require_once("include/dbcommon.php");

echo "<h1>Setup - Campo datavenci para Sócio</h1>";
echo "<hr>";

// Passo 1: Adicionar campo na tabela
echo "<h2>Passo 1: Adicionar campo na tabela socio</h2>";

try {
    // Tenta adicionar o campo diretamente
    $alterQuery = "ALTER TABLE `socio` 
                   ADD COLUMN `datavenci` DATE NULL DEFAULT NULL 
                   COMMENT 'Data de vencimento (obrigatório apenas para SÓCIO INDIVIDUAL)' 
                   AFTER `perfilusu`";
    
    DB::Query($alterQuery);
    echo "<p style='color: green;'>✓ Campo 'datavenci' adicionado com sucesso!</p>";
    
    // Cria índice
    try {
        $indexQuery = "CREATE INDEX `idx_socio_datavenci` ON `socio` (`datavenci`)";
        DB::Query($indexQuery);
        echo "<p style='color: green;'>✓ Índice criado com sucesso!</p>";
    } catch (Exception $e2) {
        echo "<p style='color: orange;'>⚠ Índice pode já existir: " . $e2->getMessage() . "</p>";
    }
    
} catch (Exception $e) {
    if (strpos($e->getMessage(), 'Duplicate column name') !== false) {
        echo "<p style='color: orange;'>⚠ Campo 'datavenci' já existe na tabela 'socio'</p>";
    } else {
        echo "<p style='color: red;'>✗ Erro ao adicionar campo: " . $e->getMessage() . "</p>";
    }
}

echo "<hr>";

// Passo 2: Verificar estrutura
echo "<h2>Passo 2: Verificar estrutura da tabela</h2>";

try {
    $query = "SHOW COLUMNS FROM socio";
    $result = DB::Query($query);
    
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='background-color: #f0f0f0;'>";
    echo "<th>Campo</th><th>Tipo</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th>";
    echo "</tr>";
    
    $encontrouDatavenci = false;
    while ($row = $result->fetchAssoc()) {
        $style = '';
        if ($row['Field'] == 'datavenci') {
            $style = "background-color: #d4edda;";
            $encontrouDatavenci = true;
        }
        
        echo "<tr style='{$style}'>";
        echo "<td><strong>{$row['Field']}</strong></td>";
        echo "<td>{$row['Type']}</td>";
        echo "<td>{$row['Null']}</td>";
        echo "<td>{$row['Key']}</td>";
        echo "<td>" . ($row['Default'] ?? 'NULL') . "</td>";
        echo "<td>{$row['Extra']}</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    if ($encontrouDatavenci) {
        echo "<p style='color: green;'>✓ Campo 'datavenci' encontrado na estrutura!</p>";
    } else {
        echo "<p style='color: red;'>✗ Campo 'datavenci' NÃO encontrado na estrutura!</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>Erro ao verificar estrutura: " . $e->getMessage() . "</p>";
}

echo "<hr>";

// Passo 3: Estatísticas
echo "<h2>Passo 3: Estatísticas</h2>";

try {
    // Total de sócios
    $query1 = "SELECT COUNT(*) as total FROM socio";
    $result1 = DB::Query($query1);
    $row1 = $result1->fetchAssoc();
    echo "<p><strong>Total de sócios:</strong> {$row1['total']}</p>";
    
    // Sócios por perfil
    $query2 = "SELECT perfilusu, COUNT(*) as total FROM socio GROUP BY perfilusu";
    $result2 = DB::Query($query2);
    
    echo "<h3>Sócios por Perfil:</h3>";
    echo "<table border='1' style='border-collapse: collapse;'>";
    echo "<tr style='background-color: #f0f0f0;'><th>Perfil</th><th>Total</th></tr>";
    
    $totalIndividual = 0;
    while ($row = $result2->fetchAssoc()) {
        echo "<tr>";
        echo "<td>{$row['perfilusu']}</td>";
        echo "<td>{$row['total']}</td>";
        echo "</tr>";
        
        if ($row['perfilusu'] == 'SÓCIO INDIVIDUAL') {
            $totalIndividual = $row['total'];
        }
    }
    
    echo "</table>";
    
    if ($totalIndividual > 0) {
        echo "<p style='color: orange;'>⚠ Existem <strong>{$totalIndividual}</strong> sócios com perfil 'SÓCIO INDIVIDUAL' que precisarão ter a data de vencimento cadastrada.</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>Erro ao buscar estatísticas: " . $e->getMessage() . "</p>";
}

echo "<hr>";

// Passo 4: Instruções
echo "<h2>Passo 4: Próximos Passos</h2>";

echo "<div style='background-color: #f0f8ff; padding: 20px; border-left: 4px solid #007bff;'>";
echo "<h3>Configuração no PHPRunner/Sistema de Geração</h3>";
echo "<p>Para que o campo apareça nos formulários, você precisa:</p>";
echo "<ol>";
echo "<li><strong>Abrir o projeto no PHPRunner</strong> (ou sistema gerador usado)</li>";
echo "<li><strong>Atualizar a estrutura da tabela 'socio'</strong> (o sistema detectará automaticamente o novo campo)</li>";
echo "<li><strong>Configurar o campo 'datavenci':</strong>";
echo "<ul>";
echo "<li>Tipo: Date picker</li>";
echo "<li>Label: 'DATA DE VENCIMENTO'</li>";
echo "<li>Obrigatório: Não (será controlado por JavaScript)</li>";
echo "<li>Visível em: Add, Edit, View</li>";
echo "</ul>";
echo "</li>";
echo "<li><strong>Adicionar JavaScript customizado</strong> (use o arquivo que será criado a seguir)</li>";
echo "<li><strong>Regenerar os arquivos</strong> do projeto</li>";
echo "</ol>";
echo "</div>";

echo "<hr>";

echo "<div style='background-color: #fff3cd; padding: 20px; border-left: 4px solid #ffc107;'>";
echo "<h3>⚠ Importante</h3>";
echo "<p>Após adicionar o campo no PHPRunner, copie os arquivos JavaScript customizados criados:</p>";
echo "<ul>";
echo "<li><code>include/socio_datavenci_custom.js</code> - Controla visibilidade do campo</li>";
echo "<li><code>include/socio_datavenci_validate.php</code> - Validação no servidor</li>";
echo "</ul>";
echo "<p>Esses arquivos serão criados automaticamente se você executar este script com o parâmetro <code>?create_files=1</code></p>";
echo "</div>";

echo "<hr>";

// Criar arquivos customizados se solicitado
if (isset($_GET['create_files']) && $_GET['create_files'] == '1') {
    echo "<h2>Criando Arquivos Customizados...</h2>";
    
    // Arquivo JavaScript
    $jsContent = <<<'JAVASCRIPT'
/**
 * Controle de visibilidade do campo datavenci
 * Mostra o campo apenas quando perfilusu = 'SÓCIO INDIVIDUAL'
 */

$(document).ready(function() {
    // Função para mostrar/ocultar datavenci
    function toggleDatavenci() {
        var perfil = $('[name="perfilusu"]').val();
        var datavenciField = $('[name="datavenci"]').closest('.r-integrated-field, .bs-edit-field');
        
        if (perfil === 'SÓCIO INDIVIDUAL' || perfil === 'SOCIO INDIVIDUAL') {
            datavenciField.show();
            // Adiciona classe para indicar que é obrigatório
            datavenciField.addClass('required-when-individual');
        } else {
            datavenciField.hide();
            // Remove validação quando não é individual
            datavenciField.removeClass('required-when-individual');
            $('[name="datavenci"]').val(''); // Limpa o valor
        }
    }
    
    // Executa ao carregar a página
    toggleDatavenci();
    
    // Executa quando o perfil muda
    $('[name="perfilusu"]').on('change', function() {
        toggleDatavenci();
    });
    
    // Validação ao submeter o formulário
    $('form').on('submit', function(e) {
        var perfil = $('[name="perfilusu"]').val();
        var datavenci = $('[name="datavenci"]').val();
        
        if ((perfil === 'SÓCIO INDIVIDUAL' || perfil === 'SOCIO INDIVIDUAL') && !datavenci) {
            alert('Data de Vencimento é obrigatória para Sócio Individual!');
            e.preventDefault();
            return false;
        }
    });
});
JAVASCRIPT;
    
    $jsFile = 'include/socio_datavenci_custom.js';
    file_put_contents($jsFile, $jsContent);
    echo "<p style='color: green;'>✓ Arquivo JavaScript criado: {$jsFile}</p>";
    
    // Arquivo PHP de validação
    $phpContent = <<<'PHP'
<?php
/**
 * Validação customizada para campo datavenci
 * Verifica se a data é obrigatória quando perfilusu = 'SÓCIO INDIVIDUAL'
 */

// Esta função deve ser chamada antes de salvar o registro
function validateDatavenciSocio($values) {
    $errors = array();
    
    $perfilusu = isset($values['perfilusu']) ? $values['perfilusu'] : '';
    $datavenci = isset($values['datavenci']) ? $values['datavenci'] : '';
    
    // Se o perfil é "SÓCIO INDIVIDUAL", a data é obrigatória
    if (($perfilusu === 'SÓCIO INDIVIDUAL' || $perfilusu === 'SOCIO INDIVIDUAL') && empty($datavenci)) {
        $errors['datavenci'] = 'Data de Vencimento é obrigatória para Sócio Individual!';
    }
    
    return $errors;
}

// Hook para adicionar validação no evento beforeAdd
function beforeAddSocioDatavenci(&$values, &$message, $inline, $pageObject) {
    $errors = validateDatavenciSocio($values);
    
    if (!empty($errors)) {
        $message = implode('<br>', $errors);
        return false;
    }
    
    return true;
}

// Hook para adicionar validação no evento beforeEdit
function beforeEditSocioDatavenci(&$values, &$message, $inline, $pageObject) {
    $errors = validateDatavenciSocio($values);
    
    if (!empty($errors)) {
        $message = implode('<br>', $errors);
        return false;
    }
    
    return true;
}
?>
PHP;
    
    $phpFile = 'include/socio_datavenci_validate.php';
    file_put_contents($phpFile, $phpContent);
    echo "<p style='color: green;'>✓ Arquivo PHP de validação criado: {$phpFile}</p>";
    
    echo "<hr>";
    echo "<div style='background-color: #d4edda; padding: 20px; border-left: 4px solid #28a745;'>";
    echo "<h3>✓ Arquivos Customizados Criados!</h3>";
    echo "<p>Agora você precisa incluir esses arquivos no PHPRunner:</p>";
    echo "<ol>";
    echo "<li><strong>JavaScript:</strong> Adicione em 'Client' → 'JavaScript' → 'Add new file' → Selecione o arquivo <code>socio_datavenci_custom.js</code></li>";
    echo "<li><strong>PHP:</strong> No evento 'Before Add' e 'Before Edit' da tabela 'socio', chame as funções de validação</li>";
    echo "</ol>";
    echo "</div>";
}

echo "<hr>";
echo "<p><a href='?create_files=1' style='background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Criar Arquivos Customizados</a></p>";
echo "<p><a href='test_desativar_clubes.php'>← Voltar para Testes</a></p>";

?>

