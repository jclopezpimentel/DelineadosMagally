
<form id='formularioCancelar' action="" onsubmit="return false">
<p class='letras'>Cancelar Cita:</p>
<table>

<tr><td><p class='letras'>Fecha de cita (aaaa-mm-dd)*: </p></td>
<td><input type='date' id='fecha2' onclick="return fechaActual(this.id)"  onkeypress="return fechaActual2(this.id)" class='letras' required="required"/></td></tr>

<tr><td><p class='letras'>Hora de cita(hh:mm)*: </p></td>
<td><input type='time' id="horaInicio2" class='letras' required="required"/> </td>
</tr>

<tr>
<td><p class='letras'>Nombre*: </p></td>
<td><input type='text' size='20%' class='letras' id="nombre2" onkeypress='return Letras(event)' required="required"/></td>
</tr>

<tr>
<td><p class='letras'>Correo electronico*: </p></td>
<td><input type='text' size='20%' value="@" class='letras' id="correo2" required="required"/></td>
</tr>

<tr>
<td><p class='letras'>Comentario:</p></td>
<td><textarea   maxlength='1000'  id="comentarios2"></textarea> </td>
</tr>

</table>
<input style="float:right;margin: 10px; " type='reset' id="resetear2" value='Borrar informaci&oacute;n'  class='letras'/> 
<input style="float:right;margin: 10px; " type='submit' value='Enviar' onclick='cancelarCita(formularioCancelar.id)' class='letras'    />
</form>


