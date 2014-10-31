  <?php  
  include "conexion.php" ;
                   $rs = mysql_query("SELECT * FROM usuarios WHERE Usuario='danira' ",$con); 
     if (mysql_num_rows($rs)!=0){ 
   	  session_start(); 
      	$autentificado = "SI"; 
   	header ("Location: MD10.php");	
}else { 
   	header("Location: MD10.php?errorusuario=si"); 
}    ?>