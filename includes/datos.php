
<?php
session_start(); //Iniciamos o Continuamos la sesion
$id=$_POST['IdCliente'];
$_SESSION['IdCliente'] = $id; //Nickname Grabado


echo $_SESSION['IdCliente'];
?>
