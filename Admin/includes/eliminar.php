<?php

include "../conexion.php";
$cliente=$_POST['IdCliente'];
try{
    $rs=mysql_query("UPDATE clientes SET  Eliminado= 1 WHERE IdCliente=$cliente",$con);
    echo "listo";
}catch(Exception $e){
    echo "ocurrio un error";
}

 
?>