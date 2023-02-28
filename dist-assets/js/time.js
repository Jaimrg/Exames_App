"use strict";
const startingMinutes = localStorage.duration;
let time = startingMinutes * 60;
var intervalID;
const counter = document.getElementById('counter');

intervalID = setInterval(updateCount, 1000);

function updateCount() {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    counter.innerHTML = `${minutes}: ${seconds}`;
    time = (seconds == 0 && minutes == 0) ? '0' : time - 1;

    if (minutes == 0 && seconds == 0) {
        terminarExame();
    }

    if (seconds == 30) {
        showAlert();
    }
    // localStorage.duration = minutes;
}

function showAlert() {

    toastr.warning("Tempo está quase a esgotar", "Alerta", {
        positionClass: "toast-top-right",
        containerId: "toast-top-right"
    });

    showAlert = function () { }
}


function terminarExame() {
    clearInterval(intervalID);
    var date = new Date();

    let currentDate = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
    let currentTime = date.getHours() + ":" + date.getMinutes();

    localStorage.data_fim = currentDate;
    localStorage.hora_fim = currentTime;
    ajaxExecution();

}

function ajaxExecution() {


    let perguntas = [];
    let respostas = [];


    for (let i = 0; i < 4; i++) {
        perguntas.push(document.getElementById('pergunta_' + (i + 1) + '_input').value);
        respostas.push(Array.from(document.getElementsByName((i + 1) + "_opa")).find(r => r.checked) == undefined ? 0 : Array.from(document.getElementsByName((i + 1) + "_opa")).find(r => r.checked).value);
    }

    let perguntas_final = [];

    for (let i = 0; i < localStorage.total; i++) {
        perguntas_final.push({ "id": perguntas[i], "resposta": respostas[i] });
    }
    // alert(perguntas[0]);
    // alert(respostas[0]);

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
            "hora_inicio": localStorage.hora_inicio,
            "hora_fim": localStorage.hora_fim,
            "data": localStorage.data_inicio,
            "local_id": 1,
            "pontuacao": "",
            "total_perguntas": localStorage.total,
            "resultado": ""

        }
            // { "": $('#').val(), "": $('#').val() }
        ),
        processData: false,
        success: function (data, textStatus, jQxhr) {
            //alert(data.mensagem);
            swal({
                title: 'Tempo Esgotado!',
                text: 'Seu Exame Já Terminou.',
                timer: 2000,
                type: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });

            $.ajax({
                url: 'http://192.168.16.119:5000/examinandos/' + localStorage.id_examinando,
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json'
                },
                data: JSON.stringify({

                }),
                dataType: "json",
                success: function (data) {
                    setTimeout(function () {
                        window.location.assign('http://192.168.16.119/inatro_exames/');
                    }, 2000);
                }
            });



        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}