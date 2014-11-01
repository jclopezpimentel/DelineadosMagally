<?php
$host = "localhost";
$user = "root";
$pw = "root";
$db = "delinead_magally";
$con=mysql_connect($host,$user,$pw);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
$sdb=mysql_select_db($db,$con)or die("la db no existe");
                        
?>