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

<body class="bg-light animate__animated animate__fadeIn">
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
                        <a class="nav-link" href="#">Gerador QR Code</a>
                    </li>

                </ul>
            </div>

        </nav>
        <div class="py-2"></div>
        <div class="container-sm-fluid container">
            <div class="border border-dark rounded shadow-lg mt-4">
                <div class="">
                    <div class="text-center pt-2">
                        <img src="images/fav.png" width="60px" alt="">
                    </div>
                    <h4 class="fonte-ui-titulo text-center pt-3">GERADOR DE QR CODE</h4>
                </div>

                <div class=" my-3">
                    <!-- <p class="fonte-ui text-center">Insira as informações:</p> -->
                    <div class="container">
                        <form action="./qrcode.php" method="POST">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-sm-10 col-md-6 col-12">
                                    <div class="container">
                                        <div class="row">
                                            <div class="container">
                                                <div class="row">
                                                    <div class=" col-sm-12 col-lg-6 form-group form-row">
                                                        <label for="url" class=" mb-0">Nome de Guerra</label>
                                                        <input type="text" name="nomeGuerra" class="form-control" placeholder="Responsável pela VTR" required>
                                                    </div>
                                                    <div class=" col-sm-12 col-lg-6 form-group form-row">
                                                        <label for="url" class=" mb-0">Identidade</label>
                                                        <input type="text" name="idtMil" class="form-control" placeholder="IDT Mil, RG, CPF" required>
                                                    </div>
                                                    <div class=" col-12 form-group form-row">
                                                        <label for="url" class=" mb-0">OM da viatura</label>
                                                        <input type="text" name="omVtr" class="form-control" placeholder="Ex: 22º Batahlão Logístico Leve" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-sm-12 col-lg-6 form-group form-row">
                                                <label for="url" class=" mb-0">Data de Entrada</label>
                                                <input type="date" name="dataEntrada" class="form-control" required>
                                            </div>
                                            <div class="  col-sm-12 col-lg-6 form-group form-row">
                                                <label for="inf_vtr" class=" mb-0 ">Viatura</label>
                                                <input type="text" name="nomeVtr" class="form-control" placeholder="Ex: Marruá - 1492" required>
                                            </div>
                                            <div class="col-12 form-group form-row">
                                                <label for="url" class=" mb-0">Cole a URL aqui:</label>
                                                <input type="url" name="url" class="form-control" placeholder="Exemplo: https://lemosdeveloper.com/" required>
                                                <small>
                                                    <p class="text-danger">Cole a URL da pasta com as inf. desta viatura.</p>
                                                </small>
                                            </div>


                                            <div class=" col-12 form-group form-row">
                                                <label for="url" class=" mb-0">Informações Iniciais</label>
                                                <textarea name="infIniciais" placeholder="Descreva o atual estado em que a viatura se encontra." class="form-control" id="" cols="30" rows="5" required></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="col"></div>
                            </div>
                            <div class="py-3 text-center">
                                <button type="submit" class="btn btn-outline-success" data-toggle="modal" data-target="#qrCodeModal">GERAR QR CODE</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <h5 class="">
                                Competência! Profissionalismo! Operacionalidade!
                            </h5>
                        </div>
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

    <?php include_once './assets/1.php' ?>

    <div hidden>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Escolher vtr
        </button>
    </div>

    <!-- Modal TIPO DE Vtr-->
    <div class="modal fade" id="exampleModal" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Qual a origem da viatura que será cadastrada?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-dismiss="modal">Viatura Externa</button>
                    <a href="vtr-interna.php" class="btn btn-outline-success">Viatura Interna</a>
                </div>
            </div>
        </div>
    </div>



    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#exampleModal').modal('show');
        })
    </script>

</body>

</html>