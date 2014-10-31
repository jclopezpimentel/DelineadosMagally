<?php
      include "plantilla-superior.php";
?>
<div id="contenido">
<div id="contenido2" class="letras">
<h1><center>Cuestionario</center></h1><br><br>

<form >
<table id="datosTabla">
<?php
include "http://delineadosmagally.com.mx/includes/datos.php";

$IdCliente=$ID;
$texto="";

$rs=mysql_query("select * from clientes where IdCliente="+$IdCliente,$con);
if($rs!=NULL){
    echo "<ul id='lista'>";
    while($clientes=mysql_fetch_array($rs)){
        $nombre=$clientes['Nombre'];
        $paterno=$clientes['ApellidoPaterno'];
        $materno=$clientes['ApellidoMaterno'];
        $celular=$clientes['Celular'];
        $edad=$clientes['Edad'];
        $ocupacion=$clientes['Ocupacion'];
        $servicio=$clientes['ServicioMedico'];       
    }
    }  
echo "'$IdCliente'<tr><td>Nombre(s)</td><td><input type='text' name='name' onkeypress='return Letras(event)' value='$nombre' required/></td></tr><tr></tr>
<tr><td>Apellido Paterno</td><td><input type='text'name='ApPa' onkeypress='return Letras(event)' value='$paterno' required/></td></tr><tr></tr>
<tr><td>Apellido Materno</td><td><input type='text' name='ApMa' onkeypress='return Letras(event)' value=$materno required/></td></tr><tr></tr>
<tr><td>Celular</td><td><input type='text'  name='nume'  onkeypress='return validar(event)' maxlength='10' value=$celular required/></td></tr><tr></tr>
<tr><td>Edad</td><td><input type='text' name='edad' onkeypress='return validar(event)' value=$edad required/></td></tr><tr></tr>
<tr><td>Ocupacion</td><td><input type='text' name='ocu' onkeypress='return Letras(event)' value=$ocupacion required/></td></tr><tr></tr>
<tr><td>Servicio medico</td><td><input type='text' name='ser' onkeypress='return Letras(event)' value=$servicio required/></td></tr><tr></tr>";

?>

</table>
<table>
<tr><td>1.- Le han practicado algún tatuaje, perforación o micropigmentación.:</td><td><SELECT NAME="1">
                        <OPTION VALUE="Si"> Si</OPTION>  
			<OPTION VALUE="No"> No</OPTION></select></td></tr><tr></tr><tr></tr><tr></tr>
<tr><td>2.- Le han realizado algún procedimiento dental (endodoncia).</td><td><SELECT NAME="2">
                        <OPTION VALUE="Si"> Si</OPTION>
			<OPTION VALUE="No"> No</OPTION></select></td></tr><tr></tr><tr></tr><tr></tr>
<tr><td>3.- Le han realizado alguna transfusión sanguínea en los últimos seis meses.</td><td><SELECT NAME="3">
                        <OPTION VALUE="Si"> Si</OPTION>
			<OPTION VALUE="No"> No</OPTION></select></td></tr><tr></tr><tr></tr><tr></tr>
<tr><td>4.- Tiene usted antecedentes de enfermedades, como:</td></tr><tr></tr><tr></tr><tr><td>

			<input name="box[]" type="checkbox" value="Diabetes">Diabetes
			<input name="box[]" type="checkbox" value="Cicatriz Queloide">Cicatriz Queloide
			<input name="box[]" type="checkbox" value="Cancér">Cancér
			<input name="box[]" type="checkbox" value="Conjutivitis">Conjutivitis
			<input name="box[]" type="checkbox" value="Hipertensión">Hipertensión
			<input name="box[]" type="checkbox" value="Epilepsia">Epilepsia
			<input name="box[]" type="checkbox" value="Hemofilia">Hemofilia
			<input name="box[]" type="checkbox" value="Herpes">Herpes
</td></tr><tr></tr><tr></tr>
<tr><td>5.- Tiene usted antecedentes de enfermedades trasmisibles como:</td></tr><tr></tr><tr></tr><tr></tr>
<tr><td>
			<input name="check[]" type="checkbox" value="Hepatitis">Hepatitis
			<input name="check[]" type="checkbox" value="Chancro">Chancro
			<input name="check[]" type="checkbox" value="Gonorrea">Gonorrea
			<input name="check[]" type="checkbox" value="Sifilis">Sifilis
			<input name="check[]" type="checkbox" value="VIH">VIH
</td></tr><tr></tr>
<tr><td>6.- Padece usted alguna alergia a sustancias, alimentos, medicamentos, anestésicos u otros.</td></tr><tr><td>

			<select name="6" onchange="toggle_ocupacion(this)">
   			<option value="No" >No</option>
   			<option value="Si" >Si</option>
			</select>
			<span id="cual6" style="display:none">
			<label for="cual">Cual?</label><input name="cual6" type="text" id="cual"/>
			</span></td></tr>


<tr><td>7.-Actualmente toma usted algún medicamento.</td></tr><tr><td>

			<select name="7" onchange="toggle_ocupacion2(this)">
   			<option value="No">No</option>
   			<option value="Si">Si</option>
			</select>
			<span id="cual7" style="display:none">
			<label for="cual">Cual?</label><input name="cual7" type="text" id="cual"/>
			</span></td></tr>

<tr><td>8. Consume usted alguna droga.</td></tr><tr><td>

			<select name="8" onchange="toggle_ocupacion3(this)">
   			<option value="No">No</option>
   			<option value="Si">Si</option>
			</select>
			<span id="cual8" style="display:none">
			<label for="cual">Cual?</label><input name="cual8" type="text" id="cual"/>
			</span></td></tr>


<tr></tr><tr></tr>
<tr><td>9.- Le han realizado alguna intervención quirurgica en los últimos seis meses.</td><td><SELECT NAME="9">
                        <OPTION VALUE="Si"> Si</OPTION> 
			<OPTION VALUE="No"> No</OPTION> </select></td></tr><tr></tr><tr></tr>
<tr><td>10.- Ha tomado alimentos en las últimas 4 horas.</td><td><SELECT NAME="10">
                        <OPTION VALUE="Si"> Si</OPTION> 
			<OPTION VALUE="No"> No</OPTION> </select></td></tr><tr></tr><tr></tr>
<tr><td>11.- Ha ingerido bebidas alcoholicas en las últimas 8 hrs.</td><td><SELECT NAME="11">
                        <OPTION VALUE="Si"> Si</OPTION> 
			<OPTION VALUE="No"> No</OPTION> </select></td></tr><tr></tr><tr></tr>
<tr><td>12.- Está embarazada o en periodo de lactancia.</td><td><SELECT NAME="12">
                        <OPTION VALUE="Si"> Si</OPTION> 
			<OPTION VALUE="No"> No</OPTION> </select></td></tr><tr></tr><tr></tr>

<tr><td><input type="submit" name="enviar" value="Enviar"/></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

</table>
</form>
    
    </div>  </div>    
</body>
</html>

