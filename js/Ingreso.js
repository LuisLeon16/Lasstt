﻿window.onload = function () {
    var formulario = document.getElementById('formulario');
    var boton_enviar = document.getElementById('enviar');
    boton_enviar.onclick = function () {
        if (formulario.checkValidity()) {
            alert('El producto ha Sido registrado!');
        }
    }
}