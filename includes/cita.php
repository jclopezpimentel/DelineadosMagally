<!doctype html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
</head>
<body >


<?php
include "conexion.php";
$cita=1;
$rs = mysql_query("select * from citas inner join clientes on citas.IdCliente=clientes.IdCliente inner join historialcliente his on his.IdCita=citas.IdCita where citas.IdCita=$cita",$con); 
$fetch = mysql_fetch_array($rs);                  
    $idCita=$fetch['IdCita'];
    
    $nombre=$fetch['Nombre'];
    $celular=$fetch['Celular'];
    $edad=$fetch['Edad'];
    $ocupacion=$fetch['Ocupacion'];
    $servicioMedico=$fetch['ServicioMedico'];
    $fecha=$fetch['Fecha'];
    $tatuajes=$fetch['Tatuajes'];
    $endodoncia=$fetch['Endodoncia'];
    $transfusion=$fetch['Transfusion'];
    $alergias=$fetch['Alergias'];
    $medicamentos=$fetch['Medicamentos'];
    $drogas=$fetch['Drogas'];
    $intervencion=$fetch['IntervencionQuirurgica'];
    $alimentos=$fetch['Alimentos'];
    $alcohol=$fetch['Alcohol'];
    $embarazo=$fetch['Embarazo'];
    $antecedentesEnfermedades;
    $enfermedadesTransmitibles;
    $imagenes;
    
    mysql_free_result($rs);
    
    echo "<br /><p id='texto'>Nombre: ".$nombre."</p>";
    echo "<p id='texto'>Celular: ".$celular."</p>";
    echo "<p id='texto' >Edad: ".$edad."</p>";
    echo "<p id='texto' > Ocupacion: ".$ocupacion."</p>";
    echo "<p id='texto' > Servicio Medico: ".$servicioMedico."</p>";
    echo "<p id='texto' > Fecha de cita: ".$fecha."</p>";
    echo "<p id='texto' > 1.- Le han practicado algun tatuaje, perforacion o micropigmentacion: ".$tatuajes."</p>";
    echo "<p id='texto' > 2.- Le han realizado algun procedimiento dental (endodoncia): ".$endodoncia."</p>";
    echo "<p id='texto' > 3.- Le han realizado alguna transfusion sanguinea en los ultimos seis meses: ".$transfusion."</p>";
    
    $rs = mysql_query("select Enfermedad from antecedentesenfermedades where IdCita=$cita",$con);
    if($rs!=NULL){
      echo "<p id='texto' > 4.- Tiene usted antecedentes de enfermedades: Si </p><br />";
      $totalAnt=mysql_num_rows($rs);
      while ($antEnf = mysql_fetch_array($rs)){
        echo "<p id='texto'>- ".$antEnf['Enfermedad']."</p>";
       
      }
    }
    else{
      echo "<p id='texto' > 4.- Tiene usted antecedentes de enfermedades: No </p>";
    }
    
   mysql_free_result($rs); 
    
  $rs = mysql_query("select Enfermedad from enfermedadestransmitibles where IdCita=$cita",$con);
    if($rs!=NULL){
    echo "<br /><p id='texto' > 5.- Tiene usted antecedentes de enfermedades trasmisibles : Si</p><br />";
      while($enftrans   = mysql_fetch_array($rs)){
        echo "<p id='texto'>- ".$enftrans['Enfermedad']."</p>";
       
        }
    }
    else{
        echo "<br /><p id='texto' > 5.- Tiene usted antecedentes de enfermedades trasmisibles : No </p>";
    }  
    
    
    echo "<br /><p id='texto' > 6.-Padece usted alguna alergia a sustancias, alimentos, medicamentos, anestesicos u otros:"  ;
    if(empty($alergias)){
        echo "No</p>";
    }else{
        echo "Si,".$alergias."</p>";
    }
    
    if(empty($medicamentos)){
        echo "<p id='texto' > 7.-Actualmente toma usted algun medicamento: No</p>";
    }else{
        echo "<p id='texto' > 7.-Actualmente toma usted algun medicamento: Si, ".$medicamentos."</p>";
    }
    
    if(empty($drogas)){
        echo "<p id='texto' > 8. Consume usted alguna droga : No</p>";
    }
    else{
        echo "<p id='texto' > 8. Consume usted alguna droga :Si, ".$drogas."</p>";
    }
    
    
    echo "<p id='texto' > 9.- Le han realizado alguna intervencion quirurgica en los ultimos seis meses: ".$intervencion."</p>";
    echo "<p id='texto' > 10.- Ha tomado alimentos en las ultimas 4 horas: ".$alimentos."</p>";
    echo "<p id='texto' > 11.- Ha ingerido bebidas alcoholicas en las ultimas 8 hrs: ".$alcohol."</p>";
    echo "<p id='texto' > 12.- Esta embarazada o en periodo de lactancia   : ".$embarazo."</p><br><br>";
    

    
    
?>
</body>
