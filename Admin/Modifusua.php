<?php
include("conexion.php");
require_once("sesion.class.php");
$sesion = new sesion();
$usuario = $sesion->get("usuario");
$nue = $_POST['nuevacontra'];

echo "<script>alert('$nue')</script>";
try{
mysql_query("UPDATE usuarios SET Contrasena='$nue' WHERE Usuario='$usuario'",$con);

}catch (Exception $e){
 echo "<script>alert('error')</script>";
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
  <script src="scripts/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="scripts/progress.js" type="text/javascript" charset="utf-8"></script>
  
</body>
</html>
