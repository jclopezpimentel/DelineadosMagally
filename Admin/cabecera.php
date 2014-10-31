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

?>

<style>
#bien{position:absolute;top:10px;left:100px;}
</style>

<div id="bien">
Bienvenido:  <?php echo $sesion->get("usuario"); ?> <a href="cerrarsesion.php"> Cerrar Sesion </a>
</div>
<header id="headerAdmin">
<center>
          <img src='Images/logo.png' style='width:70%; height:auto;'  /> 
        </center> 
        <br />
<div id='menuWrapper'>
<ul class='menu'>
<li class='top'><a class='top_link' href='home.php?p=cuestionario'><span>Agregar nuevo cliente</span></a></li>
<li class='top'><a class='top_link' href='home.php?p=MD9'><span>Calendario de Citas</span></a></li>
<li class='top'><a class='top_link' href='home.php?p=MD6'><span>Galeria portada</span></a></li>
<li class='top'><a class='top_link' href='home.php?p=MD10'><span>Clientes existentes</span></a></li>
</ul>
</div>


</header>

<?php 
	}	
?>
