 <?php

    $nomeVtr = $_POST['nomeVtr'];
    $url = $_POST['url'];
    $url = trim($url);
    include("./lib/vendor/autoload.php");
    require_once 'dompdf/autoload.inc.php';

    ?>
 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="./images/fav.png" type="image/x-icon">

     <title>Gerador - QR Code</title>
     <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="./node_modules/animate.css/animate.min.css">
     <link rel="stylesheet" href="./css/style.css">
 </head>

 <body class="animate__animated animate__fadeIn bg-white">
     <div class="">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
             <a class="navbar-brand font-weight-bold" href="../"><img src="./images/logo.png" alt="logo 22BlogL" class="" width="35rem"> 22º B Log L
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="index.php">Gerador QR Code</a>
                     </li>
                 </ul>
             </div>

         </nav>
         <div class="py-0"></div>
         <div class="container-sm-fluid container">
             <div class="border border-dark rounded shadow-lg mt-1 bg-light">
                 <div class="">
                     <h4 class=" text-center pt-2 pb-0 mb-0">QR CODE GERADO</h4>
                 </div>
                 <div class=" my-1">
                     <!-- <p class="fonte-ui text-center">Insira as informações:</p> -->
                     <div class="container m-0">
                         <!-- <div class="col"></div> -->
                         <div class="text-center">
                             <!-- <h4 class="text-center">Informações da viatura:</h4> -->
                             <div>
                                 <div class="row border border-dark rounded mx-2 mt-3">
                                     
                                     
                                     <div class="col-12">
                                         <h3> <img src="./images/logo.png" width="20px" alt=""> 22º Batalhão Logístico Leve </h3>
                                         
                                        </div>
                                        <div class="col-12">
                                            
                                         <div class="text-center pb-3">
                                             <?php
                                                $data = $url;
                                                echo '<img src="' . (new \chillerlan\QRCode\QRCode())->render($data) . '" alt="QR Code" class="text-center" width="200px"/>';
                                                ?>
                                             <h4 class=" text-center py-0 my-0">
                                                 <?php echo $nomeVtr; ?>
                                             </h4>
                                         </div>
                                     </div>
                                     <div class="text-center col-12">
                                         <h5 class="">
                                             Competência! Profissionalismo! Operacionalidade!
                                         </h5>
                                     </div>
                                 </div>
                             </div>
                             <div class="py-1"></div>
                             <div class="col-12 m-2 text-center">
                                 <a href="../index.php" class="btn btn-outline-danger">Voltar</a>
                                 <button class="btn btn-outline-primary" data-toggle="modal" data-target="#staticBackdrop">Imprimir</button>
                                 <!-- <button class="btn btn-outline-success" onclick=" " >Salvar</button> -->
                             </div>
                         </div>
                         <!-- <div class="col"></div> -->

                     </div>
                 </div>
                 <!-- <p class="text-danger small text-center animate__animated animate__flash animate__repeat-3 animate__delay-1s animate__slower">ESTE GERADOR FOI PROGRAMADO APENAS PARA TRANSFORMAR URL EM QRCODE, PORTANTO, USE-O APENAS PARA TAL FINALIDADE.</p> -->
             </div>
         </div>
         <div class="py-2"></div>
     </div>
     <!-- <div class="fixed-bottom animate__animated animate__fadeIn animate__delay-3s mb-0">
         <p class="text-center text-muted mb-0">
             Desenvolvido por <a href="https://lemosdeveloper.com/" target="_blank" class="text-decoration-none text-muted">&copy;Lemos Developer</a>
         </p>
     </div> -->


     <!-- Modal -->
     <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="staticBackdropLabel"><?php echo $nomeVtr ?></h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <div id="print" class="conteudo">

                         <center>

                             <table border="1" cellspacing=0 cellpadding=2>
                                 <tr>
                                     <td colspan="8">
                                         <center>
                                             <h3 style="margin-top: 1%;"> <img src="./images/logo.png" width="20px" alt="" style="margin-bottom: -1%;"> 22º Batalhão Logístico Leve </h3>
                                         </center>
                                     </td>
                                 </tr>
                                 <tr>
                                     <th colspan="8">

                                         <div class="text-center">
                                             <?php
                                                $data = $url;
                                                echo '<img src="' . (new \chillerlan\QRCode\QRCode())->render($data) . '" alt="QR Code" style="margin-bottom: 0%;" width="300px"/>';
                                                ?>
                                             <h4 class=" text-center" style="margin-top: 0%;">
                                                 <?php echo $nomeVtr; ?>
                                             </h4>
                                         </div>
                                     </th>
                                 </tr>
                                 <tr>
                                     <th colspan="8">
                                         <center>
                                             COMPETÊNCIA! PROFISSIONALISMO! OPERACIONALIDADE!
                                         </center>
                                     </th>
                                 </tr>
                             </table>
                         </center>

                     </div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fechar</button>
                     <button type="button" class="btn btn-outline-primary" onclick="cont()">Imprimir</button>
                 </div>
             </div>
         </div>
     </div>



     <?php include_once './assets/1.php' ?>
     <script src="./node_modules/jquery/dist/jquery.js"></script>
     <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
     <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
     <script src="./js/imprimir.js"></script>
     <script src="./js/baixar.js"></script>
 </body>

 </html>