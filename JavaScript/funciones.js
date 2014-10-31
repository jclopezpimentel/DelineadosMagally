 function cambiar(esto)
{
	vista=document.getElementById(esto).style.display;
	if (vista=='none')
		vista='block';
	else
		vista='none';

	document.getElementById(esto).style.display = vista;
}
function toggle_ocupacion(elemento) {

if(elemento.value=="Si") {
   document.getElementById("cual6").style.display = "inline";
} else {
   document.getElementById("cual6").style.display = "none";
}

}


function toggle_ocupacion2(elemento) {

if(elemento.value=="Si") {
   document.getElementById("cual7").style.display = "inline";
} else {
   document.getElementById("cual7").style.display = "none";
}

}

function toggle_ocupacion3(elemento) {

if(elemento.value=="Si") {
   document.getElementById("cual8").style.display = "inline";
} else {
   document.getElementById("cual8").style.display = "none";
}

}

      function validar(e) {

           tecla = e.which || e.keyCode;

           patron = /\d/; // Solo acepta números

           te = String.fromCharCode(tecla);

           return (patron.test(te) || tecla == 9 || tecla == 8);

         }

    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
