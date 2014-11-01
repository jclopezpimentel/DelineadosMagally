

<?php
include "../conexion.php";

$rs = mysql_query("select * from citas inner join clientes on citas.IdCliente=clientes.IdCliente inner join historialcliente his on his.IdCita=citas.IdCita where citas.IdCita=$cita",$con); 
$fetch = mysql_fetch_array($rs);                  
    $idCita=$fetch['IdCita'];
    $idCliente=$fetch['IdCliente'];
    $nombre=urldecode($fetch['Nombre']);
    $apellidoM=urldecode($fetch['ApellidoMaterno']);
    $apellidoP=urldecode($fetch['ApellidoPaterno']);
    $celular=$fetch['Celular'];
    $edad=$fetch['Edad'];
    $ocupacion=urldecode($fetch['Ocupacion']);
    $servicioMedico=urldecode($fetch['ServicioMedico']);
    $fecha=$fetch['Fecha'];
    $tatuajes=$fetch['Tatuajes'];
    $endodoncia=$fetch['Endodoncia'];
    $transfusion=$fetch['Transfusion'];
    $alergias=urldecode($fetch['Alergias']);
    $medicamentos=urldecode($fetch['Medicamentos']);
    $drogas=urldecode($fetch['Drogas']);
    $intervencion=$fetch['IntervencionQuirurgica'];
    $alimentos=$fetch['Alimentos'];
    $alcohol=$fetch['Alcohol'];
    $embarazo=$fetch['Embarazo'];
    $antecedentesEnfermedades;
    $enfermedadesTransmitibles;
    $imagenes;
    
    
    echo "<br/>
    <br /><p class='letras'>Nombre: ".$nombre." " .$apellidoP." ".$apellidoM."</p>
    <p id='texto'>Celular: ".$celular."</p>
    <p id='texto' >Edad: ".$edad."</p>
    <p id='texto' > Ocupacion: ".$ocupacion."</p>
    <p id='texto' > Servicio Medico: ".$servicioMedico."</p>
    <p id='texto' > Fecha de cita: ".$fecha."</p>
    <p id='texto' > 1.- Le han practicado algun tatuaje, perforacion o micropigmentacion: ".$tatuajes."</p>
    <p id='texto' > 2.- Le han realizado algun procedimiento dental (endodoncia): ".$endodoncia."</p>
    <p id='texto' > 3.- Le han realizado alguna transfusion sanguinea en los ultimos seis meses: ".$transfusion."</p>";
    
    $rs = mysql_query("select Enfermedad from antecedentesenfermedades where IdCita=$cita",$con);
    $total=mysql_num_rows($rs);
    if($total>0){
      echo "<p id='texto' > 4.- Tiene usted antecedentes de enfermedades: Si </p><br />";
      
      while ($antEnf = mysql_fetch_array($rs)){
        echo "<p id='texto'>- ".urldecode($antEnf['Enfermedad'])."</p>";
       
      }
    }
    else{
      echo "<p id='texto' > 4.- Tiene usted antecedentes de enfermedades: No </p>";
    }
    
   mysql_free_result($rs); 
    
  $rs = mysql_query("select Enfermedad from enfermedadestransmitibles where IdCita=$cita",$con);
  $total=mysql_num_rows($rs);
    if($total>0){
    echo "<br /><p id='texto' > 5.- Tiene usted antecedentes de enfermedades trasmisibles : Si</p><br />";
      while($enftrans   = mysql_fetch_array($rs)){
        echo "<p id='texto'>- ".urldecode($enftrans['Enfermedad'])."</p>";
       
        }
    }
    else{
        echo "<br /><p id='texto' > 5.- Tiene usted antecedentes de enfermedades trasmisibles : No </p>";
    }  
    
    
    echo "<br /><p id='texto' > 6.-Padece usted alguna alergia a sustancias, alimentos, medicamentos, anestesicos u otros:" .$alergias."</p>
         <p id='texto' > 7.-Actualmente toma usted algun medicamento: ".$medicamentos."</p> 
         <p id='texto' > 8. Consume usted alguna droga :".$drogas."</p>
         <p id='texto' > 9.- Le han realizado alguna intervencion quirurgica en los ultimos seis meses: ".$intervencion."</p>
         <p id='texto' > 10.- Ha tomado alimentos en las ultimas 4 horas: ".$alimentos."</p>
         <p id='texto' > 11.- Ha ingerido bebidas alcoholicas en las ultimas 8 hrs: ".$alcohol."</p>
         <p id='texto' > 12.- Esta embarazada o en periodo de lactancia   : ".$embarazo."</p><br><br>";
    

    
    
?>

