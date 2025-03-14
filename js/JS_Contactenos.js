//Funcion de Valir el envio de datos 
function Validar() {
    if (NomVali() && ValidarNum() && EmailVal() && AsuntoCanti() && CaracterMnj()) {
        document.getElementById('EnviarMnj').innerHTML = "Datos Enviados exitosamente";
        
    }else{
        document.getElementById('EnviarMnj').innerHTML = "Por favor Revise los campos requeridos";

    }

}
//Funcion de Validacion de Nombre
function NomVali() {
    var Nombre = document.getElementById('Nombre').value;
    const Expresion = new RegExp('^[A-Z ]+$', 'i');
    if (!Expresion.test(Nombre)) {
        document.getElementById('NomValidacion').innerHTML = "Por favor Ingrese solo Letras";
        return false;
    } else {
        document.getElementById('NomValidacion').innerHTML = " ";
        return true;
    }
}
// Funcion de validacion Numero de Telefono
function ValidarNum() {
    var Telelefono = document.getElementById('Telefono').value;
    if (!isNaN(parseFloat(Telelefono)) && isFinite(Telelefono)) {
        document.getElementById('MnjTelVali').innerHTML = " ";
        return true;
    } else {
        document.getElementById('MnjTelVali').innerHTML = "Por favor Ingrese un Numero";
        return false;
    }
}
//Funcion de Validadcion de Email
function EmailVali() {
    var Email = document.getElementById('Email').value;
    const ExpreRegu = /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/;
    if (!ExpreRegu.test(Email)) {
        document.getElementById('MnjEmailVali').innerHTML = "Por favor Ingrese un correo valido";
        return false;
    } else {
        document.getElementById('MnjEmailVali').innerHTML = " ";
        return true;
    }
}
//DECALRACION VARIABLES DE ASUNTO
var contaAsunto = 100;
var AsuntoCanti = " ";
//Funcion de validacion de Asunto 
function AsuntoVali() {
    var Asunto = document.getElementById('Asunto');

    if (Asunto.value.length == 0) {
        document.getElementById('MnjAsunVali').innerHTML = "Por favor ingrese su Asunto";
        return false;
    } else if (Asunto.value.length <= contaAsunto) {
        var resta = Number(contaAsunto) - Number(Asunto.value.length);
        AsuntoCanti = Asunto.value;
        document.getElementById('MnjAsunVali').innerHTML = "Cantidad de Campos de Caracteres " + resta;
        return true;
    } else {
        Asunto.value = AsuntoCanti;
        return true;
    }
}
//Declaracion de variales Mensajes
var contadorMnj = 500;
var contAlmacenadoMnj = "";
//Funcion de Valiacion de Caracteres del Mensaje 
function CaracterMnj() {
    var Mensaje = document.getElementById('Mensaje');
    if (Mensaje.value.length == 0) {
        document.getElementById('MensajeVali').innerHTML = "Debe Ingresar un Mensaje";
        return false
    } else if (Mensaje.value.length < contadorMnj) {
        var resta = Number(contadorMnj) - Number(Mensaje.value.length);
        contAlmacenadoMnj = Mensaje.value;
        document.getElementById('MensajeVali').innerHTML = "Cantidad de Campos de Caracteres " + resta;
        return true;
    } else {
        Mensaje.value = contAlmacenadoMnj;
        return true;
    }

}

