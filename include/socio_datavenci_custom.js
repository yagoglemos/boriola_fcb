/**
 * Controle de visibilidade do campo datavenci
 * Mostra o campo apenas quando perfilusu = 'SÓCIO INDIVIDUAL'
 * 
 * @author Sistema FCB
 * @version 1.0
 */

$(document).ready(function() {
    console.log('Script datavenci carregado!');
    
    // Adiciona CSS para ocultar o campo inicialmente
    $('<style>')
        .prop('type', 'text/css')
        .html(`
            .datavenci-field {
                display: none !important;
            }
            .datavenci-field.show {
                display: block !important;
            }
            [data-field="datavenci"] {
                display: none !important;
            }
            [data-field="datavenci"].show {
                display: block !important;
            }
            .required {
                color: red !important;
            }
            .required::after {
                content: " *";
                color: red;
                font-weight: bold;
            }
        `)
        .appendTo('head');
    
    // Aguarda um pouco para garantir que todos os elementos foram carregados
    setTimeout(function() {
        initDatavenciControl();
    }, 500);
});

function initDatavenciControl() {
    console.log('Iniciando controle de datavenci...');
    
    // Encontra o campo perfilusu de diferentes formas
    var perfilusuField = $('[name="perfilusu"]');
    
    if (perfilusuField.length === 0) {
        // Tenta por ID
        perfilusuField = $('#perfilusu');
    }
    
    if (perfilusuField.length === 0) {
        // Tenta por seletor de data-field
        perfilusuField = $('[data-field="perfilusu"] select, [data-field="perfilusu"] input');
    }
    
    if (perfilusuField.length === 0) {
        // Tenta por seletor mais genérico
        perfilusuField = $('select[name*="perfil"], input[name*="perfil"]');
    }
    
    console.log('Campo perfilusu encontrado:', perfilusuField.length);
    
    if (perfilusuField.length === 0) {
        console.error('Campo perfilusu não encontrado! Tentando novamente em 1 segundo...');
        setTimeout(initDatavenciControl, 1000);
        return;
    }
    
    // Encontra o container do campo datavenci diretamente
    var datavenciContainer = $('[data-field="datavenci"]');
    
    if (datavenciContainer.length === 0) {
        datavenciContainer = $('.datavenci-field');
    }
    
    console.log('Container datavenci encontrado:', datavenciContainer.length);
    
    if (datavenciContainer.length === 0) {
        console.error('Container datavenci não encontrado! Tentando novamente em 1 segundo...');
        setTimeout(initDatavenciControl, 1000);
        return;
    }
    
    // Encontra o campo datavenci dentro do container
    var datavenciInput = datavenciContainer.find('input, select').first();
    
    console.log('Campo datavenci encontrado:', datavenciInput.length);
    
    // Função para mostrar/ocultar datavenci
    function toggleDatavenci() {
        var perfil = perfilusuField.val();
        console.log('Perfil selecionado:', perfil);
        
        if (perfil === 'SÓCIO INDIVIDUAL' || perfil === 'SOCIO INDIVIDUAL') {
            console.log('Mostrando campo datavenci');
            datavenciContainer.removeClass('datavenci-field');
            datavenciContainer.addClass('show');
            // Adiciona classe para indicar que é obrigatório
            datavenciContainer.addClass('required-when-individual');
            // Torna o campo obrigatório visualmente
            var label = datavenciContainer.find('label');
            if (label.length > 0) {
                label.addClass('required');
            }
        } else {
            console.log('Ocultando campo datavenci');
            datavenciContainer.addClass('datavenci-field');
            datavenciContainer.removeClass('show');
            // Remove validação quando não é individual
            datavenciContainer.removeClass('required-when-individual');
            // Limpa todos os campos de data
            datavenciContainer.find('input, select').val('');
            // Remove indicação de obrigatório
            var label = datavenciContainer.find('label');
            if (label.length > 0) {
                label.removeClass('required');
            }
        }
    }
    
    // Executa ao carregar a página
    toggleDatavenci();
    
    // Executa quando o perfil muda
    perfilusuField.on('change', function() {
        console.log('Perfil alterado!');
        toggleDatavenci();
    });
    
    // Também monitora o evento de input
    perfilusuField.on('input', function() {
        console.log('Input do perfil alterado!');
        toggleDatavenci();
    });
    
    // Validação ao submeter o formulário
    $('form').on('submit', function(e) {
        var perfil = perfilusuField.val();
        var datavenci = datavenciInput.val();
        
        console.log('Validando formulário - Perfil:', perfil, 'Data:', datavenci);
        
        if ((perfil === 'SÓCIO INDIVIDUAL' || perfil === 'SOCIO INDIVIDUAL') && !datavenci) {
            alert('Data de Vencimento é obrigatória para Sócio Individual!');
            e.preventDefault();
            return false;
        }
    });
    
    console.log('Controle de datavenci inicializado com sucesso!');
}
