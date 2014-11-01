<?php


	
	if( isset($_POST["usuario"]) )
	{		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasenia"];
		if(validarUsuario($usuario,$password) == true)
		{					
			require_once("includes/sesion.class.php");
			$sesion = new sesion();
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
		include 'conexion.php';
	    $consulta = "select Contrasena from usuarios where Usuario = '$usuario'";
		$result = mysql_query($consulta);
		//$result = $con->query($consulta);
		if($result){
			//$num_rows = mysql_num_rows($result);
			
			if($row = mysql_fetch_assoc($result)){
				//$fila = $result->fetch_assoc();			
				if( strcmp($password,$row['Contrasena']) == 0 ){
					return true;						
				}else					
					return false;
			}else{
				return false;
			}	
		}else{
				return false;
		}
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
