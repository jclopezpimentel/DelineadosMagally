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
       letras = " ´áéíóúabcdefghijklmnñopqrstuvwxyz";
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

//DANIRA

function generador(cita){    
	window.open("includes/generador.php?p="+cita);  
}
function eliminar(cliente){
   var resultado= confirm("Confirma la eliminacion del usuario?")
   if(resultado==true){
	var ajax=nuevoAjax();
	ajax.open("POST", "includes/eliminar.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros="IdCliente="+cliente; 
	ajax.send(parametros);
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
			alert(ajax.responseText);
            window.location.reload();       
		}
	}
    }   
}

function nuevoAjax(){ 
	var xmlhttp=false; 
	try 	{ 
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
	catch(e)	{ 
		try		{ 
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		} 
		catch(E) { xmlhttp=false; }
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp=new XMLHttpRequest(); } 
	return xmlhttp; 
}

function servicios(componente,servicio){
   var capa=document.getElementById(componente);
	var ajax=nuevoAjax();
	ajax.open("POST", "includes/servicios.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros="servicios="+servicio; 
	ajax.send(parametros);
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
		 	capa.innerHTML=ajax.responseText;
		}
	}   
}

function citaNueva(cliente){  
  window.location="home.php?p=MD12&id="+cliente;  
}

function mostrarHistoria(cita){   
     window.location="home.php?p=MD8&id="+cita;
}

function cambiarColor(id){
    document.getElementById(id).style.color="#F71414";
}

function cerrar(){
    document.getElementById("lista2").style.visibility="visible";
    document.getElementById("citas").innerHTML="";	
    document.getElementById("citas").style.visibility="hidden";
}


function mostrarCitas(cliente){
var contenedor = document.getElementById("contenido2");
  var lista = contenedor.getElementsByTagName("li");
  for(var i=0; i<lista.length; ++i) {
    lista[i].style.color = "#000000";
    }
    /*cambiarColor(cliente);  */
	var ajax=nuevoAjax();
	ajax.open("POST", "includes/citas.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros="IdCliente="+cliente; 
	ajax.send(parametros);  
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
         texto=ajax.responseText;
          document.getElementById("lista2").style.visibility="hidden";
          document.getElementById("citas").innerHTML=texto;	
          document.getElementById("citas").style.visibility="visible";
          especial();
		}
	}
    }
    
function regresar(cliente){
    //window.load("p=MD10");
    window.open("home.php?p=MD10");
    mostrarCitas(cliente);
}
    
function especial(){  
    try{
        var lista = document.getElementById("contenido2").getElementsByTagName("li");
        contador=0;
        for(var i=0; i<lista.length; ++i) {
            if(lista[i].style.color == "#000000"){
                contador++;
            }
        }
        if(contador==lista.length){
            document.getElementById("citas").style.visibility="hidden";
        }
    }catch(err){
    }
}

function Letras(event){
    
    if ((event.keyCode != 32) && (event.keyCode < 64) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122) && (event.keyCode < 160)){
        event.returnValue = false;
    }
    }
    
function buscar(palabra, elemento){
    var ajax=nuevoAjax();
	ajax.open("POST", "includes/busqueda.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros="term="+palabra; 
	ajax.send(parametros);
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
			document.getElementById(elemento).innerHTML=ajax.responseText;
		}
	}
}

function checar(){
    var ajax=nuevoAjax();
	ajax.open("POST", "includes/calendar.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros=""; 
	ajax.send(parametros);
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
		  if(ajax.responseText==0){
		      
		      document.getElementById("mostrar").checked=true;
		  }else{
		      document.getElementById("mostrar").checked=false;
		  }
		}
	}
}

function AparecerDesaparecer(componente,a){ 
	var ajax=nuevoAjax();
	ajax.open("POST", "includes/calendario.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros="calendario="+a; 
	ajax.send(parametros);
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
		  alert(ajax.responseText);          
        }
	}
}

function fechaActual(elemento){
     var f = new Date();    
     if(f.getDate()<10){
        dia="0"+f.getDate();
     }
     else{
        dia=f.getDate();
     }
     if(f.getMonth()+1<10){
        mes="0"+(f.getMonth()+1);
     }
     else{
         mes=f.getMonth()+1;
     }
     return document.getElementById(elemento).setAttribute('min',(f.getFullYear())+"-"+mes+"-"+dia);     
}

function fechaActual2(elemento){
     var f = new Date();    
     if(f.getDate()<10){
        dia="0"+f.getDate();
     }
     else{
        dia=f.getDate();
     }
     if(f.getMonth()+1<10){
        mes="0"+(f.getMonth()+1);
     }
     else{
         mes=f.getMonth()+1;
     }
     return document.getElementById(elemento).setAttribute('value',(f.getFullYear())+"-"+mes+"-"+dia);     
}

function agregarCita(nombre,correo,fecha,horaInicio,comentarios,servicios){
    
    var ajax=nuevoAjax();
    ajax.open("POST", "includes/agregarCita.php", true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");alert("funvi");
    var parametros="nombre="+nombre+"&correo="+correo+"&fecha="+fecha+"&inicio="+horaInicio+"&servicios="+servicios+"&comentarios="+comentarios; 
    ajax.send(parametros);
    ajax.onreadystatechange=function()	{
        if (ajax.readyState==4){	  
            if(ajax.responseText=="Listo"){
                alert("Correo enviado");
                document.getElementById("resetear").click();
            }
             else{
                alert(ajax.responseText); 
             }
        }
    }             
}

function agendarCita(formulario){
    try{
        nombre=document.getElementById(formulario).nombre.value;
    correo=document.getElementById(formulario).correo.value;
    fecha=document.getElementById(formulario).fecha.value;
    horaInicio=document.getElementById(formulario).horaInicio2.value;
    }catch($err){
        alert("Llena los campos obligatorios por favor ");
    }
    try{
        comentarios=document.getElementById(formulario).comentario.value;
    }catch($err){
        comentarios="";
    }
    servicios="";
    try{
        var c = document.getElementById(formulario).checkbox; 
            for (var x=0; x < c.length; x++) {
                if (c[x].checked) {
                    servicios+=c[x].id+",";
                }
            }
    }catch(err){
        servicios="no especifico servicio";
    }   
    if(nombre!=""){
        if(correo!=""){
            if(fecha!=""){
                if(horaInicio!=""){
                        agregarCita(nombre,correo,fecha,horaInicio,comentarios,servicios);
                        horaFinal=horaInicio;
                        
                        var ajax=nuevoAjax();
                        ajax.open("POST", "includes/agregarEvento.php", true);
	                    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        var parametros="nombre="+nombre+"&correo="+correo+"&fecha="+fecha+"&inicio="+horaInicio+"&Fin="+horaFinal+"&servicios="+servicios+"&comentarios="+comentarios; 
                        alert(parametros+" para");
                        ajax.send(parametros);
                        ajax.onreadystatechange=function()	{
		                      if (ajax.readyState==4){	    
        	                       window.open(ajax.responseText)
		                      }
                        }
                }else{
                }
            }else{
                alert("Error en correo electronico");
            }
        }else{
        }
    
    }else{
    }
}


function cancelarCita(formulario){
    nombre=document.getElementById(formulario).nombre2.value;
    
    correo=document.getElementById(formulario).correo2.value;
    fecha=document.getElementById(formulario).fecha2.value;
    
    horaInicio=document.getElementById(formulario).horaInicio2.value;
    comentarios=document.getElementById(formulario).comentarios2.value;
    
    if(nombre!=""){
        
        if(correo!="" & correo.length>1){
            if(fecha!=""){
                if(horaInicio!=""){
                    if(comentarios==""){
                        comentarios="";
                    }
                        var ajax=nuevoAjax();
                        ajax.open("POST", "includes/cancelarCita.php", true);
	                    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        var parametros="nombre="+nombre+"&correo="+correo+"&fecha="+fecha+"&inicio="+horaInicio+"&comentarios="+comentarios; 
                        ajax.send(parametros);
                        ajax.onreadystatechange=function()	{
		                      if (ajax.readyState==4){
		                          if(ajax.responseText=="listo"){
                                    alert("Correo enviado");
                                    document.getElementById("resetear2").click();
                                    
                                  }
                                  else{
                                       alert(ajax.responseText); 
                                  }
        	                      
		                      }
                        }
                }else{
                }
            }else{
                alert("Error en correo electronico");
            }
        }else{
        }
    
    }else{
    }
   
}



