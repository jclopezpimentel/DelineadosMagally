<?php


$para = $_POST['correo'];
$titulo = utf8_encode("cancelaci�n de cita Delineados Magally");
$mensaje = $_POST['nombre'].' con cita: '.$_POST['fecha']."  ".$_POST['inicio'].",".$_POST['comentarios']; //Mensaje de 2 lineas
$cabeceras = 'From: webmaster1@midominio.com' . "\r\n" . //La direccion de correo desde donde supuestamente se envi�
    'Reply-To: webmaster2@midominio.com' . "\r\n" . //La direccion de correo a donde se responder� (cuando el recepto haga click en RESPONDER)
    'X-Mailer: PHP/' . phpversion();  //informaci�n sobre el sistema de envio de correos, en este caso la version de PHP
 try{
    mail($para, $titulo, $mensaje, $cabeceras);
    echo "listo";
 }catch(Exception $e){
    echo "Ocurrio un error";
 }


?>