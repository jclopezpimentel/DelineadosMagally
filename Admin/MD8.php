
 
 <?php

	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: http://www.delineadosmagally.com.mx/Admin/");		
	}
	else 
	{



$cita=$_GET['id'];

   include 'includes/cita.php';
   include 'includes/caracteristicas.php';
   include 'includes/galeria.php';
   
   }
?>



