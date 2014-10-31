<?php
$buscar=$_GET['buscar'];

/*include "includes/conexion.php";
    $rs=mysql_query("select Nombre from clientes where Nombre like $buscar%",$con);
    $arreglo=array();
    $x=0;
    if($rs!=NULL){
        while($clientes=mysql_fetch_array($rs)){
           $arreglo[$x]=$clientes['Nombre'];
           $x+=1;
        }
    }*/
echo json_encode($buscar);
//echo $buscar;


?>

