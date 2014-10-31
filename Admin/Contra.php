<?php 
	require_once("sesion.class.php");
	
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
<?php
include("conexion.php");

$qy =mysql_query("SELECT Usuario,Contrasena  FROM usuarios where Usuario='$usuario'");
while ($r=mysql_fetch_array($qy)) {
	$fe = $r['Usuario'];
 $fee = $r['Contrasena'];

	echo $f['Usuario'];
}
//echo $fe;
//echo $fee;
?>
<center>
<form action="Modifusua.php" method="POST" name="usa">
 <table>
	 <tr><td colspan="2"><center><b>Modificar Contrase&ntilde;a<b></center></td></tr>
	 <tr><td>Nombre: </td><td><input type="text" name="nameba" value="<?php echo $fe; ?>" readonly></td></tr>
	 <tr><td>Contrase&ntilde;a actual: </td><td><input type="text" name="contra" value="<?php echo $fee; ?>" readonly></td></tr>
	 <tr><td>Nueva contrase&ntilde;a</td><td><input type="text" name="nuevacontra"></td></tr>
  <tr><td><input type="submit" name="Guardar" value="Guardar"></td><td><input type="button" onclick="location.href='home.php'" value="Cancelar"></td></tr>
 </table>
</form>
</center>
<?php
}
?>

    
    
    
    
    
