<?php
	require_once("includes/sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasenia"];
		
		if(validarUsuario($usuario,$password) == true)
		{			
			$sesion->set("usuario",$usuario);
			
			header("location: home.php");
		}
		else 
		{
			echo "<script>alert('Usuario o Contraseña incorrecto')</script>";
		}
	}
	
	function validarUsuario($usuario, $password)
	{
		$conexion = new mysqli("localhost","delinead_magally","Magally2014","delinead_magally");
		$consulta = "select Contrasena from usuarios where Usuario = '$usuario';";
		
		$result = $conexion->query($consulta);
		
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["Contrasena"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
	}

?>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="Css/styles.css">
</head>

<body>
<div id="caja">
<div id="bajar"> 
<form name="frmLogin" class="login" action="index.php" method="POST">

	<label><center>Bienvenido</center></label><br>
   <div> <label>Usuario: </label> <input type="text" name = "usuario" required/></div>
    <div><label>Contraseña: </label> <input type="password" name = "contrasenia" required/></div>
    <div><input type="submit" name ="iniciar" value="Iniciar Sesion"/></div>

</form>
</div>
</div>
</body>
</html>
