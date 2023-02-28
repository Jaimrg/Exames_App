<?php
function includeHeader($ind)
{
    $i = 2;
    //include './perguntas/perguntas_' . $ind . '.php';
}
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
    <title>EXAME</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="./dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="./dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_arrows.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_circles.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_dots.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/sweetalert2.min.css" />
    <link rel="stylesheet" href="./dist-assets/css/plugins/toastr.css" />
</head>
<style>
    .option {
        font-family: 'Segoe UI';
        font-size: 18px !important;
        font-weight: bold;
        color: #228C4F;
    }

    /* .img{
        height: 100%;
        width: 100%;
    } */

    /* #div{
        background-color: #00D355;
    } */

    .alternativa {
        font-family: 'Segoe UI';
        font-size: 19px !important;
        font-weight: bold;
        color: #ffffff;
    }

    input[type="radio"]:checked+label.opcao {
        background-color: green;
        color: #228C4F !important;
    }

    input[type="radio"]:checked+label.option {
        background-color: red;
        color: white;
    }

    .active {
        background-color: #00D355;
    }

    .active .option {
        color: #ffffff !important;
    }

    input[type="radio"] {
        display: none;
    }

    .radioNotSelected {
        background-color: #00D355;
    }

    .opcao_alinea {
        flex: 0 0 16.66667% !important;
        max-width: 10.66667% !important;
    }

    .option {
        padding-right: 3.25rem !important;
    }

    /* .opcao {
        width: 50px;
        height: 75px;
        padding: 20px;
        border-radius: 5px;
    }

    .radioButton {
        margin: 45px auto;
    } */
</style>

<body class="text-left" style="background-color: #228C4F;">
    <div class="app-admin-wrap layout-horizontal-bar">

        <div class="main-header">
            <div class="logo"><img src="./dist-assets/images/inatro.png" alt="" /></div>
            <div class="header-icon"><img src="./dist-assets/images/man.jpg" alt="" style="height: auto; width: auto !important;" /></div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <!-- <div style="margin: auto"></div> -->

            <div class="d-flex align-items-center">
                <p id="examinando" style="margin-left: 10px; font-weight: bold; font-size: 15px; color: #228C4F;"><b style="font-size: 15px; font-weight: normal!important;">a<br><?= date("d/m/Y") ?></b></p>

                <!-- <div class="" style=""><img src="./dist-assets/images/tha _man.svg" alt="" /></div> -->
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
                <div type="card" class="  position-relative" style="margin-right: 30px; height: 40px; width: 100px;  background-color: #00D355!important; border-radius: 10px;">
                    <h3 class="card-title text-center">
                        <div class="d-flex flex-wrap justify-content-center mt-2">
                            <p id="counter" style="color: white; font-weight: bold"></p>
                        </div>
                    </h3>
                </div>
            </div>
        </div>


        <!-- header top menu end-->
        <!-- <div class="horizontal-bar-wrap">
            
        </div> -->
        <!-- =============== Horizontal bar End ================-->
        <div class="main-content-wrap d-flex flex-column" style="margin-top: 0px;">
            <!-- ============ Body content start ============= -->
            <div class="main-content">

                <div class="row">
                    <div class="col-md-12">
                        <!--  SmartWizard html -->
                        <div id="smartwizard">
                            <ul id="steps" class="steps">
                                <li><a href="#step-1">1</a></li>
                                <li><a href="#step-2">2</a></li>
                                <li><a href="#step-3">3</a></li>
                                <li><a href="#step-4">4</a></li>
                                <li><a href="#step-5">5</a></li>
                                <li><a href="#step-6">6</a></li>
                                <li><a href="#step-7">7</a></li>
                                <li><a href="#step-8">8</a></li>
                                <li><a href="#step-9">9</a></li>
                                <li><a href="#step-10">10</a></li>
                                <li><a href="#step-11">11</a></li>
                                <li><a href="#step-12">12</a></li>
                                <li><a href="#step-13">13</a></li>
                                <li><a href="#step-14">14</a></li>
                                <li><a href="#step-15">15</a></li>
                                <li><a href="#step-16">16</a></li>
                                <li><a href="#step-17">17</a></li>
                                <li><a href="#step-18">18</a></li>
                                <li><a href="#step-19">19</a></li>
                                <li><a href="#step-20">20</a></li>
                                <li><a href="#step-21">21</a></li>
                                <li><a href="#step-22">22</a></li>
                                <li><a href="#step-23">23</a></li>
                                <li><a href="#step-24">24</a></li>
                                <li><a href="#step-25">25</a></li>
                            </ul>
                            <div>
                                <div id="step-1">
                                    <div class="card" style="border: 2px solid #ffffff; background-color: #228C4F; max-width: 1500px;">
                                        <div class="card-body">
                                            <input type="number" value="1" id="pergunta_1_input" hidden>
                                            <h2 value="1" class="card-text" style="color: #ffffff" id="pergunta_1">O que indica o sinal_</h2>

                                        </div>
                                    </div>
                                    <div class="row mt-3"></div>
                                    <div class="row">
                                        <div id="btn" class="col-sm-12 col-md-4">
                                            <div class="container h-100 card mb-12" style="border: 1px solid #ffffff">
                                                <div class="row align-items-center h-100" style="border-radius:0px; background-color: #228C4F;">
                                                    <div class="col-6 mx-auto">
                                                        <div class=" h-100 border-primary justify-content-center">
                                                            <div>
                                                                <img id="img_1" class="img" src="./dist-assets/images/10t.svg" class="card-img cap" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="card mb-12" style="max-width: 1200px;">
                                                <div class="row no-gutters">
                                                  <div class="col-md-5">
                                                    <img src="./dist-assets/images/stop.svg" class="card-img cap" alt="">
                                                   
                                                  </div>
                                                  <div class="col-md-8">
                                                    <div class="card-body">
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="col-sm-12 col-md-8">
                                            <div class="card mb-8 bigOption" style="max-width: 1100px;">
                                                <div class="row no-gutters " id="div">
                                                    <div class="opcao_alinea col-md-2 text-center col-md-2 text-center">
                                                        <!-- <img src="./dist-assets/images/stop.svg" class="card-img" alt=""> -->
                                                        <input value="1" type="radio" name="1_opa" id="1_opa">
                                                        <label for="1_opa" id="div_i" class="opcao card h-100 border-primary justify-content-center radioNotSelected">
                                                            <div class="col-6 mx-auto">
                                                                <div class=" h-100 border-primary justify-content-center alternativa" style="color: white; font-weight: bold;">
                                                                    A
                                                                </div>
                                                            </div>
                                                        </label>

                                                    </div>
                                                    <div class="col-md-8 op">
                                                        <input value="1" type="radio" name="1_opa" id="1_opa">
                                                        <label for="1_opa" id='opcao_1_A' class="card-body option">

                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3"></div>
                                            <div class="card mb-8 bigOption" style="max-width: 1100px; ">
                                                <div class="row no-gutters" id="div">
                                                    <div class="opcao_alinea col-md-2 text-center ">
                                                        <!-- <img src="./dist-assets/images/stop.svg" class="card-img" alt=""> -->
                                                        <input value="2" type="radio" name="1_opa" id="1_opb">
                                                        <label for="1_opb" id="div_i" class="opcao card h-100 border-primary justify-content-center radioNotSelected">
                                                            <div class="col-6 mx-auto">
                                                                <div class=" h-100 border-primary justify-content-center alternativa" style="color: white; font-weight: bold;">
                                                                    B
                                                                </div>
                                                            </div>
                                                        </label>

                                                    </div>
                                                    <div class="col-md-8">
                                                        <input value="2" type="radio" name="1_opa" id="1_opb">
                                                        <label for="1_opb" id='opcao_1_B' class="card-body option">
                                                            Sinal de transito que indica uma rotunda a direita
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3"></div>
                                            <div class="card mb-8 bigOption" style="max-width: 1100px; ">
                                                <div class="row no-gutters" id="div">
                                                    <div class="opcao_alinea col-md-2 text-center ">
                                                        <!-- <img src="./dist-assets/images/stop.svg" class="card-img" alt=""> -->
                                                        <input value="3" type="radio" name="1_opa" id="1_opc">
                                                        <label for="1_opc" id="div_i" class="opcao card h-100 border-primary justify-content-center radioNotSelected">
                                                            <div class="col-6 mx-auto">
                                                                <div class=" h-100 border-primary justify-content-center alternativa" style="color: white; font-weight: bold;">
                                                                    C
                                                                </div>
                                                            </div>
                                                        </label>

                                                    </div>
                                                    <div class="col-md-8" style="color: #ffffff;">
                                                        <input value="3" type="radio" name="1_opa" id="1_opc">
                                                        <label for="1_opc" id='opcao_1_C' class="card-body option">
                                                            Sinal de transito que indica uma rotunda a direita
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3"></div>
                                            <div class="card mb-8 bigOption " style="max-width: 1100px;">
                                                <div class="row no-gutters" id="div">
                                                    <div class="opcao_alinea col-md-2 text-center ">
                                                        <!-- <img src="./dist-assets/images/stop.svg" class="card-img" alt=""> -->
                                                        <input value="4" type="radio" name="1_opa" id="1_opd">
                                                        <label for="1_opd" id="div_i" class="opcao card h-100 border-primary justify-content-center radioNotSelected">
                                                            <div class="col-6 mx-auto">
                                                                <div class=" h-100 border-primary justify-content-center alternativa" style="color: white; font-weight: bold;">
                                                                    D
                                                                </div>
                                                            </div>
                                                        </label>

                                                    </div>
                                                    <div class="col-md-8">
                                                        <input value="4" type="radio" name="1_opa" id="1_opd">
                                                        <label for="1_opd" id='opcao_1_D' class="card-body option">
                                                            Sinal de transito que indica uma rotunda a direita
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="step-2">
                                    <?php
                                    include './perguntas/perguntas_2.php';
                                    //includeHeader(2);
                                    ?>
                                </div>

                                <div id="step-3">
                                    <?php
                                    include './perguntas/perguntas_3.php';
                                    //includeHeader(3);
                                    ?>
                                </div>
                                <div id="step-4">
                                    <?php
                                    include './perguntas/perguntas_4.php';
                                    //includeHeader(4);
                                    ?>
                                </div>
                                <div id="step-5">
                                    <?php
                                    include './perguntas/perguntas_5.php';
                                    //includeHeader(5);
                                    ?>
                                </div>
                                <!--  <div id="step-6">
                                    <?php
                                    //includeHeader(6);
                                    ?>
                                </div>
                                <div id="step-7">
                                    <?php
                                    //includeHeader(7);

                                    ?>
                                </div>
                                <div id="step-8">
                                    <?php
                                    //includeHeader(8);

                                    ?>
                                </div>
                                <div id="step-9">
                                    <?php
                                    // includeHeader(9);

                                    ?>
                                </div>
                                <div id="step-10">
                                    <?php
                                    //  includeHeader(10);

                                    ?>
                                </div>
                                <div id="step-11">
                                    <?php
                                    //  includeHeader(11);

                                    ?>
                                </div>
                                <div id="step-12">
                                    <?php
                                    // includeHeader(12);

                                    ?>
                                </div>
                                <div id="step-13">
                                <?php
                                //includeHeader(13);

                                ?>
                                </div>
                                <div id="step-14">
                                <?php
                                // includeHeader(14);

                                ?>
                                </div>
                                <div id="step-15">
                                <?php
                                //includeHeader(15);

                                ?>
                                </div>
                                <div id="step-16">
                                <?php
                                // includeHeader(16);

                                ?>
                                </div>
                                <div id="step-17">
                                <?php
                                // includeHeader(17);

                                ?>
                                </div>
                                <div id="step-18">
                                <?php
                                //includeHeader(18);

                                ?>
                                </div>
                                <div id="step-19">
                                <?php
                                //includeHeader(19);

                                ?>
                                </div>
                                <div id="step-20">
                                <?php
                                //includeHeader(20);

                                ?>
                                </div>
                                <div id="step-21">
                                <?php
                                // includeHeader(21);

                                ?>
                                </div>
                                <div id="step-22">
                                <?php
                                //includeHeader(22);

                                ?>
                                </div> 
                                <div id="step-23">
                                <?php
                                // includeHeader(23);

                                ?>
                                </div>
                                <div id="step-24">
                                <?php
                                // includeHeader(24);

                                ?>
                                </div>
                                <div id="step-25">
                                <?php
                                //includeHeader(25);

                                ?>
                                </div>                                                        -->
                            </div>
                        </div>
                    </div>
                </div><!-- end of main-content -->
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
    </div>

    <!-- ============ Search UI End ============= -->
    <script src="./dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="./dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="./dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./dist-assets/js/scripts/script.min.js"></script>
    <script src="./dist-assets/js/scripts/sidebar-horizontal.script.js"></script>
    <script src="./dist-assets/js/plugins/jquery.smartWizard.min.js"></script>
    <script src="./dist-assets/js/scripts/smart.wizard.script.min.js"></script>
    <script src="./dist-assets/js/plugins/sweetalert2.min.js"></script>
    <script src="./dist-assets/js/scripts/sweetalert.script.min.js"></script>
    <script src="./dist-assets/js/plugins/toastr.min.js"></script>
    <script src="./dist-assets/js/scripts/toastr.script.min.js"></script>
    <script src="./dist-assets/js/time.js">

    </script>


    <script>
        $(document).ready(function() {
            //document.body.style.zoom = "90%";
            // const btn = document.querySelector('#1_opa');
            // const radios = document.querySelector('input[name="1_opa"]');

            // for (const radio of radios) {
            //     if(radio.checked){
            //         alert('cheguei');
            //     }                
            // }
            //let ind = localStorage.total+1;
            // for (let index = 1; index < ind; index++) {
            $(function() {
                var divs = $('div.bigOption');

                $('input[type="radio"][name="1_opa"]').change(function() {

                    divs.removeClass('active');
                    $(this).closest('div.bigOption').addClass('active');
                })
            });

            $(function() {
                var divs = $('div.bigOption');

                $('input[type="radio"][name="1_opa"]').change(function() {

                    divs.removeClass('active');
                    $(this).closest('div.bigOption').addClass('active');
                })
            });

            $(function() {
                var divs = $('div.bigOption');

                $('input[type="radio"][name="2_opa"]').change(function() {

                    divs.removeClass('active');
                    $(this).closest('div.bigOption').addClass('active');
                })
            });
            $(function() {
                var divs = $('div.bigOption');

                $('input[type="radio"][name="3_opa"]').change(function() {

                    divs.removeClass('active');
                    $(this).closest('div.bigOption').addClass('active');
                })
            });

            $(function() {
                var divs = $('div.bigOption');

                $('input[type="radio"][name="4_opa"]').change(function() {

                    divs.removeClass('active');
                    $(this).closest('div.bigOption').addClass('active');
                })
            });

            // }

            // $(function() {
            //     var $labs = $('option');

            //     $('input[type="radio"][name="1_opa"]').change(function() {
            //         $labs.removeClass('option');
            //         $(this).closest('div.option').addClass('option');
            //     })
            // });

            document.getElementById("examinando").innerHTML = localStorage.nome;
            $.ajax({
                url: 'http://192.168.16.119:5000/perguntas',
                method: 'GET',
                data: {

                },
                dataType: "json",
                success: function(data) {
                    let increment = data.total + 1;
                    console.log(increment);
                    for (i = 1; i < increment; i++) {
                        document.getElementById("img_" + i).src = data.perguntas[i - 1].imagem;
                        document.getElementById("pergunta_" + i).innerHTML = data.perguntas[i - 1].descricao;
                        document.getElementById("opcao_" + i + "_A").innerHTML = data.perguntas[i - 1].opcoes[0].opcao
                        document.getElementById("opcao_" + i + "_B").innerHTML = data.perguntas[i - 1].opcoes[1].opcao
                        document.getElementById("opcao_" + i + "_C").innerHTML = data.perguntas[i - 1].opcoes[2].opcao
                        document.getElementById("opcao_" + i + "_D").innerHTML = data.perguntas[i - 1].opcoes[3].opcao

                        document.getElementById("pergunta_" + i + "_input").value = data.perguntas[i - 1].id;
                        document.getElementById(i + "_op" + "a").value = data.perguntas[i - 1].opcoes[0].id;
                        document.getElementById(i + "_op" + "b").value = data.perguntas[i - 1].opcoes[1].id;
                        document.getElementById(i + "_op" + "c").value = data.perguntas[i - 1].opcoes[2].id;
                        document.getElementById(i + "_op" + "d").value = data.perguntas[i - 1].opcoes[3].id;
                    }

                    let total_questoes = data.total - 1;
                    $("ul.steps li:gt(" + total_questoes + ")").remove();
                    localStorage.total = total_questoes + 1;
                    console.log(localStorage.total);
                },
                error: function(err) {
                    console.log(err);
                }
            });


            var div = document.getElementById('btn');
            div.addEventListener('click', () => {
                let valor = Array.from(document.getElementsByName("opa")).find(r => r.checked).value;
                alert(valor);
            })
            // $(function() {
            //     $('#div').on('click', function() {
            //         var div = document.getElementById('div_id');
            //         div.onclick = function() {
            //             this.style.backgroundColor = 'green';
            //         };
            //     });


            // })

            // $(function() {
            //     $('div2a').on('click', function() {
            //         var div = document.getElementById('div_id_2a');
            //         div.onmouseover = function() {
            //             this.style.backgroundColor = 'green';
            //         };
            //     });
            // })

            // $(function() {
            //     $('div2a').on('click', function() {
            //         var div = document.getElementById('div_id_2a');
            //         div.onmouseover = function() {
            //             this.style.backgroundColor = 'green';
            //         };
            //     });
            // })
        });
    </script>
</body>


<!-- Mirrored from demos.ui-lib.com/gull/html/layout3/smart.wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 17:26:11 GMT -->

</html>