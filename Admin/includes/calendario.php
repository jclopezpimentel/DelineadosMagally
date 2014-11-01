<?php
$resultado=$_POST['calendario'];
include "../conexion.php";
$rs=mysql_query("UPDATE calendario SET mostrar=$resultado ",$con);
echo "Listo";
  


?>