<?php
// Starting session
date_default_timezone_set("Africa/Johannesburg");
session_start();
$_SESSION['hora_inicio'] = date("h:i");
$_COOKIE['data_inicio'] = date("d/m/Y");
$_SESSION["nome"] = isset($_GET["nome"]) ? $_GET["nome"] : 0;
$nome = isset($_GET["nome"]) ? $_GET["nome"] : 'icognito';
$categoria = isset($_GET["categoria"]) ? $_GET["categoria"] : 'icognito';
// echo $nome;
?>

<!DOCTYPE html>
<html lang="pt" dir="">


<!-- Mirrored from demos.ui-lib.com/gull/html/layout3/smart.wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 17:26:11 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./dist-assets/css/style.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <style>
        @page {
            margin: 16px;
            font-family: Cambria, Georgia, serif;
        }

        p {
            color: green;
            font-size: 2.0em;
        }
    </style>
    <title>Dados Do Examinando| INATTER</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="./dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="./dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_arrows.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_circles.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_dots.min.css" />
</head>

<body class="text-left" style="background-color: #228c4f;">
    <div class="app-admin-wrap layout-horizontal-bar">
        <div class="main-header  justify-content-center">
            <!-- <h3 style="padding-left: 20px; color: green;">Resultados</h3> -->

            <div class="logo"><img src="./dist-assets/images/inatro.png" alt="" style="text-align: center; width: 100%; height: max-content;"></div>

            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>

            </div>
        </div>
        <!-- header top menu end-->
        <!-- <div class="horizontal-bar-wrap">
            
        </div> -->
        <!-- =============== Horizontal bar End ================-->
        <div class="main-content-wrap d-flex flex-column align-items-center" style=" border-radius:5px;  background-color:#228c4f;">
            <!-- ============ Body content start ============= -->

            <div class="card w-75 " style="height: 500px;  border: 1px solid #ffffff; background-color: #ffffff;">

                <div class="col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class=" pt-5">
                                <div class="row align-items-center h-100" style="border-radius:0px; background-color: #ffffff;">
                                    <div class="col-10 mx-auto">
                                        <div class=" h-100 border-primary justify-content-center">
                                            <div>
                                                <img src="./dist-assets/images/man.jpg" class="card-img cap container h-100 card mb-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div style="margin-top: 40px;" class="container overflow-hidden">
                                <div class="row gx-5">
                                    <div class="col">
                                        <p>Nome:</p>
                                    </div>
                                    <div class="col">
                                        <p id="nome"><?= $nome ?></p>
                                    </div>
                                </div>

                                <div class="row gx-5">
                                    <div class="col">
                                        <p>Categoria:</p>
                                    </div>
                                    <div class="col">
                                        <p id="categoria"><?= $nome ?></p>
                                    </div>
                                </div>

                                <div class="row gx-5">
                                    <div class="col">
                                        <p>Data:</p>
                                    </div>
                                    <div class="col">
                                        <p id="data_inicio"><?= date("d/m/Y") ?></p>
                                    </div>
                                </div>

                                <div class="row gx-5">
                                    <div class="col">
                                        <p>Hora:</p>
                                    </div>
                                    <div class="col">
                                        <p id="hora_inicio"><?= date("h:i") ?></p>
                                    </div>
                                </div>

                                <div class="row gx-5">
                                    <div class="col">
                                        <p>Duração:</p>
                                    </div>
                                    <div class="col">
                                        <p id="duracao"></p>
                                    </div>
                                </div>

                                <div class="row gx-5">
                                    <div class="col">
                                        <p>Questões:</p>
                                    </div>
                                    <div class="col">
                                        <p id="total"></p>
                                    </div>
                                </div>
                            </div>
                            <a href="./exame.php">
                        </div>

                    </div>
                    <div class="d-sm-flex" data-view="print"><span class="m-auto"></span>
                        <button class=" btn bg-info text-white btn-lg pt-4 py-4 " id="inicio_exame" type="button" style=" font-size: 20px; font-weight: 900;">INICIAR EXAME</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div><!-- Footer Start -->

    <div class="flex-grow-1"></div>
    <!-- <div class="app-footer">
                
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <a class="btn btn-primary text-white btn-rounded" href="https://themeforest.net/item/gull-bootstrap-laravel-admin-dashboard-template/23101970" target="_blank">Buy Gull HTML</a>
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="./dist-assets/images/logo.png" alt="">
                        <div>
                            <p class="m-0">&copy; 2022 ACSUN</p>
                            <p class="m-0">Todos os Direitos Reservados</p>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- fotter end -->
    </div>
    </div><!-- ============ Search UI Start ============= -->

    <!-- ============ Search UI End ============= -->
    <script src="./dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="./dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="./dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./dist-assets/js/scripts/script.min.js"></script>
    <script src="./dist-assets/js/scripts/sidebar-horizontal.script.js"></script>
    <script src="./dist-assets/js/plugins/jquery.smartWizard.min.js"></script>
    <script src="./dist-assets/js/scripts/smart.wizard.script.min.js"></script>

    <script>
        $(document).ready(function() {
            //document.body.style.zoom = "90%";
            document.getElementById("duracao").innerHTML = localStorage.duration + ' Minutos';
            document.getElementById("total").innerHTML = localStorage.tota_perguntas_exame;
            document.getElementById("nome").innerHTML = localStorage.nome;
            document.getElementById("categoria").innerHTML = localStorage.categoria;
            document.getElementById("data_inicio").innerHTML = localStorage.data_inicio;
            document.getElementById("hora_inicio").innerHTML = localStorage.hora_inicio;
        });
    </script>

</body>


<!-- Mirrored from demos.ui-lib.com/gull/html/layout3/smart.wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 17:26:11 GMT -->

</html>