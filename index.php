<?php

$pagina = basename($_SERVER['QUERY_STRING']);
//$pagina =$_GET['op'];


?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <title>Delineados Magally</title>
 	
	<link rel="stylesheet" href="Css/style.css">
<link rel="stylesheet" href="Css/style22.css">
  <link rel="stylesheet" href="Css/estilos.css">
  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>      
   <script type="text/javascript" src="engine1/javascript.js"></script>
   <!--<script type="text/javascript" src="JavaScript/funcionn.js"></script>-->
   


    <script>
    function cambiar(esto)
{
	vista=document.getElementById(esto).style.display;
	if (vista=='none')
		vista='block';
	else
		vista='none';

	document.getElementById(esto).style.display = vista;
}
    </script>
  
</head>
<body>
	<div class="caja">
	 <?php

include ('cabecera.php');

?>

	<div id="cuerpo">
 <?php

if ($pagina == null)
{
    $pagina = "default";
}

if (file_exists($pagina . '.php'))
{
    include ($pagina . '.php');
} else
{
    echo ('¡Esa página no existe!');
}

?>
</div>	

 
<?php

include ('pie.php');

?>	
</div>
</body>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<br><br>
</html>
