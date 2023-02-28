

swal({
      title: 'Tem Certeza que pretende finalizar?',
      text: "Essa Acção é irreversível!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#0CC27E',
      cancelButtonColor: '#FF586B',
      confirmButtonText: 'Sim, Finalizar!',
      cancelButtonText: 'Não, cancelar!',
      confirmButtonClass: 'btn btn-success mr-5',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false
    }).then(function () {      

      let perguntas = [];
      let respostas = [];


      for (let i = 0; i < 4; i++) {
        perguntas.push(document.getElementById('pergunta_' + (i + 1) + '_input').value);
        respostas.push(Array.from(document.getElementsByName((i + 1) + "_opa")).find(r => r.checked).value);
      }

      let perguntas_final = [];

      for (let i = 0; i < 4; i++) {
        perguntas_final.push({ "id": perguntas[i], "resposta": respostas[i] });
      }

      

      $.ajax({
        url: 'http://127.0.0.1:5000/exames',
        dataType: 'json',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({

          "examinando_id": 3,
          "marcacao_id": "NULL",
          "respostas": {
            "perguntas": perguntas_final
          },
          "hora_inicio": "9:00",
          "hora_fim": "12:00",
          "data": "2022-11-12",
          "local_id": 1,
          "pontuacao": "80p",
          "total_perguntas": 25,
          "resultado": "goo"

        }
          // { "": $('#').val(), "": $('#').val() }
        ),
        processData: false,
        success: function (data, textStatus, jQxhr) {
          swal({
            title: 'Finalizado!',
            text: 'Seu Exame Já Terminou.',
            timer: 2000,
            type: 'success',
            showCancelButton: false,
            showConfirmButton: false
          }).then(
            function () {},
            // handling the promise rejection
            function (dismiss) {
              if (dismiss === 'timer') {
                //console.log('I was closed by the timer')
              }
            }
          )
          // swal('Finalizado!', 'Seu Exame Já Terminou.', 'success'); 
          //alert(data);
          console.log(data);
        },
        error: function (jqXhr, textStatus, errorThrown) {
          console.log(errorThrown);
        }
      });
    }, function (dismiss) {
      // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
      if (dismiss === 'cancel') {
        swal({
          title: 'Continue o Exame!',
          text: ':)',
          timer: 2000,
          type: 'error',
          showCancelButton: false,
          showConfirmButton: false
        }).then(
          function () {},
          // handling the promise rejection
          function (dismiss) {
            if (dismiss === 'timer') {
              //console.log('I was closed by the timer')
            }
          }
        )
        
      }
    });