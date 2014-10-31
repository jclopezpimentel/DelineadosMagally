<?php
echo"
<form id='formularioCancelar'>
<p class='letras'>Cancelar Cita:</p>
<table>
<tr><td><p class='letras'>Fecha: </td>

<td><select size='1' class='letras' id='anios2' onchange='dias(this.value,dias2.id,meses2.value)'>
	
    <option value='0'>A&ntilde;o</option>
	<option value='2014'>2014</option>
	<option value='2015'>2015</option>
    <option value='2016'>2016</option>
	<option value='2017'>2017</option>
    <option value='2018'>2018</option>
	<option value='2019'>2019</option>
    <option value='2020'>2020</option>
	<option value='2021'>2021</option>
</select>

<select size='1' class='letras' id='meses2' onchange='dias(anios2.value,dias2.id,this.value)'>
	<option>Mes</option>
	<option value=1>Enero</option>
	<option value=2>Febrero</option>
    <option value=3>Marzo</option>
     <option value=4>Abril</option>
      <option value=5>Mayo</option>
      <option value=6>Junio</option>
       <option value=7>Julio</option>
        <option value=8>Agosto</option>
         <option value=9>Septiembre</option>
          <option value=10>Octubre</option>
           <option value=11>Noviembre</option>
            <option value=12>Diciembre</option>
</select>

<select size='1' id='dias2' style='font-size: 20px;' >
</select></p></td></tr>
<tr><td></td><td></td></tr>

<tr><td><p class='letras'>Nombre: </td><td><input type='text' size='20%'' class='letras' onkeypress='return Letras(event)' required/></p></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><p class='letras'>Correo electronico: </td><td><input type='text' size='20%'' class='letras' onkeypress='return Letras(event)' required/></p></td></tr>
<br><br>

<tr><td><p class='letras'>Comentario:</td><td><textarea   maxlength='1000' style='width: 60%;' onkeypress='return Letras(event)' required ></textarea> </p></td></tr>
<tr><td></td><td></td></tr><tr><td></td><td></td></tr>

<tr><td></td><td><input type='submit' value='Guardar' class='letras' style='position: relative; left:100px; '/></td></tr></table>

</form>
";
?>