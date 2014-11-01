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

<br/><br/>

	<form action="insertar2.php" method="POST" name="mi_formulario" onsubmit="return validar_clave()" >
		<table id="tableDatosPersonales">
			<?php

include "includes/conexion.php";
$IdCliente=$_GET['id'];
$texto="";


$rs=mysql_query("select * from clientes where IdCliente=$IdCliente and Eliminado=0",$con);
$total=mysql_num_rows($rs);
if($total>0){
    while($clientes=mysql_fetch_array($rs)){
        $nombre=urldecode($clientes['Nombre']);
        $paterno=urldecode($clientes['ApellidoPaterno']);
        $materno=urldecode($clientes['ApellidoMaterno']);
        $celular=$clientes['Celular'];
        $edad=$clientes['Edad'];
        
        $ocupacion=urldecode($clientes['Ocupacion']);
        
        $servicio=urldecode($clientes['ServicioMedico']);       
    }
    }
    
     
echo "
<input type='hidden' name='idCliente' value='$IdCliente'/>
<tr><td> Nombre(s)</td>
<td><input class='letras' type='text' name='name' onkeypress='return Letras(event)' value='$nombre' required/></td></tr>
<tr><td>Apellido Paterno</td>
<td><input class='letras' type='text'name='ApPa' onkeypress='return Letras(event)' value='$paterno' required/></td></tr>
<tr><td>Apellido Materno</td>

<td><input class='letras' type='text' name='ApMa' onkeypress='return Letras(event)' value=$materno required/></td></tr>
<tr><td>Celular:</td>
<td><input type='text'  class='letras' name='nume'  onkeypress='return validar(event)' maxlength='10' value=$celular required/></td></tr>
<tr><td>Edad</td>
<td><input type='text' class='letras' name='edad' onkeypress='return validar(event)' value=$edad required/></td></tr>
<tr><td>Ocupacion</td>
<td><input class='letras' type='text' name='ocu' onkeypress='return Letras(event)' value=$ocupacion required/></td></tr>
<tr><td>Servicio medico</td>
<td><input class='letras' type='text' name='ser' onkeypress='return Letras(event)' value=$servicio required/></td></tr>";

?>

			<tr>
				<td>Fecha (formato dia-mes-a&ntilde;o):</td>
				<td><input type="date" name="fecha"/></td>
			</tr>
		</table>
			<table id="tableCuestionario02">
				<tr>
					<td>1.- Le han practicado alg&uacute;n tatuaje, perforaci&oacute;n o micropigmentaci&oacute;n.:</td>
					<td>
						<select name="1">
	                    	<option value="Si"> Si</option>  
							<option value="No"> No</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>2.- Le han realizado alg&uacute;n procedimiento dental (endodoncia).</td>
					<td>
						<select name="2">
    	                    <option value="Si"> Si</option>
							<option value="No"> No</option>
						</select>
					</td>
				</tr>				
				<tr>
					<td>3.- Le han realizado alguna transfusi&oacute;n sangu&iacute;nea en los &uacute;ltimos seis meses.</td>
					<td>
						<select name="3">
	                        <option value="Si"> Si</option>
							<option value="No"> No</option>
						</select>
					</td>
				</tr>				
				<tr>
					<td>4.- Tiene usted antecedentes de enfermedades, como:</td>
				</tr>
				<tr>
					<td>
                    <?php
                    $IdCliente=$_GET['id'];
                    $query= mysql_query("SELECT MAX(IdCita) AS id FROM citas where IdCliente=$IdCliente");
                    if ($row = mysql_fetch_row($query)) {
                        $cita = trim($row[0]);
                    }
                    $rs = mysql_query("select Enfermedad from antecedentesenfermedades where IdCita=$cita",$con);
                    $total=mysql_num_rows($rs);
                    if($total>0){
                        $x=0;
                        while ($antEnf = mysql_fetch_array($rs)){
                        $ant[$x]= urldecode($antEnf['Enfermedad']);
                        $x++;
                        }
                    }
                    $antecedentes=array("Diabetes","Cicatriz Queloide","Cáncer","Conjuntivitis","Hipertensión","Epilepsia","Hemofilia","Herpes");
                    $antecedentes2=array("Diabetes","Cicatriz Queloide","C&aute;acncer","Conjuntivitis","Hipertensi&oacute;n","Epilepsia","Hemofilia","Herpes");
                    $cc=0;
                    for($x=0;$x<count($antecedentes);$x++){
                        if($cc<count($ant)){
                            if($ant[$cc]==$antecedentes[$x]){
                                echo "<input name='box[]' checked='checked' type='checkbox' value='$antecedentes[$x]'>$antecedentes2[$x]";
                                $cc++;
                            }else{
                                echo "<input name='box[]' type='checkbox' value='$antecedentes[$x]'>$antecedentes2[$x]";
                            }
                        }else{
                            echo "<input name='box[]' type='checkbox' value='$antecedentes[$x]'>$antecedentes2[$x]";
                        }        
                    }
                    ?>
						
					</td>
				</tr>
				<tr>
					<td>5.- Tiene usted antecedentes de enfermedades trasmisibles como:</td>
					</tr>				
				<tr>
					<td>
                    <?php
                    $transmitibles=array("Hepatitis","Chancro","Gonorrea","Sifilis","VIH");
     
                    $rs = mysql_query("select Enfermedad from enfermedadestransmitibles where IdCita=$cita",$con);
                    $total=mysql_num_rows($rs);
                    if($total>0){
                        $x=0;
                        while ($antEnf = mysql_fetch_array($rs)){
                        $enf[$x]= urldecode($antEnf['Enfermedad']);
                        $x++;
                        }
                    }
                    $cc=0;
                    for($x=0;$x<count($transmitibles);$x++){
                        if($cc<count($enf)){
                            if($ant[$cc]==$transmitibles[$x]){
                                echo "<input name='check[]' checked='checked' type='checkbox' value='$transmitibles[$x]'>$transmitibles[$x]";
                                $cc++;
                            }else{
                                echo "<input name='check[]' type='checkbox' value='$transmitibles[$x]'>$transmitibles[$x]";
                            }
                        }else{
                            echo "<input name='check[]' type='checkbox' value='$transmitibles[$x]'>$transmitibles[$x]";
                        }        
                    }
                    ?>
                    
						<input name="check[]" type="checkbox" value="Hepatitis">Hepatitis
						<input name="check[]" type="checkbox" value="Chancro">Chancro
						<input name="check[]" type="checkbox" value="Gonorrea">Gonorrea
						<input name="check[]" type="checkbox" value="Sifilis">Sifilis
						<input name="check[]" type="checkbox" value="VIH">VIH
					</td>
				</tr>
				<tr>
					<td>6.- Padece usted alguna alergia a sustancias, alimentos, medicamentos, anest&eacute;sicos u otros.</td>					
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
					<td>7.-Actualmente toma usted alg&uacute;n medicamento.</td>
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
					<td>9.- Le han realizado alguna intervenci&oacute;n quirurgica en los &uacute;ltimos seis meses.</td>
					<td>
						<select name="9">
	                        <option value="Si"> Si</option> 
							<option value="No"> No</option> 
						</select>
					</td>
				</tr>
				<tr>
					<td>10.- Ha tomado alimentos en las &uacute;ltimas 4 horas.</td>
					<td>
						<select name="10">
                        	<option value="Si"> Si</option> 
							<option value="No"> No</option> 
						</select>
					</td>
				</tr>
				<tr>
					<td>11.- Ha ingerido bebidas alcoholicas en las &uacute;ltimas 8 hrs.</td>
					<td>
						<select name="11">
	                        <option value="Si"> Si</option> 
							<option value="No"> No</option> 
						</select>
					</td>
				</tr>
				<tr>
					<td>12.- Est&aacute; embarazada o en periodo de lactancia.</td>
					<td>
						<select name="12">
                        	<option value="Si"> Si</option> 
							<option value="No"> No</option> 
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
				<td>Lunar o se&ntilde;as particulares</td>
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
				<td>Dermodespigmentaci&oacute;n</td>
				<td><input name="dermo" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Color</td>
				<td><input name="color" type="text" size="49"/></td>
			</tr>
			<tr>
				<td>Eliminaci&oacute;n de verrugas</td>
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

			<center><b>Inserta una imagen de antes</b><br/>
 			<input name="archivo" type="file" size="35" id="imagen"/>    <br/><br/>
  			<input name="visible" type="checkbox"/> visible <br/><br/>
			<output id="list">Foto</output> 
   <br/><br/><br/>
   Observaciones:
				<br/><textarea name="obs" cols="40" rows="6"></textarea>
	

</div>
<div class="white">
	<center><b>Inserta una imagen de despues</b><br/>
 			<input name="archivo2" type="file" size="35" id="imagen2"/>    <br/><br/>
  			<input name="visible" type="checkbox"/> visible <br/><br/>
			<output id="list2">Foto</output>
      <br/><br/><br/>
   Observaciones:
				<br/><textarea name="oser" cols="40" rows="6"></textarea>
	</center>
</div>

<br/>
<input class="letras" type="reset" name="cancelar" value="Cancelar"/>
    <input class="letras" type="submit" name="enviar" value="Guardar"/>
    
    
    <input name="action" type="hidden" value="upload" />  
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
