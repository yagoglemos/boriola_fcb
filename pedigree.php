<?php

require_once("include/dbcommon.php");

$id = 0;

if(isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}

if($id == 0) {
  header('Location: index.htm');
}

$consulta_pedigree = DB::Query("SELECT * FROM pedigree WHERE id = '{$id}' ");
$pedigree = $consulta_pedigree->fetchAssoc();

$consulta_pombo = DB::Query("SELECT * FROM pombo WHERE id = '{$pedigree['filhote']}' ");
$pombo_data = $consulta_pombo->fetchAssoc();

$consulta_socio = DB::Query("SELECT * FROM socio WHERE id = '{$pedigree['usuario']}' ");
$socio = $consulta_socio->fetchAssoc();


date_default_timezone_set('America/Sao_Paulo');

$arquivo = "Pedigree.txt";

$mensagem = date("d/m/Y H:i:s") . " - socio: {$socio['id']}.\n";

if ($handle = fopen($arquivo, 'a')) {
    fwrite($handle, $mensagem); // Escreve a mensagem no arquivo
    fclose($handle);
}

// Função para obter um pombo pelo ID
function getPombo($id) {
    $consulta_pombo = DB::Query("
        SELECT 
            pombo.*, 
            cores.nome AS cor 
        FROM pombo
        INNER JOIN cores ON pombo.cor = cores.id
        WHERE pombo.id = '{$id}'
    ");

    return $consulta_pombo->fetchAssoc();
}

// Função para gerar o fluxograma em Mermaid
function gerarFluxograma($id) {
    $pombo = getPombo($id);

    if (!$pombo) {
        header('Location: index.htm');
        exit; // Adicionado para evitar execução desnecessária após o redirecionamento
    }

    // Iniciando o conteúdo do fluxograma em Mermaid com direção da esquerda para a direita
    $mermaid = "graph LR\n";

    // Gerando o nó do pombo base (filho) com estilo alinhado à esquerda e fonte menor
    $mermaid .= "filho[\"<div style='text-align: left; font-size: 12px; font-family: arial; width: 100px;line-height: 1.2;word-wrap: break-word;white-space: normal;'><b>FILHOTE</b><br>Nº: {$pombo['anilha']}<br>Cor: " . $pombo['cor'] . " <br>Origem: {$pombo['dono']}</div>\"]\n";

    // Função auxiliar para adicionar pais e avós recursivamente
    function adicionarParentes($pombo, $relacao, &$mermaid, $profundidade = 0) {
        // Limite de profundidade (tataravós = 4 gerações)
        if ($profundidade > 4) {
            return;
        }
        if ($pombo) {
            $pai = $pombo['pai'] ? getPombo($pombo['pai']) : null;
            $mae = $pombo['mae'] ? getPombo($pombo['mae']) : null;

            // Adiciona o pai, se existir, com estilo alinhado à esquerda e fonte menor
            if ($pai) {
                $mermaid .= "{$relacao}_pai[\"<div style='text-align: left; font-size: 12px;font-family: arial; width: 100px;line-height: 1.2;word-wrap: break-word;white-space: normal;'><b>PAI</b><br>Nº: {$pai['anilha']}<br>Cor: {$pai['cor']}<br>Origem: {$pai['dono']}</div>\"]\n";
                $mermaid .= "{$relacao} --> {$relacao}_pai\n";

                // Chamada recursiva para os avós paternos, aumentando a profundidade
                adicionarParentes($pai, "{$relacao}_pai", $mermaid, $profundidade + 1);
            }

            // Adiciona a mãe, se existir, com estilo alinhado à esquerda e fonte menor
            if ($mae) {
                $mermaid .= "{$relacao}_mae[\"<div style='text-align: left; font-size: 12px;font-family: arial; width: 100px;line-height: 1.2;word-wrap: break-word;white-space: normal;'><b>MÃE</b><br>Nº: {$mae['anilha']}<br>Cor: {$mae['cor']}<br>Origem: {$mae['dono']}</div>\"]\n";
                $mermaid .= "{$relacao} --> {$relacao}_mae\n";

                // Chamada recursiva para os avós maternos, aumentando a profundidade
                adicionarParentes($mae, "{$relacao}_mae", $mermaid, $profundidade + 1);
            }
        }
    }

    // Adiciona os pais e gerações anteriores
    adicionarParentes($pombo, "filho", $mermaid);

    return $mermaid;
}

// ID do pombo inicial (filho)
$id = $pedigree['filhote'];  // Por exemplo, pode ser passado via URL
$fluxograma = gerarFluxograma($id);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module">
    import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';

    mermaid.initialize({ 
       startOnLoad: true,
       flowchart: {
         nodeSpacing: 20, // Reduzir o espaçamento horizontal entre os nós
         rankSpacing: 50 // Reduzir o espaçamento vertical entre as gerações
       },
    });

    document.addEventListener('DOMContentLoaded', function () {
      mermaid.init();
    });
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

 <?php if($socio['ativo'] == 'SIM') { ?>
<div class="col-md-11 mx-auto mt-2">
    <button onclick="generatePDF()">BAIXAR PDF</button>
</div>
<div class="col-md-10 mt-2" id="content">
  <div class="col-md-11">
    <table width="100%">
      <tbody>
        <tr>
          <td width="20%"><img src="login.png" width="80%"></td>
          <td style="margin-left: 40px; font-size: 12px; font-family: arial">
            <h4>Pedigree</h4>
            Nº Pedigree: <?php echo $pedigree['id'] ?>/<?php echo date("Y", strtotime($pedigree['data'])) ?> - Anilha: <?php echo $pombo_data['anilha'] ?><br>
            Criador: <?php echo $socio['nome'] ?> - CPF: <?php echo substr($socio['cpf'], 0, 8) . 'XXX' . substr($socio['cpf'], 11); ?><br>
            Endereço:

            <?php  

            echo $socio['endereco'];

            if(!empty($socio['numero'])) {
                echo ", ". $socio['numero'];
            }

            if(!empty($socio['complemento'])) {
                echo ", ". $socio['complemento'];
            }

            if(!empty($socio['cidade'])) {
                echo ", ". $socio['cidade'] . ' - ' . $socio['estado'];
            }

            if(!empty($socio['cep'])) {
                echo ", ". $socio['cep'];
            }



            ?>

            <br>
            Email: <?php echo $socio['email'] ?><br>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="col-md-11 mt-3">
    <div class="mermaid">
      <?= $fluxograma; ?>
    </div>
  </div>

<!-- QR Code na parte inferior esquerda 
<div style=" bottom: 10px; left: 10px;">
  <img id="qrcode" src="" alt="QR Code para a página atual">
</div>-->

</div>



<!-- Botão para gerar PDF -->


<!-- Biblioteca dom-to-image -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
<!-- Biblioteca jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script>

<?php 

$path = dirname($_SERVER['PHP_SELF']);
$host = $_SERVER['HTTP_HOST'];
$url_base = "http://{$host}{$path}";

$url = "{$url_base}/pedigree.php?id=" . $pedigree['id'];

?>

  // Função para gerar o QR code com o URL atual
  function gerarQRCode() {
    const urlAtual = '<?php echo $url ?>'
    const qrCodeUrl = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(urlAtual)}`;
    document.getElementById('qrcode').src = qrCodeUrl;
  }

  // Chama a função para gerar o QR code
  //gerarQRCode();

  // Função para gerar o PDF
  // Função para gerar o PDF com margens e QR code no final da página
// Função para gerar o PDF com margens e QR code no final da página
function generatePDF() {
  var element = document.getElementById('content');
  var qrCodeElement = document.getElementById('qrcode'); // Elemento do QR code

  // Ajustar o tamanho do elemento para caber na página PDF
  element.style.width = '800px';

  // Esconder temporariamente o QR code para evitar duplicidade
  //qrCodeElement.style.display = 'none';

  // Aguarda 1 segundo para garantir que o diagrama foi renderizado
  setTimeout(function () {
    domtoimage.toPng(element, {
    width: element.offsetWidth * 2,  // Aumentar a largura (ex: dobra)
    height: element.offsetHeight * 2, // Aumentar a altura (ex: dobra)
    style: {
      transform: 'scale(2)',  // Aumentar a escala do elemento
      transformOrigin: 'top left'
    }
  })
      .then(function (dataUrl) {
        var img = new Image();
        img.src = dataUrl;
        img.onload = function () {
          var pdf = new jspdf.jsPDF('p', 'pt', 'a4');
          var pageWidth = pdf.internal.pageSize.getWidth();
          var pageHeight = pdf.internal.pageSize.getHeight();

          // Definir margens
          var margin = 20;
          var imgWidth = pageWidth - 2 * margin; // Ajusta a largura da imagem considerando as margens
          var imgHeight = img.height * imgWidth / img.width; // Mantém a proporção da imagem

          // Adiciona a imagem com as margens definidas
          pdf.addImage(img, 'PNG', margin, margin, imgWidth, imgHeight);

          // Mostrar novamente o QR code no HTML
         // qrCodeElement.style.display = 'block';

          // Adicionar o QR code no final da página PDF
          const urlAtual = window.location.href;
          const qrCodeUrl = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(urlAtual)}`;
          var qrCodeImg = new Image();
          qrCodeImg.src = qrCodeUrl;
          qrCodeImg.onload = function () {
            var qrCodeSize = 80; // Define um tamanho fixo para o QR code
            var qrCodeX = margin; // Posição X considerando a margem
            var qrCodeY = pageHeight - qrCodeSize - margin; // Posição Y para ficar no final da página

            pdf.addImage(qrCodeImg, 'PNG', qrCodeX, qrCodeY, qrCodeSize, qrCodeSize);
            pdf.save('<?php echo $pombo_data['anilha'] ?>'  + '.pdf');
          };
        };
      })
      .catch(function (error) {
        console.error('Erro ao gerar imagem para PDF', error);
      });
  }, 1000); // 1000 milissegundos = 1 segundo
}

 <?php } else { ?>


    <div align="center" style="margin-top: 40px">
        
        <h1>Cadastro INATIVO, favor procurar a administração FCB BR para regularização</h1>

    </div>


    <?php } ?>


</script>

</body>
</html>
