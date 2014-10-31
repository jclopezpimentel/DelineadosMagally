<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
</head>
<body>
<?php
include "conexion.php";
$cita=1;
$rs = mysql_query("select * from caracteristicasformula where IdCita=$cita",$con);
  $datos=mysql_fetch_array($rs);
	$DesCabelloPiel=$datos['DesCabelloPiel'];
	$DesOjos=$datos['DesOjos'];
	$DesLunares=$datos['DesLunares'];
	$DesCejas=$datos['DesCejas'];
	$DesLabios=$datos['DesLabios'];
	$EfectoDelineado=$datos['EfectoDelineado'];
    $Delineado=$datos['Delineado'];
	$Aguja=$datos['Aguja'];
	$DelCejas=$datos['DelCejas'];
	$DelOjos=$datos['DelOjos'];
	$DelLabios=$datos['DelLabios'];
	$Pigmento=$datos['Pigmento'];
	$Mezcla=$datos['Mezcla'];
	$Dermodespigmentacion=$datos['Dermodespigmentacion'];
	$Color=$datos['Color'];
	$ElimVerrugas=$datos['ElimVerrugas'];
	$Anestesia=$datos['Anestesia'] ;
	$Observaciones=$datos['Observaciones'];
    echo "<table> ";
    if(empty($DesCabelloPiel)=="false"){
        echo "<tr ><td><p id='texto'>Cabello y piel: </p></td> 
    <td><p id='texto'>".$DesCabelloPiel."  </p></td></tr>";
    }
    if(empty($DesOjos)==false){
        echo "<tr ><td><p id='texto'> Ojos: </p></td> 
    <td><p id='texto'>".$DesOjos."  </p></td></tr>";
    }
    if(empty($DesLunares)==false){
        echo "<tr ><td><p id='texto'> Lunar o señas particulares :  </p></td> 
    <td><p id='texto'>".$DesLunares."  </p></td></tr>";
    }
    if(empty($DesCejas)==false){
        echo "<tr ><td><p id='texto'> Cejas: </p></td> 
    <td><p id='texto'>".$DesCejas."  </p></td></tr>";
    }
    if(empty($DesLabios)==false){
        echo "<tr ><td><p id='texto'> Labios: </p></td> 
    <td><p id='texto'>".$DesLabios."  </p></td></tr>";
    }
    if(empty($EfectoDelineado)==false){
        echo "<tr ><td><p id='texto'> Efecto en delineado: </p></td> 
    <td><p id='texto'>".$EfectoDelineado."  </p></td></tr>";
    }
    if(empty($Delineado)==false){
        echo "<tr ><td><p id='texto'> Delineado de: </p></td> 
    <td><p id='texto'>".$Delineado."  </p></td></tr>";
    }
    
    if(empty($Aguja)==false){
        echo "<tr ><td><p id='texto'> Aguja: </p></td> 
    <td><p id='texto'>".$Aguja."  </p></td></tr>";
    }
    if(empty($DelCejas)==false){
        echo "<tr ><td><p id='texto'> Cejas: </p></td> 
    <td><p id='texto'>".$DelCejas."  </p></td></tr>";
    }
    if(empty($DelOjos)==false){
        echo "<tr ><td><p id='texto'> Ojos: </p></td> 
    <td><p id='texto'>".$DelOjos."  </p></td></tr>";
    }
    if(empty($DelLabios)==false){
        echo "<tr ><td><p id='texto'> Labios: </p></td> 
    <td><p id='texto'>".$DelLabios."  </p></td></tr>";
    }
    
    if(empty($Pigmento)==false){
        echo "<tr ><td><p id='texto'> Pigmento: </p></td> 
    <td><p id='texto'>".$Pigmento."  </p></td></tr>";
    }
    if(empty($Mezcla)==false){
        echo "<tr ><td><p id='texto'> Mezcla: </p></td> 
    <td><p id='texto'>".$Mezcla."  </p></td></tr>";
    }
    if(empty($Dermodespigmentacion)==false){
        echo "<tr ><td><p id='texto'> Dermodespigmentación: </p></td> 
    <td><p id='texto'>".$Dermodespigmentacion."  </p></td></tr>";
    }if(empty($Color)==false){
        echo "<tr ><td><p id='texto'> Color: </p></td> 
    <td><p id='texto'>".$Color."  </p></td></tr>";
    }
    if(empty($ElimVerrugas)==false){
        echo "<tr ><td><p id='texto'> Eliminación de verrugas: </p></td> 
    <td><p id='texto'>".$ElimVerrugas."  </p></td></tr>";
    }
    if(empty($Anestesia)==false){
        echo "<tr ><td><p id='texto'> Anestesia: </p></td> 
    <td><p id='texto'>".$Anestesia."  </p></td></tr>";
    }
    
    echo "</table> </br>";
    

    echo"<p id='texto'> Observaciones :  <textarea maxlength='1000' style='width: 70%; height=80px;' id='texto'  readonly='readonly' >".$Observaciones."</textarea></p>";


?>

</body></html>