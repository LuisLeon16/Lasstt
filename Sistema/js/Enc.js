function validar(){
	var c1 = document.getElementById('ch1').checked;var c2 = document.getElementById('ch2').checked;
	var c3 = document.getElementById('ch3').checked;var c4 = document.getElementById('ch4').checked;
	var c5 = document.getElementById('ch5').checked;var c6 = document.getElementById('ch6').checked;
	var c7 = document.getElementById('ch7').checked;var c8 = document.getElementById('ch8').checked;
	var c9 = document.getElementById('ch9').checked;var c10 = document.getElementById('ch10').checked;
	var c11 = document.getElementById('ch11').checked;var c12 = document.getElementById('ch12').checked;
	var c13 = document.getElementById('ch13').checked;var c14 = document.getElementById('ch14').checked;
	var c15 = document.getElementById('ch15').checked;
	if(!document.querySelector('input[name="prg1"]:checked'))
	{
		alert('Debe contestar la pregunta 1');
		return false;
	}if(!document.querySelector('input[name="prg2"]:checked')){
		alert('Debe contestar la pregunta 2');
	}if(!document.querySelector('input[name="prg4"]:checked')){
		alert('Debe contestar la pregunta 4');
	}if(c1 == false && c2 == false && c3 == false && c4 == false && c5 == false && c6 == false && c7 == false && c8 == false && c9 == false){
		alert('Debe contestar la pregunta 5');
	}if(c1 == true && c2 == true && c3 == true && c4 == true && c5 == true && c6 == true && c7 == true && c8 == true && c9 == true){
		alert('En la pregunta 5, debe elejir al menos 3 respuestas');
	}if(c1 == true && c4 == true && c7 == true){
		alert('En la pregunta 5, debe elejir un tipo de calidad');
	}if(c2 == true && c5 == true && c8 == true){
		alert('En la pregunta 5, debe elejir una sola descripcion de precios');
	}if(!document.querySelector('input[name="prg8"]:checked')){
		alert('Debe contestar la pregunta 8');
	}if(c10 == false && c11 == false && c12 == false && c13 == false && c14 == false && c15 == false){
		alert('Debe contestar la pregunta 9');
	}if(!document.querySelector('input[name="prg11"]:checked')){
		alert('Debe contestar la pregunta 11');
	}if(!document.querySelector('input[name="prg13"]:checked')){
		alert('Debe contestar la pregunta 13');
	}if(!document.querySelector('input[name="prg14"]:checked')){
		alert('Debe contestar la pregunta 14');
	}
}
function Mensaje(){
	alert('¡Gracias por tu colaboración, leeremos tus respuestas!');
}