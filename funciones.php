<?php

$funcion=$_POST['funcion'];

    switch ($funcion){ 
	case '1':
    $cliente=$_POST['IdCliente'];
    getDates($cliente);
	break;
    
    case '2': 
    $boton=$_POST['nomBoton'];
    $servicio=$_POST['servicios'];
    if($boton==1){
        $boton="Guardar";
    }
    else{
        $boton="Enviar";
    }
    servicios($servicio,$boton);
    break;
    
    case '3':
    generarPDF();
    break;


}
function getDates($cliente){
    include "conexion.php";
    $rs=mysql_query("select IdCita,Fecha from citas where IdCliente=$cliente",$con);
    $texto="<input type='button' value='Agregar cita' Style='left:60px;' id='texto'> 
    <p id='texto'>Ver citas anteriores</p>";
    
    if($rs!=NULL){
        while($citas=mysql_fetch_array($rs)){
           $texto=$texto."<input type='button' value='".$citas['Fecha']."' id='".$citas['IdCita']."' onClick='holis(".$citas['IdCita'].")'/><br><br>";
        }
    }
    
    echo $texto;
}

function servicios($servicio,$boton){
  $delineados=["Ceja compacta","Ceja sombreada","Ceja pelo a pelo","Linea negra en parpado superior e inferior","Relleno entre pestañas superior e inferior (efecto pestaña)"
    ,"Relleno en area conjuntiva en ojos superior e inferior","Iluminacion o linea french","Perfilado de labios","Relleno de labios un solo tono o 3d"
    ,"Efecto rubor","Lunares"];	

    $correcciones=["Correccion en color ( negras, grises, rojas, azules, verdes)","Rediseño de los delineados en cejas ojos y labios"
    ,"Dermodespigmentacion en cejas y ojos","Despigmentacion y camuflaje en tatuajes","Corregimos cejas mal hechas"];
    $especiales=["Pigmentacion de areola y pezon","Rediseño de labios a personas con cirugia por labio leporino","Repoblacion capilar","Camuflaje de cicatrices"];
    $faciales=["Pigmentacion en areas con vitiligo (según piel y zona)","Tratamientos con colageno, elastina y acido hialuronico",
    "Tratamientos para eliminar lineas de expresion","Alternativas para la remoción de pigmentos mal implantados",
    "Eliminacion de manchas seniles, pecas, y por el sol","Eliminacion de milios y verrugas en rostro y cuello"];
	


if($servicio==1){    
    $texto="";
    for($x=0;$x<11;$x++){
        $texto.="<tr><td><input type='checkbox' id='texto'>$delineados[$x]</input></td></tr>";
    }
    $texto.="<tr><td></td><td><input type='button' value='$boton' id='texto' style='position: absolute; right:100px; '   /></td></tr>";
    echo $texto;
}
if($servicio==2){    
    $texto="";
    for($x=0;$x<5;$x++){
        $texto.="<tr><td><input type='checkbox' id='texto'>$correcciones[$x]</input></td></tr>";
    }
    $texto.="<tr><td></td><td><input type='button' value='$boton' id='texto' style='position: absolute; right:100px; '   /></td></tr>";
    echo $texto;
}
if($servicio==3){    
    $texto="";
    for($x=0;$x<4;$x++){
        $texto.="<tr><td><input type='checkbox' id='texto'>$especiales[$x]</input></td></tr>";
    }
    $texto.="<tr><td></td><td><input type='button' value='$boton' id='texto' style='position: absolute; right:100px; '   /></td></tr>";
    echo $texto;
}
if($servicio==4){    
    $texto="";
    for($x=0;$x<6;$x++){
        $texto.="<tr><td><input type='checkbox' id='texto'>$faciales[$x]</input></td></tr>";
    }
    $texto.="<tr><td></td><td><input type='button' value='$boton' id='texto' style='position: absolute; right:100px; '   /></td></tr>";
    echo $texto;
}

}

function historial($idCita){
    
}

function generarPDF(){
  
}

?>