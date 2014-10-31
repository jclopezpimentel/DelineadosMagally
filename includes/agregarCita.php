<?php
$IdCliente=$_POST['IdCliente'];
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
echo "<tr><td>Nombre(s)</td><td><input type='text' name='name' onkeypress='return Letras(event)' value=$nombre required/></td></tr><tr></tr>
<tr><td>Apellido Paterno</td><td><input type='text'name='ApPa' onkeypress='return Letras(event)' value=$paterno required/></td></tr><tr></tr>
<tr><td>Apellido Materno</td><td><input type='text' name='ApMa' onkeypress='return Letras(event)' value=$materno required/></td></tr><tr></tr>
<tr><td>Celular</td><td><input type='text'  name='nume'  onkeypress='return validar(event)' maxlength='10' value=$celular required/></td></tr><tr></tr>
<tr><td>Edad</td><td><input type='text' name='edad' onkeypress='return validar(event)' value=$edad required/></td></tr><tr></tr>
<tr><td>Ocupacion</td><td><input type='text' name='ocu' onkeypress='return Letras(event)' value=$ocupacion required/></td></tr><tr></tr>
<tr><td>Servicio medico</td><td><input type='text' name='ser' onkeypress='return Letras(event)' value=$servicio required/></td></tr><tr></tr>";

?>