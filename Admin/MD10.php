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

?>


<p class="letras">Nombre : <input type="text" size="50" class="letras" id="busqueda" onkeyup="buscar(this.value,lista2.id)" /></p> 
<div id="citas" style="border:2px solid #A1D405;padding: 10px;width:50%;height:auto; overflow: auto;visibility: hidden;position:relative;float:bottom;" >

</div>
<br /><br/>

<div id="lista2" style="position: relative;float: bottom;">
<p class="letras">Lista de clientes</p>

<?php

include "conexion.php";
$rs=mysql_query("select IdCliente,Nombre,ApellidoPaterno,ApellidoMaterno from clientes where Eliminado<>1 order by Nombre,ApellidoPaterno,ApellidoMaterno",$con);
if($rs!=NULL){
    echo "<ul id='lista'>";
    while($clientes=mysql_fetch_array($rs)){
        $idCliente=$clientes['IdCliente'];
       echo"<li class='letras' id='$idCliente' onclick='mostrarCitas($idCliente)'  style='cursor:pointer;'><p>".urldecode($clientes['Nombre'])." ".urldecode($clientes['ApellidoPaterno'])." ".urldecode($clientes['ApellidoMaterno'])."</p></li>
       ";              
    }
    echo "</ul>";
}  
?>

</div>

  
<?php 
	}	
?>
