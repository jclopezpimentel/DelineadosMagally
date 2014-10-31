<?php

$resultado=$_POST['calendario'];
include "conexion.php";
$rs=mysql_query("select mostrar from calendario",$con);
$datos=mysql_fetch_array($rs);
if($datos['mostrar']==1){
  echo " <iframe  id='calendar' src='https://www.google.com/calendar/embed?showPrint=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23F1FCDD&amp;src=oqvds46m0guvm9f35ceccdf2rs%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FMexico_City' style=' border-width:0;position: relative;' width='100%' height='100%' frameborder='0' scrolling='no'></iframe> ";
  

}
else{
    echo "";
}



?>