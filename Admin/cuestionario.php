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
	<h2>Cuestionario</h2>
</center>
<br><br>

	<form action="insertar.php" method="POST" name="mi_formulario" onSubmit="return validar_clave()" enctype="multipart/form-data">
		<table id="tableDatosPersonales">
			<tr>
				<td>Nombre(s)</td>
				<td><input type="text" name="nom" onkeypress="return soloLetras(event)" required/></td>
			</tr>
			<tr>
				<td>Apellido Paterno</td>
				<td><input type="text" name="ApPa" onkeypress="return soloLetras(event)" required/></td>
			</tr>
				<tr>
					<td>Apellido Materno</td>
					<td><input type="text" name="ApMa" onkeypress="return soloLetras(event)" required/></td>
				</tr>
    <tr>
				<td>Fecha de nacimiento(dia-mes-a&ntilde;o):</td>
				<td><input type="date" name="naci"/></td>
			</tr>
			<tr>
				<td>Celular</td>
				<td><input type="text"  name="nume"  onkeypress="return validar(event)" maxlength="10" required/></td>
			</tr>
			<tr>
				<td>Edad</td>
				<td><input type="text" name="edad" onkeypress="return validar(event)" required/></td>
			</tr>
			<tr>
				<td>Ocupacion</td>
				<td><input type="text" name="ocu" onkeypress="return soloLetras(event)" required/></td>
			</tr>
			<tr>
				<td>Servicio medico</td>
				<td><input type="text" name="ser" onkeypress="return soloLetras(event)" required/></td>
			</tr>
			<tr>
				<td>Fecha (formato dia-mes-a&ntilde;o):</td>
				<td><input type="date" name="fecha" id='fecha2' onclick="return fechaActual(this.id)"  onkeypress="return fechaActual2(this.id)"/></td>
			</tr>
		</table>
			<table id="tableCuestionario02">
				<tr>
					<td>1.- Le han practicado algún tatuaje, perforación o micropigmentación.:</td>
					<td>
						<select NAME="1">
	                    	<OPTION VALUE="Si"> Si</OPTION>  
							<OPTION VALUE="No"> No</OPTION>
						</select>
					</td>
				</tr>
				<tr>
					<td>2.- Le han realizado algún procedimiento dental (endodoncia).</td>
					<td>
						<SELECT NAME="2">
    	                    <OPTION VALUE="Si"> Si</OPTION>
							<OPTION VALUE="No"> No</OPTION>
						</select>
					</td>
				</tr>				
				<tr>
					<td>3.- Le han realizado alguna transfusión sanguínea en los últimos seis meses.</td>
					<td>
						<SELECT NAME="3">
	                        <OPTION VALUE="Si"> Si</OPTION>
							<OPTION VALUE="No"> No</OPTION>
						</select>
					</td>
				</tr>				
				<tr>
					<td>4.- Tiene usted antecedentes de enfermedades, como:</td>
				</tr>
				<tr>
					<td>
						<input name="box[]" type="checkbox" value="Diabetes">Diabetes
						<input name="box[]" type="checkbox" value="Cicatriz Queloide">Cicatriz Queloide
						<input name="box[]" type="checkbox" value="Cancér">Cancér
						<input name="box[]" type="checkbox" value="Conjutivitis">Conjutivitis
						<input name="box[]" type="checkbox" value="Hipertensión">Hipertensión
						<input name="box[]" type="checkbox" value="Epilepsia">Epilepsia
						<input name="box[]" type="checkbox" value="Hemofilia">Hemofilia
						<input name="box[]" type="checkbox" value="Herpes">Herpes
					</td>
				</tr>
				<tr>
					<td>5.- Tiene usted antecedentes de enfermedades trasmisibles como:</td>
					</tr>				
				<tr>
					<td>
						<input name="check[]" type="checkbox" value="Hepatitis">Hepatitis
						<input name="check[]" type="checkbox" value="Chancro">Chancro
						<input name="check[]" type="checkbox" value="Gonorrea">Gonorrea
						<input name="check[]" type="checkbox" value="Sifilis">Sifilis
						<input name="check[]" type="checkbox" value="VIH">VIH
					</td>
				</tr>
				<tr>
					<td>6.- Padece usted alguna alergia a sustancias, alimentos, medicamentos, anestésicos u otros.</td>					
				</tr>
				<tr>
					<td>
						<select name="6" onchange="toggle_ocupacion(this)">
   							<option value="No" >No</option>
				   			<option value="Si" >Si</option>
						</select>
						<span id="cual6" style="display:none">
							<label for="cual">Cual?</label><input name="cual6" type="text" id="cual"/>
						</span>
					</td>
				</tr>
				<tr>
					<td>7.-Actualmente toma usted algún medicamento.</td>
				</tr>
				<tr>
					<td>
						<select name="7" onchange="toggle_ocupacion2(this)">
   							<option value="No">No</option>
				   			<option value="Si">Si</option>
						</select>
						<span id="cual7" style="display:none">
							<label for="cual">Cual?</label><input name="cual7" type="text" id="cual"/>
						</span>
					</td>
				</tr>
				<tr>
					<td>8. Consume usted alguna droga.</td>
				</tr>
				<tr>
					<td>
						<select name="8" onchange="toggle_ocupacion3(this)">
   							<option value="No">No</option>
				   			<option value="Si">Si</option>
						</select>
						<span id="cual8" style="display:none">
							<label for="cual">Cual?</label><input name="cual8" type="text" id="cual"/>
						</span>
					</td>
				</tr>
				<tr>
					<td>9.- Le han realizado alguna intervención quirurgica en los últimos seis meses.</td>
					<td>
						<SELECT NAME="9">
	                        <OPTION VALUE="Si"> Si</OPTION> 
							<OPTION VALUE="No"> No</OPTION> 
						</select>
					</td>
				</tr>
				<tr>
					<td>10.- Ha tomado alimentos en las últimas 4 horas.</td>
					<td>
						<SELECT NAME="10">
                        	<OPTION VALUE="Si"> Si</OPTION> 
							<OPTION VALUE="No"> No</OPTION> 
						</select>
					</td>
				</tr>
				<tr>
					<td>11.- Ha ingerido bebidas alcoholicas en las últimas 8 hrs.</td>
					<td>
						<SELECT NAME="11">
	                        <OPTION VALUE="Si"> Si</OPTION> 
							<OPTION VALUE="No"> No</OPTION> 
						</select>
					</td>
				</tr>
				<tr>
					<td>12.- Está embarazada o en periodo de lactancia.</td>
					<td>
						<SELECT NAME="12">
                        	<OPTION VALUE="Si"> Si</OPTION> 
							<OPTION VALUE="No"> No</OPTION> 
						</select>
					</td>			
				</tr>
</table>


<table id="tableCuestionario3" name="table3">
			<tr>
				<td colspan="2"><b>CARACTERISTICAS FACIALES Y FORMULA DE PIGMENTO Y MATERIAL</b></td>
			</tr>			
			<tr>
				<td>Cabello y piel</td>
				<td><input name="cabe" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Ojos</td>
				<td><input type="text" name="ojos" size="49"/></td>
			</tr>
			<tr>				
				<td>Lunar o señas particulares</td>
				<td><input name="senas" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Cejas</td>
				<td><input name="ceja" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Labios</td>
				<td><input name="labi" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Efecto en delineado</td>
				<td><input name="efecto" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Delineado de</td>
				<td><input name="deli" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Aguja</td>
				<td><input name="aguja" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Cejas</td>
				<td><input name="ejas" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Pigmento Utilizado</td>
				<td><input name="pigme" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Ojos</td>
				<td><input name="ojopig" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Mezcla</td>
				<td><input name="mezcla" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Labios</td>
				<td><input name="labio" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Dermodespigmentación</td>
				<td><input name="dermo" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Color</td>
				<td><input name="color" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Eliminación de verrugas</td>
				<td><input name="elime" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Anestecia</td>
				<td><input name="anes" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Observaciones</td>
				<td><textarea name="obser" cols="68" rows="6"></textarea></td>
			</tr>			
				
</table>
<div class="black">
			<center><b>Inserta una imagen de antes</b><br>
 			<input name="archivo" type="file" size="35" id="imagen"/>    <br><br>
  			<input name="visible" type="checkbox"/> visible <br><br>
			<output id="list">Foto</output> 
   <br><br><br>
   Observaciones:
				<br><textarea name="obs" cols="40" rows="6"></textarea>
	</center>

</div>
<div class="white">
	<center><b>Inserta una imagen de despues</b><br>
 			<input name="archivo2" type="file" size="35" id="imagen2"/>    <br><br>
  			<input name="visible" type="checkbox"/> visible <br><br>
			<output id="list2">Foto</output>
      <br><br><br>
   Observaciones:
				<br><textarea name="oser" cols="40" rows="6"></textarea>
	</center>
</div>

<br>

    <input class="button small orange" type="submit" name="enviar" value="Guardar"/>
    <input name="action" type="hidden" value="upload" />  
    <input class="button small orange" type="button" onclick="location.href='home.php'" value="Cancelar"/>
</form>   

<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" width="150px" height="150px" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('imagen').addEventListener('change', archivo, false);
      </script>

<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list2").innerHTML = ['<img class="thumb" width="150px" height="150px" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('imagen2').addEventListener('change', archivo, false);
      </script>


<?php 
	}	
?>
