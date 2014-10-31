
<form id='formularioAgendar' action="" onsubmit="return false">
<p class='letras'>  Agregar eventos al calendario:</p>
<table>
<tr><td ></td> <td></td></tr>

<tr><td><p class='letras'>Nombre del paciente*: </p></td>
<td><input type='text' size='20%' class='letras' id="nombre" onkeypress='return Letras(event)' required="required"/></td></tr>

<tr><td><p class='letras'>Correo electronico del paciente*: </p></td>
<td><input type='text' value="@" size='20%' class='letras' id="correo" required="required"/></td></tr>

<tr><td><p class='letras'>Fecha de cita (aaaa-mm-dd)*: </p></td>
<td><input type='date' id='fecha' onclick="return fechaActual(this.id)"  onkeypress="return fechaActual2(this.id)" class='letras' required="required"/></td></tr>

<tr><td><p class='letras'>Hora de cita(hh:mm)*: </p></td>
<td><input type='time' id="horaInicio2" class='letras' required="required"/> </td>
</tr>

<tr>
<td><p class='letras'>Comentarios(opcional): </p></td>
<td><textarea id="comentario" maxlength='1000' style='width: 60%;' ></textarea></td>
</tr>

<tr><td><p class='letras'>Tipo de servicio:  </p></td>
<td>
<select size='1' onchange='servicios(servicios3.id,this.value)' style='font-size: 17px;'>
<option >Servicios</option>
	<option value='1'>Delineados permanentes</option>
	<option value='2'>Correcciones</option>
	<option value='3'>Servicios especiales tratamientos paramedicos</option>
	<option value='4'>Tratamientos faciales con previa consulta para valoracion</option>
    
</select>
</td></tr>

<tr><td><p class='letras'>Servicios:  </p></td>
<td >  </td></tr>
</table>

<table id='servicios3' style='font-size: 17px; ' >

</table>

<input style="float:right;margin: 10px; " type='reset' onclick="servicios(servicios3.id,0)" id="resetear" value='Borrar informaci&oacute;n'  class='letras'/> 
<input style="float:right;margin: 10px; " type='submit' value='Guardar' onclick='agendarCita(formularioAgendar.id)' class='letras'    />
</form>



