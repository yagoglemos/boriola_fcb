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

$url = "{$url_base}/certificado_pombal.php?id=" . $socio['id'];

///Log e tal

date_default_timezone_set('America/Sao_Paulo');

$arquivo = "pombal.txt";

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
    <title>Certificado de Conformidade Sanitária</title>
    <!-- Bootstrap CSS -->
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body,
        html {
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .content {
            position: relative; /* não mexer */
            max-width: 800px;
            
            max-height: 100%;
        }

        /*.content::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 20px; 
            background-color: #126E66;  
            height: 100%;*/
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Altura mínima para ocupar toda a tela */
        }

        .content p {
            font-family: 'Poppins', sans-serif;
            font-size: 8pt;
            text-align: justify;
        }

        .bold {
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
        }

        .bold2, ul {
            font-family: 'Poppins', sans-serif;
            font-size: 8pt;
            text-align: justify;
        }

        .titulo {
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            text-align: center;
        }

        .subtitulo {
            font-family: 'Open Sans', sans-serif;
            text-align: justify;
            font-size: 14px;
            text-align: center;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/1.png');
            background-repeat: no-repeat;
            background-size: 500px;
            background-position: center;
            opacity: 0.2; /* Define a opacidade da imagem */
        }

        .contact-info {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-info p{
            padding-top: 10px;
            text-align: center;
        }

        .contact-info img {
            max-width: 90px;
            height: auto;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border-radius: 8px 8px 0 0;
        }

        .container2 {
            margin-left: -100px;
            margin-top: -15px;
            text-align: left;
        }

        .item {
            display: inline-block;
            margin: 0 100px;
        }

        .assinatura {
            margin-top: 30px;
            width: 400px;
            border-top: 2px solid #000; 
            text-align: center;
            margin-left: 170px;
        }

        
    </style>
</head>

<body>

    <?php if($socio['ativo'] == 'SIM' AND $clube['ativo'] == 'SIM') { ?>

    <div class="col-md-12 mx-auto">
        <div align="center">
            <br>
            <button onclick="generatePDF()" >Baixar em PDF</button>
        </div>
    </div>
    
    <div class="container" id="content">
        <div class="content">
            <div class="background-image"></div>
            <h1 class="titulo">FEDERAÇÃO COLUMBÓFILA BRASILEIRA – FCB BR</h1>
            <h2 class="subtitulo">CERTIFICADO SANITÁRIO DO CRIADOR OFICIAL REGISTRADO DO BRASIL</h2><br>


            <p class="bold">Criador/Proprietário: <?php echo mb_strtoupper($socio['nome']);  ?></p>
            <p class="bold">Endereço: <?php echo mb_strtoupper($socio['endereco']) ?>, <?php echo $socio['numero'] ?>, <?php echo mb_strtoupper($socio['complemento']) ?>, <?php echo mb_strtoupper($socio['cidade']) ?>-<?php echo mb_strtoupper($socio['estado']) ?>, <?php echo $socio['cep'] ?></p>
            <div class="container2">
                <div class="item"><p class="bold">Data de Emissão: <?php echo date("d/m/Y") ?></p></div>
                <div class="item"><p class="bold">Validade: <?php echo date("d/m/Y", strtotime($clube['datavenci'])) ?></p></div>
              </div>
            <p style="margin-top: -4px">Declaro, sob as penas da lei, que:</p>


            <p>1.   Instalações: O pombal destinado à criação de pombos-correio (Columba Lívia - Código 6.12/MAPA) sob minha responsabilidade encontra-se em conformidade com as normas sanitárias vigentes do MAPA, incluindo dimensões adequadas por ave, materiais de construção higienizáveis, sistema de ventilação e iluminação natural/artificial que garantam conforto térmico e lumínico, além de medidas efetivas de controle de pragas e vetores. O pombal é higienizado regularmente, com remoção de fezes, penas e restos de alimentos, e desinfecção periódica com produtos adequados. Não são criadas outras espécies de animais no mesmo ambiente.</p>

            <p>2.   Condição Sanitária das Aves: Todos as aves mantidas no pombal estão clinicamente saudáveis, livres de ectoparasitas e endoparasitas, e seguem um programa de vacinação e vermifugação estabelecido por médico veterinário devidamente habilitado.</p>

            <p>3.   Nutrição e Hidratação: As aves recebem alimentação balanceada, formulada por profissional especializado, com ração de qualidade comprovada e armazenada em condições adequadas. Água limpa e potável está disponível ad libitum, com sistema de bebedouros higienizados regularmente.</p>

            <p>4.   Identificação e Rastreabilidade: Todos as aves presentes no pombal possuem anilhas invioláveis originais FCB-BR/FCI e estão devidamente registrados no Sistema de Rastreabilidade Animal do MAPA (IN Nº 5/2018) - Código 6.12 – Columba Lívia com seus respectivos números de anilha garantindo a rastreabilidade individual.</p>

            <p>5.   Vigilância Sanitária: Em caso de qualquer alteração no estado de saúde das aves, suspeita de doença ou mortalidade, comprometo-me a comunicar imediatamente o médico veterinário responsável e seguir as orientações da Plataforma Doutor Pigeons disponibilizada pela FCB-BR/UNICENTRO.</p>

             <p>6.  Responsabilidade: Estou ciente das minhas responsabilidades legais e sanitárias como criador oficial registrado de pombos-correio, incluindo a notificação obrigatória de doenças de notificação obrigatória e a adoção de medidas de biosseguridade para prevenir a disseminação de enfermidades.</p>


              <p>7. Bem-estar Animal: As aves são manejadas com respeito e cuidado, garantindo seu bem-estar físico e mental. Não são submetidas a nenhum tipo de abuso ou negligência</p>



                <div class="assinatura">
                    <?php echo mb_strtoupper($socio['nome']);  ?>
                  </div>


                  
            <p class="bold2">

                <ul>
                    <li>A FCB poderá solicitar documentos e realizar inspeções para verificar as informações.</li>

                    <li>Este certificado não substitui o acompanhamento veterinário regular.</li>

                    <li>
                        Válido apenas para os pombos-correio (Columba Lívia) presentes no pombal e devidamente registrados no Sistema de Rastreabilidade Animal do MAPA.
                    </li>
                </ul>

            </p>

            <p class="bold2">
                <b>Sr. Agente de Fiscalização Sanitária,</b> para conferir a validade e autenticidade do presente Certificado, solicitamos realizar a leitura do QRCode.
            </p>

            <div class="contact-info">
                <div>
                    <div class="image-container">
                        <div id="qrcode">
                            
                        </div>
                    </div>
                    <p>E-MAIL: CONTATO@FCB.ORG.BR<br>
                        WEBSITE: WWW.FCB.ORG.BR<br>
                        RUA JORGE TIBIRIÇA, 1635 - SALA 4 - PARQUE INDUSTRIAL<br>CEP 15025-060 - SÃO JOSÉ DO RIO
                        PRETO-SP</p>
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
            margin: [0.2, 0.5, 0.2, 0.5],
            filename: 'documento.pdf',
            image: { type: 'jpeg', quality: 1.0 },
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