<?php 


require_once("include/dbcommon.php");

$id = 0;

if(isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}

if($id == 0) {
  header('Location: index.htm');
}

$consulta_anilha = DB::Query("SELECT * FROM anilhas WHERE id = '{$id}' ");
$anilha = $consulta_anilha->fetchAssoc();

if(empty($anilha)) {
    header('Location: index.htm');
}

$consulta_socio = DB::Query("SELECT * FROM socio WHERE id = '{$anilha['socio']}' ");
$socio = $consulta_socio->fetchAssoc();

if(empty($socio)) {
    header('Location: index.htm');
}



$path = dirname($_SERVER['PHP_SELF']);
$host = $_SERVER['HTTP_HOST'];
$url_base = "http://{$host}{$path}";

$url = "{$url_base}/certificado_anilha.php?id=" . $anilha['id'];

///Log e tal

date_default_timezone_set('America/Sao_Paulo');

$arquivo = "anilha.txt";

$mensagem = date("d/m/Y H:i:s") . " - socio: {$socio['id']}.\n";

if ($handle = fopen($arquivo, 'a')) {
    fwrite($handle, $mensagem); // Escreve a mensagem no arquivo
    fclose($handle);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado de Anilha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: 2px solid red;
            width: 302px; /* 204px * 2 para a largura das imagens */
            height: 302px; /* Altura fixa de 204px */
            margin: auto;
            position: relative; /* Para posicionar as imagens */
        }

        .custom-img {
            width: 50px; /* 25% da largura do quadrado */
            height: auto; /* Altura automática */
            top: 50%; /* Alinhar ao topo */
        }

        .custom-img2 {
             /* Altura automática */
             
        }

        .custom-img.left {
            width: 60px;
            left: 0;
        }

        .custom-img.right {
            width: 80px;
            margin-left: 20px;
            right: 0;
        }

        .custom-img.qr {
            width: 35%; /* Tamanho do QR code em relação ao quadrado */
            position: absolute; /* Posicionamento absoluto */
            top: 50%; /* Alinhar ao topo */
            left: 45%;
            transform: translate(50%, -50%); /* Para centralizar vertical e horizontalmente */
        }

        .card-header,
        .card-body,
        .card-footer {
            padding: 10px; /* Diminuindo o espaçamento interno */
        }

        .card-body a {
            font-weight: bold;
            text-decoration: none;
            color: inherit;
            font-size: 6px; /* Diminuindo o tamanho do texto */
        }

        .card-body p {
            font-weight: bold;
            margin: 0;
            margin-bottom: 5px;
            font-size: 6px; /* Diminuindo o tamanho do texto */
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .flex-container {
            display: flex;
        }

        .flex-container img{
            
        }

        .flex-container .assinatura img{
            width: 150px;
        }

        .flex-item {
            flex: 1;
            margin-top: -6px;
        }

        .align-items-center {
            align-items: center;
        }

        .text-center {
            text-align: center;
        }

        .text-end {
            text-align: end;
        }

        .my-5 {
            margin-top: 3.125rem!important;
        }
    </style>
     <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>

<body>

    <?php if($socio['ativo'] == 'SIM') { ?>

    <div class="col-md-12 mx-auto">
        <div align="center">
            <br>
            <button onclick="generatePDF()" >Baixar em PDF</button>
        </div>
    </div>

    <div class="container">
        <div class="card" id="content">
            <div class="card-header">
                <div class="flex-container align-items-center">
                    <div class="flex-item">
                        <img src="img/1.png" alt="Logo Esquerda" class="custom-img left">
                    </div>
                    <div class="flex-item text-center">
                        <h1 class="card-title" style="font-size: 14px;">2024 FCB-BR</h1> <!-- Diminuindo o tamanho do texto -->
                    </div>
                    <div class="flex-item">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="flex-container" style="margin-top: -6px">
                    <div class="flex-item" style="flex: 0 0 204px;">
                        <p>
                            <a style="font-size: 12px; font-weight: 700;">CERTIFICADO DE PROPRIEDADE</a><br> <!-- Diminuindo o tamanho do texto -->
                            <a style="font-size: 11px;">RASTREABILIDADE ANIMAL</a><br> <!-- Diminuindo o tamanho do texto -->
                            <a style="font-size: 11px;">I.N. Nº 5/2018 - MAPA</a> <!-- Diminuindo o tamanho do texto -->
                        </p>
                        <p>
                            <a style="font-size: 11px;">Número de Série Original</a><br> <!-- Diminuindo o tamanho do texto -->
                            <a style="font-size: 11px;">FCB-BR-FCI-MAPA</a> <!-- Diminuindo o tamanho do texto -->
                        </p>
                        <p style="font-size: 20px;"><?php echo $anilha['serie'] ?></p> <!-- Diminuindo o tamanho do texto -->
                        <p style="font-size: 11px;">Criador Oficial Registrado</p> <!-- Diminuindo o tamanho do texto -->
                        <p style="font-size: 10px;"><?php echo mb_strtoupper($socio['nome']) ?></p> <!-- Diminuindo o tamanho do texto -->
                        <p style="font-size: 10px;">CPF nº <?php echo mb_strtoupper($socio['cpf']) ?></p>
                    </div>
                    <div class="flex-item text-end my-5">
                        <div class="custom-img qr" style="width: 106px; height: 106px">
                            <div id="qrcode" style="width: 100%; margin-top: -2px">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="flex-container">
                    <div class="flex-item assinatura">
                        <img src="img/9.png" alt="Imagem 1" class="custom-img2">
                    </div>
                    <div class="flex-item">
                        <img src="img/3.png" alt="Imagem 2" class="custom-img2" style="width: 60px">
                    </div>
                    <div class="flex-item">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } else { ?>


    <div align="center" style="margin-top: 40px">
        
        <h1>Cadastro INATIVO, favor procurar a administração FCB BR para regularização</h1>

    </div>


    <?php } ?>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script>
      function generatePDF() {
          var element = document.getElementById('content');

          html2pdf().from(element).set({
            margin: 0.4,
            filename: 'documento.pdf',
            image: { type: 'jpeg', quality: 1.00 },
            html2canvas: { scale: 5 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
          }).toPdf().get('pdf').then(function (pdfObj) {
            // `pdfObj` é uma instância do jsPDF com o documento gerado
            pdfObj.save('documento.pdf');
          });


      }


       // Dados que serão codificados no QR Code
        var dados = '<?php echo $url; ?>';

        // Configurações do QR Code (opcional)
        var configuracoes = {
            width: 95,
            height: 95
        };

        // Gera o QR Code
        var qrcode = new QRCode(document.getElementById('qrcode'), configuracoes);
        qrcode.makeCode(dados);

    </script>

</body>

</html>
