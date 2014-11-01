<?php
$aviso = "";
// check form  
if ($_POST['email'] != "") {
	// email de destino
	$email = "magallydelineados@gmail.com";
	
	// asunto del email
	$subject = $_POST['asunto'];
	
	// Cuerpo del mensaje
	$mensaje.= "ASUNTO:   ".$_POST['asunto']."\n";
	$mensaje.= "NOMBRE:   ".$_POST['nombre']."\n";

	$mensaje.= "EMAIL:    ".$_POST['email']."\n";

	$mensaje.= "---------------------------------- \n\n";
	$mensaje.= $_POST['mensaje']."\n\n";
	$mensaje.= "---------------------------------- \n";

	
	// headers del email
	$headers = "From: ".$_POST['email']."\r\n";
	
	// Enviamos el mensaje
	if (mail($email, $subject, $mensaje, $headers)) {
		$aviso = "Su mensaje fue enviado";
	} else {
		$aviso = "Error de envío";
	}
}
?>



                <br><br>
<div id="textbox"><center><h1>Contactanos</h1>
<script language="JavaScript" src="JavaScript/funciones.js"></script> 
<?php if ($aviso != "") { ?>
<p><em><?php echo $aviso; ?></em></p>
<?php } ?>
<form action="" method="post">
    <table>
<tr><td><label for="nombres">Nombre: </label></td><td><input name="nombre" id="nombre" type="text" onkeypress="return soloLetras(event)" size="51" required/></tr>
<tr><td><label for="asunto">Asunto: </label></td><td><input name="asunto" id="asunto" type="text" onkeypress="return soloLetras(event)" size="51" required/></td></tr>
<tr><td><label for="email">Email: </label></td><td><input name="email" id="email" type="text" size="51" required/></td></tr>
<tr><td><label for="mensaje">Mensaje: </label></td><td><textarea name="mensaje" cols="50" rows="6" required></textarea></td></tr><tr><td></td><td>
<label for="btsend">&nbsp;</label> <button name="btsend" id="btsend" type="submit">Enviar</button></td></tr>
</table></form>
   </center>
   
  
   
</div>
<br><br>
<center>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15322.472676617232!2d-92.12035175495723!3d16.24005803593371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858d3f2b68a69b79%3A0x62af3ddddedb2f31!2sDel+Tule%2C+Los+Sabinos%2C+30039+Comit%C3%A1n+de+Dom%C3%ADnguez%2C+CHIS!5e0!3m2!1ses!2smx!4v1410391198849" width="550" height="250" frameborder="0" style="border:0"></iframe>

</center>
</div>



<pre>
 
 

 
 
  </pre>          <br><br><br><br><br><br><br><br><br><br><br><br>
        
      
