<?php
$cliente=$_POST['IdCliente'];
$texto="<input type='button' onclick='agregarCita($cliente)' value='Agregar cita' Style='left:60px;' class='letras'> 
    <p class='letras'>Ver citas anteriores</p>";
    //include "delineadosmagally.com.mx/includes/conexion.php";
    $host = "localhost";
$user = "delinead_magally";
$pw = "Magally2014";
$db = "delinead_magally";

$con=mysql_connect($host,$user,$pw)or die("error de conexion");
$sdb=mysql_select_db($db,$con)or die("la db no existe");

    $r=mysql_query("select Fecha from citas where IdCliente='$IdCliente'",$con);
    if($r!=NULL){
    while($clientes=mysql_fetch_array($rs)){
    
            $texto="fff";
            
           //$texto.="<input class='letras' type='button' value='".$citas['Fecha']."' id='".$citas['IdCita']."' onClick='mostrarHistoria(".$citas['IdCita'].")'/><br><br>";
        }
    }  
    echo $texto;

?>

