
<?php
echo "<div class='container'>";
include "conexion.php";
$rs=mysql_query("select Path,Descripcion from fotosevidencia where IdCita=$cita",$con);
if($rs!=NULL){
      while($fotos = mysql_fetch_array($rs)){
          echo" <div class='thumb'>
		      <img src='http://www.delineadosmagally.com.mx/Admin/".$fotos['Path']."' style='width:100%;height:100%;' alt='".$fotos['Descripcion']."' title='".$fotos['Descripcion']."'/>
           </div>";
}

}







echo "</div><input type='button' value='Regresar' class='letras' onClick='regresar($idCliente)' style='float:bottom;'/>    
<input type='button' value='Descargar historial' class='letras' onClick='generador($idCita)' style='position:relative;left: 80%;'/>
    















";




?>


	



