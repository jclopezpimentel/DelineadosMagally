
<?php

$calendario="oqvds46m0guvm9f35ceccdf2rs@group.calendar.google.com";
$titulo = utf8_encode(str_replace(" ","+","Cita de ".$_POST['nombre']));  
$descripcion = utf8_encode(str_replace(" ","+","Correo del paciente: ".$_POST['correo']." , los servicios a realizar son :".$_POST['servicios']));
$start=new DateTime($_POST['fecha'].' '.$_POST['inicio'].' '.date_default_timezone_get()); 
$end=new DateTime($_POST['fecha'].' '.$_POST['Fin'].' '.date_default_timezone_get()); 
$dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis"));
$gCalUrl = "https://www.google.com/calendar/render?action=TEMPLATE&text=$titulo&src=$calendario&dates=$dates&details=$descripcion&trp=false&sf=true&output=xml";
echo ($gCalUrl);

?>