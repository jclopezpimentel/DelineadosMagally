
<?php
include "conexion.php";
$rs = mysql_query("select * from caracteristicasformula where IdCita=$cita",$con);
  $datos=mysql_fetch_array($rs);
	$DesCabelloPiel=urldecode($datos['DesCabelloPiel']);
	$DesOjos=urldecode($datos['DesOjos']);
	$DesLunares=urldecode($datos['DesLunares']);
	$DesCejas=urldecode($datos['DesCejas']);
	$DesLabios=urldecode($datos['DesLabios']);
	$EfectoDelineado=urldecode($datos['EfectoDelineado']);
    $Delineado=urldecode($datos['Delineado']);
	$Aguja=urldecode($datos['Aguja']);
	$DelCejas=urldecode($datos['DelCejas']);
	$DelOjos=urldecode($datos['DelOjos']);
	$DelLabios=urldecode($datos['DelLabios']);
	$Pigmento=urldecode($datos['Pigmento']);
	$Mezcla=urldecode($datos['Mezcla']);
	$Dermodespigmentacion=urldecode($datos['Dermodespigmentacion']);
	$Color=urldecode($datos['Color']);
	$ElimVerrugas=urldecode($datos['ElimVerrugas']);
	$Anestesia=urldecode($datos['Anestesia']) ;
	$Observaciones=urldecode($datos['Observaciones']);
    echo "<table> ";
    if(empty($DesCabelloPiel)==false){
        echo "<tr ><td><p id='texto'>Cabello y piel: </p></td> 
    <td><p id='texto'>".$DesCabelloPiel."  </p></td></tr>";
    }
    if(empty($DesOjos)==false){
        echo "<tr ><td><p id='texto'> Ojos: </p></td> 
    <td><p id='texto'>".$DesOjos."  </p></td></tr>";
    }
    if(empty($DesLunares)==false){
        echo "<tr ><td><p id='texto'> Lunar o se&ntilde;as particulares :  </p></td> 
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
        echo "<tr ><td><p id='texto'> Dermodespigmentaci&oacute;n: </p></td> 
    <td><p id='texto'>".$Dermodespigmentacion."  </p></td></tr>";
    }if(empty($Color)==false){
        echo "<tr ><td><p id='texto'> Color: </p></td> 
    <td><p id='texto'>".$Color."  </p></td></tr>";
    }
    if(empty($ElimVerrugas)==false){
        echo "<tr ><td><p id='texto'> Eliminaci&oacuten; de verrugas: </p></td> 
    <td><p id='texto'>".$ElimVerrugas."  </p></td></tr>";
    }
    if(empty($Anestesia)==false){
        echo "<tr ><td><p id='texto'> Anestesia: </p></td> 
    <td><p id='texto'>".$Anestesia."  </p></td></tr>";
    }
    
    echo "</table> </br>";
    

    echo"<p id='texto'> Observaciones :  <textarea maxlength='1000' style='width: 70%; height=80px;' id='texto'  readonly='readonly' >".$Observaciones."</textarea></p>";


?>
