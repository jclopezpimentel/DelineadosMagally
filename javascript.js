// JavaScript Document


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


function servicios(componente,servicio,boton){  
	var capa=document.getElementById(componente);
	var ajax=nuevoAjax();
	ajax.open("POST", "http://delineadosmagally.com.mx/includes/servicios.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros="servicios="+servicio+"&nomBoton="+boton; 
	ajax.send(parametros);
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
		  
			capa.innerHTML=ajax.responseText;
		}
	}
    
    
}



function agregarCita(cliente){   
    var ajax=nuevoAjax();
	ajax.open("POST", "includes/funciones.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros="funcion=5 &IdCliente="+cliente; 
	ajax.send(parametros);
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
		  
		  windows.location="http://www.delineadosmagally.com.mx/MD12.php";
		}
	}
    
}

function mostrarCitas(cliente){
    
	var ajax=nuevoAjax();
	ajax.open("POST", "includes/funciones.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var parametros="funcion=1 &IdCliente="+cliente; 
	ajax.send(parametros);
	ajax.onreadystatechange=function()	{
		if (ajax.readyState==4)		{
		  document.getElementById("citasClientes").innerHTML=ajax.responseText;
document.getElementById("citasClientes").style.visibility="visible";
			
		}
	}
    }

function clientes(buscar){
    
    $('#busqueda').autocomplete({
            source: "http://delineadosmagally.com.mx/includes/listaClientes.php?buscar="+buscar,
            minLength: 2
        
});
}

function Letras(e){
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

function desaparecer(){
    document.getElementById('calendario').style.visibility="hidden";
    
}
function aparecer(){
    document.getElementById('calendario').style.visibility="visible";
}





function historial(idCita){
}

function generarPDF(){
  
}
function checkboxes(){
    var c = document.getElementById("formulario1").checkbox;
    
    for (var x=0; x < c.length; x++) {
        if (c[x].checked) {
        //aqui se ira concatenando
         }
}   
}
function dias(anio,componente,mes){  
    
    if(mes==1 || mes==3|| mes==5|| mes==7|| mes==8|| mes==10|| mes==12){
        variable="<option  class='texto'>Dia</option>";
    for(x=1;x<32;x++){
        variable2="<option  >"+x+"</option>";
        variable+=variable2;
        }
        document.getElementById(componente).innerHTML=variable;       
        
    }
    if(mes==2){      
        if(anio%4==0){
            t=30;
        }
        else{
            t=29;
        }
        
        variable="<option >Dia</option>";
        for(x=1;x<t;x++){
            variable2="<option>"+x+"</option>";
            variable+=variable2;
            }
        document.getElementById(componente).innerHTML=variable;
        }
     
   if(mes==4 || mes==6|| mes==8|| mes==9|| mes==11){
        variable="<option  class='texto'>Dia</option>";
    for(x=1;x<31;x++){
        variable2="<option  >"+x+"</option>";
        variable+=variable2;
        }
        document.getElementById(componente).innerHTML=variable;       
        
    }
            
         
    }    
    

