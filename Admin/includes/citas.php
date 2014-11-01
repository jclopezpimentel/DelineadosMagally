<?php

$cliente=$_POST['IdCliente'];
$nombre="";
include "../conexion.php";
$rs=mysql_query("select Nombre,ApellidoPaterno,ApellidoMaterno from clientes where IdCliente =$cliente ",$con);
$clientes=mysql_fetch_array($rs);
$nombre=urldecode($clientes['Nombre'])." ".urldecode($clientes['ApellidoPaterno'])." ".urldecode($clientes['ApellidoMaterno']);

$texto= "
<input type='button' onclick='cerrar()' value='X' class='letras' style='float:right;'/>
<p class='letras'> $nombre</p>
<input type='button' onclick='citaNueva($cliente)' value='Agregar cita' class='letras'> 
    <p class='letras'>Ver citas anteriores</p>";
$rs=mysql_query("select * from citas where IdCliente=$cliente",$con);
if($rs!=NULL){

    while($citas=mysql_fetch_array($rs)){
        
       
        $texto.= "<input class='letras' type='button' value='".$citas['Fecha']."' id='id=".$citas['IdCita']."' onClick='mostrarHistoria(".$citas['IdCita'].")'/><br>";
       
    }
   
}

$texto.="<br/><input type='button' onclick='eliminar($cliente)' value='Eliminar Cliente' class='letras'>";
echo $texto;
?>


