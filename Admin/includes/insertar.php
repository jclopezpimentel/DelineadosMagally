<?php
include("../conexion.php");
try
{
$con = mysql_connect($host,$user,$pw)or die("Problema al conectar");
mysql_select_db($db,$con)or die("Problema al conectar a la bd");
$id=1;
$pre6 = $_POST['6'];
$pre7 = $_POST['7'];
$pre8 = $_POST['8'];
$pre61 = $_POST['cual6'];
$pre71 = $_POST['cual7'];
$pre81 = $_POST['cual8'];
/*echo ($pre6);
echo ($pre7);
echo ($pre8);
echo ($pre61);
echo ($pre71);
echo ($pre81);*/

mysql_query("INSERT INTO clientes(Nombre,ApellidoPaterno,ApellidoMaterno,Celular,Edad,Ocupacion,ServicioMedico) VALUES 
('$_POST[nom]','$_POST[ApPa]','$_POST[ApMa]','$_POST[nume]','$_POST[edad]','$_POST[ocu]','$_POST[ser]')");

$name=$_POST['nom'];
$ap = $_POST['ApPa'];
$am = $_POST['ApMa'];


$qry =mysql_query("SELECT IdCliente FROM clientes where Nombre='$name' AND ApellidoPaterno='$ap' AND ApellidoMaterno='$am'");
while ($f=mysql_fetch_array($qry)) {
	$wile = $f['IdCliente'];	
	//echo $f['IdCliente'];
}

//$fecha = date("Y-m-d");
$fecha = $_POST['fecha'];
//echo $fecha;

mysql_query("INSERT INTO citas(IdCliente,Fecha) VALUES ('$wile','$fecha')",$con);

$fec = $_POST['fecha'];

$qy =mysql_query("SELECT IdCita FROM citas where IdCliente='$wile' AND Fecha='$fec'");
while ($r=mysql_fetch_array($qy)) {
	$fe = $r['IdCita'];
	//echo $fe;
	//echo $f['IdCliente'];
}

try{
mysql_query("INSERT INTO caracteristicasformula(IdCita,DesCabelloPiel,DesOjos,DesLunares,DesCejas,DesLabios,EfectoDelineado,Delineado,Aguja,DelCejas,DelOjos,DelLabios,Pigmento,Mezcla,Dermodespigmentacion,Color,ElimVerrugas,Anestesia,Observaciones) 
VALUES ('$fe','$_POST[cabe]','$_POST[ojos]','$_POST[senas]','$_POST[ceja]','$_POST[labi]','$_POST[efecto]','$_POST[deli]','$_POST[aguja]','$_POST[ejas]','$_POST[pigme]','$_POST[ojopig]','$_POST[mezcla]','$_POST[labio]','$_POST[dermo]','$_POST[color]','$_POST[elime]','$_POST[anes]','$_POST[obser]')",$con);




$check = $_POST['box'];
$check2 = $_POST['check'];
for($i=0;$i<sizeof($check);$i++){
$query = "INSERT INTO antecedentesenfermedades(IdCita,Enfermedad) VALUES('$fe','".$check[$i]."')";
mysql_query ($query,$con);

}
//echo "<script>alert('DAtos insertados del 1for')</script>";
for($j=0;$j<sizeof($check2);$j++){
$query = "INSERT INTO enfermedadestransmitibles(IdCita,Enfermedad) VALUES('$fe','".$check2[$j]."')";
mysql_query ($query,$con);
}
//echo "<script>alert('DAtos insertados del 2for')</script>";





if ($pre6 == "Si" and $pre7 == "Si" and $pre8 == "Si" ){
/*echo "<script>alert('if');</script>";*/

mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
('$fe','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[cual6]','$_POST[cual7]','$_POST[cual8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);

}
elseif ($pre6 == "Si" and $pre7 == "No" and $pre8 == "Si" ) {
mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
('$fe','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[cual6]','$_POST[7]','$_POST[cual8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);
}
elseif ($pre6 == "Si" and $pre7 == "No" and $pre8 == "No" ) {
mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
('$fe','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[cual6]','$_POST[7]','$_POST[8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);
}

elseif ($pre6 == "Si" and $pre7 == "Si" and $pre8 == "No" ) {
mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
('$fe','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[cual6]','$_POST[cual7]','$_POST[8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);
}

elseif ($pre6 == "No" and $pre7 == "No" and $pre8 == "No" ) {
mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
('$fe','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[6]','$_POST[7]','$_POST[8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);
}
 
elseif ($pre6 == "No" and $pre7 == "Si" and $pre8 == "No" ) {
mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
('$fe','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[6]','$_POST[cual7]','$_POST[8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);
}

elseif ($pre6 == "No" and $pre7 == "No" and $pre8 == "Si" ) {
mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
('$fe','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[cual6]','$_POST[cual7]','$_POST[8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);
}

elseif ($pre6 == "No" and $pre7 == "Si" and $pre8 == "Si" ) {
mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
('$fe','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[cual6]','$_POST[7]','$_POST[8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);
}


$status = "";
if ($_POST["action"] == "upload") {
    // obtenemos los datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    //$archivo2 = $_POST["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
   //echo "<script>alert('antes de entrar')</script>";

    if ($archivo != "") {
	echo "<script>alert('Entro diferente')</script>";
        // guardamos el archivo a la carpeta files
        $destino =  "Images/images/".$prefijo."_".$archivo;
	//$ar= $_POST['archivo']['tmp_name'];	

	//echo "<script>alert('$ar')</script>";
        
	if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            $status = "Archivo subido: <b>".$archivo."</b>";   
  // echo "el archivo llamado ".$archivo."de tamano".$tamano."de tipo ".$tipo;
	echo "<script>alert('entro copy')</script>";
   if(isset($_POST['visible'])){ 
                        
                        $ver = 'visible';
                        $sql = "INSERT INTO fotosevidencia(Publicar, Path) VALUES('$ver','$destino')";
                        $result = mysql_query($sql);
    }else{
              $ver = 'invisible';
                        $sql = "INSERT INTO fotosevidencia(Publicar, Path) VALUES('$ver','$destino')";
                        $result = mysql_query($sql);
    
    }   
        } else {
            $status = "Error al subir el archivo";
		echo "<script>alert('Error else 1')</script>";
        }
    } else {
        $status = "Error al subir archivo";
	echo "<script>alert('Error else 2')</script>";
	
    }
    
}    


else{
echo "<script>alert('falso');</script>";
}


}catch (Exception $e){echo "<script>alert('catch');</script>";

}

//echo "<script>alert('datos insertados');document.location=('http://localhost/public_html/Admin/home.php?p=cuestionario');</script>";
}
catch(Exception $e){
echo "<script>alert('problema al insertar datos'.$e);document.location=('cuestionario.php');</script>";
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Insertando</title>
  
  <meta name="viewport" content="width=device-width">
  
  <link rel="stylesheet" href="Css/ui.css">
  <link rel="stylesheet" href="Css/ui.progress-bar.css">
  <link media="only screen and (max-device-width: 480px)" href="Css/ios.css" type="text/css" rel="stylesheet" />
</head>
<body>
  
  <div id="container">
   

    <!-- Progress bar -->
    <div id="progress_bar" class="ui-progress-bar ui-container">
      <div class="ui-progress" style="width: 79%;">
        <span class="ui-label" style="display:none;">Registrando datos <b class="value">79%</b></span>
      </div>
    </div>
    <!-- /Progress bar -->
    
    <div class="content" id="main_content" style="display: none;">
     <!-- <input type="submit" value="Aceptar" onclick="location.href='http://localhost/public_html/Admin/home.php?p=cuestionario'">-->
            
    </div>
  </div>
  <script src="JavaScript/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="JavaScript/progress.js" type="text/javascript" charset="utf-8"></script>
  
</body>
</html>

