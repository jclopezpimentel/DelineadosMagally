<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: admin.php");		
	}
	else 
	{

?>


<?php
include "plantilla-superior.php";
?>
<footer>
	Delineados Magally, Comitán de Domínguez, dirección XXXXXX
</footer> 
</body>
</html>

<?php 
	}	
?>
