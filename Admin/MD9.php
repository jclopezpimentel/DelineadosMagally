 <?php
	require_once("includes/sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: index.php");		
	}
	else 
	{

?>

<br /><p class="letras"><input  type="checkbox" id="mostrar" onclick="if(this.checked == true){AparecerDesaparecer(this.id,0)} else{AparecerDesaparecer(this.id,1)}" />No mostrar calendario</p>   
<iframe  id='calendar' src='https://www.google.com/calendar/embed?showPrint=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23F1FCDD&amp;src=oqvds46m0guvm9f35ceccdf2rs%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FMexico_City' style=' border-width:0;position: relative;' width='100%' height='100%' frameborder='0' scrolling='no'></iframe> 


<table style="border-spacing: #FFF9F9;position:relative;float:left;width:100%;"> 

<tr style="height: auto;"><td style="border:1px solid;padding:13px 3px;">
<?php
include "includes/md9-agendar.php";
?>
<tr><td>
<br /></td></tr>
</td></tr>
<tr style="height: auto;"><td style="border:1px solid;padding:13px 3px;">
<?php
include "includes/md9-cancelar.php";
?>


</td></tr>
</table>

<?php 
	}	
?>
