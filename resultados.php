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
  <style>
    @page {
      margin: 16px;
      font-family: Cambria, Georgia, serif;
    }
  </style>
  <title>Tela Resultados | INATTER</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
  <link href="./dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
  <link href="./dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard.min.css" />
  <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_arrows.min.css" />
  <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_circles.min.css" />
  <link rel="stylesheet" href="./dist-assets/css/plugins/smart.wizard/smart_wizard_theme_dots.min.css" />
</head>

<body class="text-left" style="background-color: green;">
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
    <div class="main-content-wrap d-flex flex-column">
      <!-- ============ Body content start ============= -->
      <div class="main-content">
        <h1 style="font-weight: bold; color: white!important;">Lista de Resultados</h1>
        <div class="row">
          <table class="display table table-hover space" style="width:100%">
            <thead>
              <tr>
                <th>Examinando</th>
                <th>Pontuação</th>
                <th>Resultado</th>
              </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
          </table>
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
  </div>
  <!-- ============ Search UI End ============= -->
  <script src="./dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
  <script src="./dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
  <script src="./dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./dist-assets/js/scripts/script.min.js"></script>
  <script src="./dist-assets/js/scripts/sidebar-horizontal.script.js"></script>
  <script src="./dist-assets/js/plugins/jquery.smartWizard.min.js"></script>
  <script src="./dist-assets/js/scripts/smart.wizard.script.min.js"></script>


  <script>
   
    async function API(){
    let host = 'http://192.168.16.119:5000/exames';
    let data = {"examinando_id":"", "escola_id":"", "local_id":""}
    
      const response = await fetch(host, {
        method:"GET",
        headers:{'Content-Type': 'application/json'},
      })    
      // return response.json();
      // console.log(response);
      .then((response) => response.json())
      .then((data) => {
        let tbody = document.getElementById('tbody')
        let tbodyHtml = "";
        
        data.exames.forEach(exame => {   
          //console.log(JSON.parse(exame.respostas).resultado);  
          let result = JSON.parse(exame.respostas).resultado;  
          let pontuacao = JSON.parse(exame.respostas).pontuacao;
          tbodyHtml += 
              `<tr>
                <td class="b_left">${exame.id}</td>
                <td>${pontuacao}</td>
                <td ${result == '1' ? 'class="b_right "' : "" || result == '0' ? 'class="b_right"' : ""}>${result == '1' ? "<p class='badge badge-pill badge-success even-larger-badge'>Aprovado</p>" : "<p class='badge badge-pill badge-danger'>Reprovado</p>"}</td>
              </tr>`;
          tbody.innerHTML = tbodyHtml;
        });
        console.log('Success:', data);
      })
      .catch((error) => {
        console.error('Error:', error);
      });
    }
    API();

    $(document).ready(function() {
      // $.ajax({
      //   url: 'http://127.0.0.1:5000/exames',
      //   method: 'GET',
      //   headers: {
      //     'Content-Type': 'application/json'
      //   },
      //   data: {
      //       "examinando_id": "",
      //       "escola_id": "",
      //       "local_id": ""
      //   },
      //   dataType: "json",
      //   success: function(data) {
      //       console.log(data);
      //   },
      //   error: function(error) {
      //     console.log(error)
      //   }
      // });

      // var settings = {
      //   "cache":false,
      //   "dataType": "json",
      //   "async": true,
      //   "crossDomain": true,
      //   "url": "http://127.0.0.1:5000/exames",
      //   "method": "GET",
      //   "headers": {
      //     'Access-Control-Allow-Origin': '*',
      //     'Accept': 'text/plain',
      //     'Content-Type': 'application/json',
      //   },
      //   "data": JSON.stringify({
      //     "examinando_id": "",
      //     "escola_id": "",
      //     "local_id": ""
      //   }),
      // };

    // $.ajax(settings).done(function (response) {
    //   console.log(response);
    // });

    //   return false;
    //   // document.getElementById("examinando").innerHTML = localStorage.nome;


    });
  </script>



</body>


<!-- Mirrored from demos.ui-lib.com/gull/html/layout3/smart.wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 17:26:11 GMT -->

</html>