<?php 
	require_once("includes/sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{
		header("Location: index.php");		
	}
	else 
	{
	   
	  
   // $pagina = basename($_SERVER['QUERY_STRING']);
    $pagina=$_GET['p'];
    if($pagina==null){
        $pagina="default";
    }
	
?>
<div id="bien">
Bienvenido:  <?php echo $sesion->get("usuario"); ?> <a href="cerrarsesion.php"> Cerrar Sesion </a> <a href="home.php?p=Contra"> Cambiar contrase&ntilde;a </a>
</div>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
  <title>Delineados Magally</title>

   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <link rel="stylesheet" href="Css/styles.css"/>
   <!--<link rel="stylesheet" href="Css/BotonCuestionario.css"/>
   <link rel='stylesheet' href='scripts/jquery-ui/jquery-ui.css'>-->
   <script type="text/javascript" src="scripts/script.js"></script>
   <script type="text/javascript" src="scripts/progress.js"></script>
  <!-- <script type="text/javascript" src="scripts/jquery.ui.js"></script>
   <script type="text/javascript" src="scripts/jquery.js"></script>
   <script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
<script type='text/javascript' src='scripts/jquery-ui/jquery-ui.js'></script> 
<script type='text/javascript' src='scripts/jquery-ui/jquery-ui.min.js'></script> 
<script type='text/javascript' src='scripts/jquery-ui/jquery-ui.min.js'></script> 
<script type='text/javascript' src='scripts/jquery.1.7.1.js'></script>
  <script type='text/javascript' src='scripts/jquery.ui.1.8.16.js'></script>-->
   

</head>
<body onload="checar()">

	<div class="caja">
    
	 <?php 
    	include('cabecera.php');
	 ?>

	<div id='contenido'>
<div id='contenido2' style='position:relative;'>
 <?php 

    if($pagina==null){
        $pagina="default";
    }
    
    if(file_exists($pagina.'.php')){
	       include($pagina.'.php');
	 } else {
	       echo('Esa página no existe!');
	 } 
	?>
</div>	
</div>
 
<?php 
	//include('pie.php'); Quitaremos el pie de página a petición de Magally
    
?>	
</div>

</body>
	
</html>

<?php
}
?>

    
    
    
    
    
