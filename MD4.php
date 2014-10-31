<br /><br /><br /><br /><br />
<div style="position:relative;float:left;width:100%;height: 100%;">
<?php include "includes/calendar.php" ?>
</div>
<form action='' method='post' id='formulario1'>
<table style="position:relative;float:left;width:100%;padding-bottom:60px;" > 


<tr><td ><p class='letras'>Agendar Cita:</p></td>
<td></td></tr>

<tr><td><p class='letras'>Fecha: </td>
<td><input type='date' name='fechaCitas' class='letras'/></td></tr>

<tr><td><p class='letras'>Nombre: </td>
<td><input type='text' size='20%' class='letras' onkeypress='return Letras(event)' required="required"/></p></td></tr>

<tr><td><p class='letras'>Correo electronico: </td>
<td><input type='text' size='20%' class='letras' required="required"/></p></td></tr>

<tr><td><p class='letras'>Tipo de servicio:  </p></td>
<td><select size='1' onchange='servicios(servicios3.id,this.value,2)' style='font-size: 17px;'>
<option >Servicios</option>
	<option value='1'>Delineados permanentes</option>
	<option value='2'>Correcciones</option>
	<option value='3'>Servicios especiales tratamientos paramedicos</option>
	<option value='4'>Tratamientos faciales con previa consulta para valoracion</option>
    
</select>
</td></tr>

<tr><td><p class='letras'>Servicios:  </td>
<td>

<table id="servicios3"  style='font-size: 17px; padding-bottom:60px;'>

</table>
   <input style="float:right;margin: 10px; " type='reset' onclick="servicios(servicios3.id,0)"  value='Borrar informaci&oacute;n'  class='letras'/> 
<input style="float:right;margin: 10px; " type='submit' value='Enviar' onclick='agendarCita(formularioAgendar.id)' class='letras'    />

</table>

</form>


    

	
         