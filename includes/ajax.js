var Conexion=false; // Variable que manipula la conexion.
var Servidor="consulta.php"; // Determina la pagina donde buscar
var Palabra=""; //Determina la ultima palabra buscada.

// funcion que realiza la conexion con el objeto XMLHTTP...


function Contenido(idContenido)
{
	
	
			document.getElementById(idContenido).style.display="block";
			document.getElementById(idContenido).innerHTML=Conexion.responseText;
		
}

function Solicitud(idContenido,Cadena)
{
	// si no recibimos cadena, no hacemos nada.
	// Cadena=la cadena a buscar en la base de datos
	/* Si cadena es igual a Palabra, no se realiza la busqueda. Puede ser que pulsen la tecla tabulador,
	 * y no interesa que vuelva a verificar...*/
	if(Cadena && Cadena!=Palabra)
	{
		// Si ya esta conectado, cancela la solicitud en espera de que termine
		if(Conexion) return; // Previene uso repetido del boton.
		
		// Realiza la conexion
		Conectar();
		
		// Si la conexion es correcta...
		if(Conexion)
		{
			// Habilitamos la visualización del reloj
			document.getElementById("reloj").style.visibility="visible";

			// Esta variable, se utiliza para igualar con la cadena a buscar.
			Palabra=Cadena;

			/* Preparamos una conexion con el servidor:
			*	POST|GET - determina como se envian los datos al servidor
			*	true - No sincronizado. Ello significa que la página WEB no es interferida en su funcionamiento
			*	por la respuesta del servidor. El usuario puede continuar usando la página mientras el servidor
			*	retorna una respuesta que la actualizará, usualmente, en forma parcial.
			*	false - Sincronizado */
			Conexion.open("POST",Servidor,true);

			// Añade un par etiqueta/valor a la cabecera HTTP a enviar. Si no lo colocamos, no se pasan los parametros.
			Conexion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
			// Cada vez que el estado de la conexión (readyState) cambie se ejecutara el contenido de esta "funcion()"
			Conexion.onreadystatechange=function()
			{
				Contenido(idContenido);
			}
			
			date=new Date();
			/* Realiza la solicitud al servidor. Puede enviar una cadena de caracteres, o un objeto del tipo XML
			 * Si no deseamos enviar ningun valor, enviariamos null */
			Conexion.send("idContenido="+idContenido+"&word="+Cadena+"&"+date.getTime());
		}else
			document.getElementById(idContenido).innerHTML="No disponible";
	}
}

// Funcion que inicia la busqueda.
// Tiene que recibir el identificador donde mostrar el listado, y la cadena a buscar
function autocompletar()
{
	document.getElementById("lista").style.display="block";
    msg="<a style='cursor:pointer;'>dhfbdfbd</a><br><a style='cursor:pointer;'>dhfbdfbd</a>";
			document.getElementById("lista").innerHTML=msg;
}

// Funcion que se ejecuta cuando seleccionamos un valor del desplegable
