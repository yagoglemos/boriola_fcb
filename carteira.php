<?php 

require_once("include/dbcommon.php");

$id = 0;

if(isset($_SESSION['idUsuario'])) {
	$id = (int) $_SESSION['idUsuario'];
} 

if(isset($_GET['id'])) {
	$id = (int) $_GET['id'];
}

if($id == 0) {
  header('Location: index.htm');
}


$consulta_socio = DB::Query("SELECT * FROM socio WHERE id = '{$id}' ");
$socio = $consulta_socio->fetchAssoc();

if(empty($socio)) {
    header('Location: index.htm');
}

$consulta_clube = DB::Query("SELECT * FROM clube WHERE id = '{$socio['clube']}' ");
$clube = $consulta_clube->fetchAssoc();

$path = dirname($_SERVER['PHP_SELF']);
$host = $_SERVER['HTTP_HOST'];
$url_base = "http://{$host}{$path}";

//$url = "http://localhost:8086/equipamentos_view.php?editid1={$equipamento['id']}&eq={$equipamento['id']}&cl={$equipamento['cliente']}";

$url = "{$url_base}/carteira.php?id=" . $socio['id'];


///Log e tal

date_default_timezone_set('America/Sao_Paulo');

$arquivo = "carteira.txt";

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
    <title>Carteira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <style>
        /* Estilos comuns */
        .card {
            width: 325px; /* Largura fixa */
            height: 204px; /* Altura fixa */
            margin: 20px auto; /* Centralizar o card */
            background-image: url('img/0.jpg'); /* Imagem de fundo */
            background-size: cover;
            background-repeat: no-repeat; /* Evitar repetição de imagem de fundo */
        }

        #card2 {
            width: 325px; /* Largura fixa */
            height: 204px; /* Altura fixa */
            background-image: url('img/01.jpg'); /* Imagem de fundo */
            background-size: cover;
            background-repeat: no-repeat; /* Evitar repetição de imagem de fundo */
        }

        .card-body .primeirotexto {
            text-align: left; /* Centralizar texto */
            margin-bottom: -20px;
            font-size: 8px; /* Tamanho da fonte */
        }

        .card-body .segundotexto {
            text-align: center; /* Centralizar texto */
            margin-bottom: -10px;
            font-size: 6px; /* Tamanho da fonte */
        }

        .card-body .terceirotexto {
            text-align: center; /* Centralizar texto */
            margin-bottom: 0px;
            font-size: 7.5px; /* Tamanho da fonte */
        }

        .card-body .quartotexto {
            text-align: center; /* Centralizar texto */
            font-size: 7.5px; /* Tamanho da fonte */
        }

        .img-right {
            float: right; /* Imagem à direita */
            margin-left: 10px; /* Espaço entre a imagem e o texto */
        }

        

        .horizontal-images img {
            margin-left: 15px;/*
            max-width: 55px; /* Largura máxima das imagens horizontais */
            /*height: 30px; Altura automática */
        }

        body {
        	font-family: verdana;
        	font-weight: 400;
        }
        
        
    </style>
</head>

<body onload="">

    <?php if($socio['ativo'] == 'SIM' AND $clube['ativo'] == 'SIM') { ?>

	<div class="col-md-12 mx-auto">
		<div align="center">
			<br>
			<button onclick="generatePDF()" >Baixar em PDF</button>
		</div>
	</div>

    <div class="container" id="content">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <img src="img/1.png" alt="Identificação do Criador Oficial Registrado do Brasil" style="max-width: 40px; max-height: 35px;"> <a style="font-weight: 700; font-size: 7px;">IDENTIFICAÇÃO CRIADOR OFICIAL REGISTRADO DO BRASIL</a>
                </div>
                <div class="card-body">
                    <div>
                        <div class="img-right">
                             <!--<img src="img/2.png" alt="Coordenadas" > QR Code -->
                        </div>
                        <p class="primeirotexto">
                            <a style="font-weight: 700;"><?php echo mb_strtoupper($socio['nome']) ?></a> <br>
                            <a>CPF: <?php echo $socio['cpf'] ?></a> <br>
                            <a>CLUBE: <?php echo strtoupper($clube['nome']) ?></a> <br>
                            <a>COORDENADAS:</a> <br>
                            <a>LATITUDE: <?php echo $socio['latpombal'] ?></a> <br>
                            <a>LONGITUDE: <?php echo $socio['longpombal'] ?></a>
                        </p>
                    </div>
                    <br>
                    <div>
                        <p class="terceirotexto">
                            <a>Documento para uso exclusivo do Criador Oficial Registrado</a> <br>
                            <a style="font-weight: 600;">FEDERAÇÃO COLUMBÓFILA BRASILEIRA </a><br>
                            <a href="http://www.fcb.org.br">www.fcb.org.br</a> <br>
                            <a>CNPJ: 86.877.420/0001-76</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mb-3" id="card2">
                <div class="card-body">
                    <div>
                        <div class="img-right">
                            <div id="qrcode">
                            	
                            </div>
                        </div>
                        
                        <p class="segundotexto" style="font-size: 16px;">
                            <a style="font-weight: 600; font-size: 9px;">DATA DO REGISTRO 
                            	<?php echo date("d/m/Y", strtotime($socio['datacricad'])) ?></a> <br>
                            <a style="font-weight: 600; font-size: 9px">VALIDADE <?php echo date("d/m/Y", strtotime('+1 year', strtotime($socio['datacricad']))) ?></a> <br>
                        </p>
                    </div>
                    <br>
                    <div class="card-body horizontal-images">
                        <img src="img/3.png" width="44px" alt="Imagem 1">
                        <img src="img/6.png" width="34px" alt="Imagem 4">
                        <img src="img/7.png" width="34px" alt="Imagem 5">
                    </div>
                    <div>
                        <p class="quartotexto">
                            <a>Documento para uso exclusivo do Criador Oficial Registrado</a> <br>
                            <a style="font-weight: 600;">FEDERAÇÃO COLUMBÓFILA BRASILEIRA </a><br>
                            <a href="http://www.fcb.org.br">www.fcb.org.br</a> <br>
                            <a>CNPJ: 86.877.420/0001-76</a><br>
                            <img src="img/8.png" class="img-right" style="max-width: 50px; max-height: 50px;">
                        </p>
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

    <!-- JavaScript do Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script>
      function generatePDF() {
          var element = document.getElementById('content');

          html2pdf().from(element).set({
            margin: 0.4,
            filename: 'documento.pdf',
            image: { type: 'jpeg', quality: 0.98 },
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
            width: 70,
            height: 70
        };

        // Gera o QR Code
        var qrcode = new QRCode(document.getElementById('qrcode'), configuracoes);
        qrcode.makeCode(dados);

    </script>
</body>

</html>
