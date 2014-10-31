<?php
include("includes/conexion.php");
try
{
$con = mysql_connect($host,$user,$pw)or die("Problema al conectar");
    mysql_select_db($db,$con)or die("Problema al conectar a la bd");
    $pre6 = $_POST['6'];
    $pre7 = $_POST['7'];
    $pre8 = $_POST['8'];
    $idCliente=$_POST['idCliente'];
    $fecha = $_POST['fecha'];
    mysql_query("update clientes set Edad=$_POST[edad] , Celular=$_POST[nume] , Ocupacion='".urlencode($_POST[ocu])."' , ServicioMedico='".urlencode($_POST[ser])."' where IdCliente=$idCliente ");
    mysql_query("INSERT INTO citas(IdCliente,Fecha) VALUES ($idCliente,'$fecha')",$con);
    

    
    $query= mysql_query("SELECT MAX(IdCita) AS id FROM citas");
    if ($row = mysql_fetch_row($query)) {
        $id = trim($row[0]);
    }
    

    mysql_query("INSERT INTO caracteristicasformula(IdCita,DesCabelloPiel,DesOjos,DesLunares,DesCejas,DesLabios,EfectoDelineado,Delineado,Aguja,DelCejas,DelOjos,DelLabios,Pigmento,Mezcla,Dermodespigmentacion,Color,ElimVerrugas,Anestesia,Observaciones) 
    VALUES ('$id','".urlencode($_POST[cabe])."','".urlencode($_POST[ojos])."','".urlencode($_POST[senas])."','".urlencode($_POST[ceja])."','".urlencode($_POST[labi])."','".urlencode($_POST[efecto])."','".urlencode($_POST[deli])."','".urlencode($_POST[aguja])."','".urlencode($_POST[ejas])."','".urlencode($_POST[pigme])."','".urlencode($_POST[ojopig])."','".urlencode($_POST[mezcla])."','".urlencode($_POST[labio])."','".urlencode($_POST[dermo])."','".urlencode($_POST[color])."','".urlencode($_POST[elime])."','".urlencode($_POST[anes])."','".urlencode($_POST[obser])."')",$con);
    $check = $_POST['box'];
    $check2 = $_POST['check'];
    for($i=0;$i<sizeof($check);$i++){
        $query = "INSERT INTO antecedentesenfermedades(IdCita,Enfermedad) VALUES('$id','".urlencode($check[$i])."')";
        mysql_query ($query,$con);
    }
    for($j=0;$j<sizeof($check2);$j++){
        $query = "INSERT INTO enfermedadestransmitibles(IdCita,Enfermedad) VALUES('$id','".urlencode($check2[$j])."')";
        mysql_query ($query,$con);
    }
    
    

    if ($pre6 == "Si" ){
        $pre6=urlencode($_POST['cual6']);
    }
    
    if ($pre7 == "Si" ){
        $pre7=urlencode($_POST['cual7']);
    }
    
    if ($pre8 == "Si" ){
        $pre8=urlencode($_POST['cual8']);
    }
    

    mysql_query("INSERT INTO historialcliente(IdCita,Tatuajes,Endodoncia,Transfusion,Alergias,Medicamentos,Drogas,IntervencionQuirurgica,Alimentos,Alcohol,Embarazo) VALUES 
    ('$id','$_POST[1]','$_POST[2]','$_POST[3]','$pre6','$pre7','$pre8','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]')",$con);


$status = "";
if ($_POST["action"] == "upload") {
    // obtenemos los datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
   
    if ($archivo != "") {
	    $destino =  "Images/images/".$prefijo;
	     
	if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            $status = "Archivo subido: <b>".$archivo."</b>";   
   if(isset($_POST['visible'])){ 
                        
                        $ver = 'visible';
                        $sql = "INSERT INTO fotosevidencia(Publicar, Path,IdCita) VALUES('$ver','$destino','$fe')";
                        $result = mysql_query($sql);
    }else{
              $ver = 'invisible';
                        $sql = "INSERT INTO fotosevidencia(Publicar, Path,IdCita) VALUES('$ver','$destino','$fe')";
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
  <script src="scripts/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="scripts/progress.js" type="text/javascript" charset="utf-8"></script>
  
</body>
</html>

