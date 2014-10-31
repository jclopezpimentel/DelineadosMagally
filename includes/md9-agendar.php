<?php
echo"
<form action='' method='post' id='formularioAgendar'>
<table>
<tr><td width:'300'><p class='letras'>Agendar Cita:</p></td><td></td></tr>

<tr><td><br><p class='letras'>Fecha: </td><td>

<select size='1' class='letras' id='anios' onchange='dias(this.value,dias3.id,meses.value)'>
	
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

<select size='1' class='letras' id='meses' onchange='dias(anios.value,dias3.id,this.value)'>
	<option>Mes</option>
	<option value='1'>Enero</option>
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

<select size='1' id='dias3' class='letras'>
    
</select></p></td></tr>

<tr><td><br><p class='letras'>Nombre: </td><td><input type='text' size='20%' class='letras' onkeypress='return Letras(event)' required/></p></td></tr>
<tr><td><br><p class='letras'>Correo electronico: </td><td><input type='text' size='20%'' class='letras' required/></p></td></tr>

<tr><td><br><p class='letras'>Tipo de servicio:  </td><td>
<select size='1' onchange='servicios(servicios3.id,this.value,2)' style='font-size: 17px;'>
<option >Servicios</option>
	<option value='1'>Delineados permanentes</option>
	<option value='2'>Correcciones</option>
	<option value='3'>Servicios especiales tratamientos paramedicos</option>
	<option value='4'>Tratamientos faciales con previa consulta para valoracion</option>
    
</select>
</p></td></tr>

<tr><td><br><p class='letras'>Servicios:  </td>
<td ></td></tr>
</table>
<table id='servicios3' style='font-size: 17px; padding-bottom:60px;' >

</table>


</form>

   ";
?>




