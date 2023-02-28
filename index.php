<?php
// Starting session

$_SESSION["nome"] = isset($_GET["nome"]) ? $_GET["nome"] : 0;
// $_SESSION["categoria"] = $_POST["categoria"];
// $_SESSION["escola"] = $_POST["escola"];

$nome = isset($_GET["nome"]) ? $_GET["nome"] : 'icognito';
//echo $nome;
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
    <link rel="stylesheet" href="./dist-assets/css/plugins/sweetalert2.min.css" />
    <style>
        @page {
            margin: 16px;
            font-family: Cambria, Georgia, serif;
        }

        h5 {
            color: #ffffff;
            font-size: 2.75em;
        }

        p {
            color: green;
            text-align: justify;
            /* font-size: 2.75em; */
        }
    </style>
    <title>Login| INATTER</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="./dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="./dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_arrows.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_circles.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_dots.min.css" />
</head>

<body class="text-left" style="background-color: #228c4f;">
    <!-- <div class="app-admin-wrap layout-horizontal-bar">
        <div class="auth-layout-wrap"> -->
    <div class="auth-layout-wrap">
        <div class="container">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input hidden type="text" id="nome">
                        <input hidden type="text" id="categoria">
                        <input hidden type="text" id="escola">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4"><img style="width: 80%; height: 80%" src="./dist-assets/images/inatro.png" alt="">
                                <h5 class="display-5 mb-3 text-18 text-center">Bem-vindo</h5>
                                <p class=" text-justify mb-3 text-16 ">À nossa nova casa digital! Esta e uma plataforma
                                    sofisticada e dinâmica. Tudo para que você tenha
                                    uma experiência muito melhor na hora de fazer o
                                    seu exame de carta de condução</p>
                            </div>

                            <form method="post" action="#" id="frm_login">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <div class="col-md-12">
                                                <label for="password">Codigo do Candidato</label>
                                                <input class="form-control form-control" id="codigo" name="codigo" type="text" required="required">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="col-md-12">
                                                <label for="password">Data De Nascimento</label>
                                                <input class="form-control form-control datepicker" data-date-format="yyyy/mm/dd" id="data_nascimento" name="data_nascimento" type="date" required="required">
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-md-12 text-center">
                                    <a href="./dados_examinando.php">
                                    <button type="submit" id="login" class="btn btn-lg btn-primary w-100 mb-5">
										<span class="indicator-label">Entrar</span>
										<span class="indicator-progress">Por favor aguarde...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
                                    </a>
                                </div>


                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 text-center align-content-center">
                        <img style="background-size: cover; width: 100%; height: 100%" src="dist-assets/images/login.png" alt="Imagem não encontrada">
                    </div>
                </div>
            </div>

            <!-- </div>
        </div> -->



        </div>

        <!-- ============ Search UI End ============= -->
        <script src="./dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
        <script src="./dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
        <script src="./dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="./dist-assets/js/scripts/script.min.js"></script>
        <script src="./dist-assets/js/scripts/sidebar-horizontal.script.js"></script>
        <script src="./dist-assets/js/plugins/jquery.smartWizard.min.js"></script>
        <script src="./dist-assets/js/scripts/smart.wizard.script.min.js"></script>
        <script src="dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
        <script src="dist-assets/js/scripts/sweetalert2@11.js"></script>
        <script src="./dist-assets/js/plugins/sweetalert2.min.js"></script>
        <script src="./dist-assets/js/scripts/sweetalert.script.min.js"></script>
        <script>
            var nome = "";
            $(document).ready(function() {
                document.body.style.zoom = "90%";
                var date = new Date();

                let currentDate = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
                let currentTime = date.getHours() + ":" + date.getMinutes();


                //alert(currentDate);
                $("#login").click(function() {

                    $.ajax({
                        url: 'http://192.168.16.119:5000/autenticar',
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        data: JSON.stringify({
                            codigo: $("#codigo").val(),
                            data_nascimento: $("#data_nascimento").val(), //$("#senha").val()

                        }),
                        dataType: "json",
                        success: function(data) {
                            //console.log(data);                             
                            if (data.result == true) {
                                if (data.dados.estado.estado == '0') {
                                    //console.log('os');
                                    $("#nome").val(data.dados.nome);
                                    nome = data.dados.examinando.nome;
                                    categoria = data.dados.categoria.descricao;

                                    $.post("./index.php", {
                                        nome: data.dados.examinando.nome,
                                        categoria: data.dados.categoria.descricao,
                                        escola: data.dados.escola.nome
                                    });
                                    localStorage.id_examinando = data.dados.examinando.id;
                                    localStorage.nome = nome;
                                    localStorage.categoria = categoria;
                                    localStorage.data_inicio = currentDate;
                                    localStorage.hora_inicio = currentTime;
                                    localStorage.duration = 1;
                                    $.ajax({
                                        url: 'http://192.168.16.119:5000/perguntas',
                                        method: 'GET',
                                        headers: {
                                            'Content-Type': 'application/json'
                                        },
                                        data: JSON.stringify({

                                        }),
                                        dataType: "json",
                                        success: function(data) {
                                            localStorage.tota_perguntas_exame = data.total;
                                            //alert(localStorage.tota_perguntas_exame);                                        
                                        }
                                    });
                                    setTimeout(function() {
                                        window.location.assign('./dados_examinando.php');
                                    }, 2000);
                                } else {
                                    console.log('ops');
                                    swal({
                                        title: 'Já realizou o exame para esta marcação!',
                                        text: 'Faça uma outra marcação',
                                        timer: 2000,
                                        type: 'error',
                                        showCancelButton: false,
                                        showConfirmButton: false
                                    }).then(function(result) {
                                        if (result.dismiss === swal.DismissReason.timer) {

                                        }
                                    });
                                }

                                //window.location = "./dados_examinando.php";
                            } else {
                                swal({
                                    title: 'Dados Não reconhecidos!',
                                    text: 'Verifique os dados e volte a tentar',
                                    timer: 2000,
                                    type: 'error',
                                    showCancelButton: false,
                                    showConfirmButton: false
                                }).then(function(result) {
                                    if (result.dismiss === swal.DismissReason.timer) {

                                    }
                                });
                            }
                        },
                        error: function(error) {
                            console.log(error)
                        }
                    });

                    return false;
                })
            })
        </script>
</body>


<!-- Mirrored from demos.ui-lib.com/gull/html/layout3/smart.wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 17:26:11 GMT -->

</html>