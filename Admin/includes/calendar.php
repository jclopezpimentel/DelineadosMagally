<?php

include "conexion.php";
$rs=mysql_query("select mostrar from calendario",$con);
$datos=mysql_fetch_array($rs);
echo $datos['mostrar'];
    




?>