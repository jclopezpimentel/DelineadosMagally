<?php

echo"
<!doctype html>
<html lang='es'>
<head>
	<meta charset='UTF-8'>
	<title>Home</title>
	<script type='text/javascript' src='engine1/jquery.js'></script>
    <script type='text/javascript' src='engine1/jquery-2.1.1.js'></script>
   <script type='text/javascript' src='engine1/javascript.js'></script>
<script src='engine1/jquery-ui.js'></script>

<link href='Css/css.css' rel='stylesheet' type='text/css' />
<link href='Css/jquery.css' rel='stylesheet' type='text/css' />
  
<center>  
         <img src='Images/logo.png'> 
        </center>
        
      
   
   
    <script>
    function cambiar(esto)
{
	vista=document.getElementById(esto).style.display;
	if (vista=='none')
		vista='block';
	else
		vista='none';

	document.getElementById(esto).style.display = vista;
}
    </script>

</head>
<body>


	<header>
		
	<a href='cuestionario.php'><div class='contenedorAdm' id='opcion1' >
			<p class='textoAdm'>Agregar nuevo cliente</p>
		</div></a>

		<a href='MD9.php'><div class='contenedorAdm' id='opcion2'>
			<p class='textoAdm'>Calendario de Citas</p>
		</div></a>

		<a href='MD6.php'><div class='contenedorAdm' id='opcion3'>
			<p class='textoAdm'>Galeria</p>
		</div></a>

		<a href='MD10.php'><div class='contenedorAdm' id='opcion4' >
			<p class='textoAdm'>Clientes</p>
		</div></a>

		

	</header>
  
";

?>