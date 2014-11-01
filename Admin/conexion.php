<?php
$host = "localhost";
$user = "root";
$pw = "root";
$db = "delinead_magally";
$con=mysql_connect($host,$user,$pw)or die("error de conexion");
$sdb=mysql_select_db($db,$con)or die("la db no existe");
                        
?>
