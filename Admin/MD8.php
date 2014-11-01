
 
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



$cita=$_GET['id'];

   include 'includes/cita.php';
   include 'includes/caracteristicas.php';
   include 'includes/galeria.php';
   
   }
?>



