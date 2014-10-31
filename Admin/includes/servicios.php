<?php

$servicio=$_POST['servicios'];
$delineados=array("Ceja compacta","Ceja sombreada","Ceja pelo a pelo","Linea negra en parpado superior e inferior","Relleno entre pesta&ntilde;as superior e inferior (efecto pesta&ntilde;a)"
    ,"Relleno en area conjuntiva en ojos superior e inferior","Iluminaci&oacute;n o linea french","Perfilado de labios","Relleno de labios un solo tono o 3d"
    ,"Efecto rubor","Lunares");	
   $correcciones=array("Correcci&oacute;n en color ( negras, grises, rojas, azules, verdes)","Redise&ntilde;o de los delineados en cejas ojos y labios"
    ,"Dermodespigmentaci&oacute;n en cejas y ojos","Despigmentaci&oacute;n y camuflaje en tatuajes","Corregimos cejas mal hechas");
    $especiales=array("Pigmentaci&oacute;n de areola y pezon","Redise&ntilde;o de labios a personas con cirugia por labio leporino",
    "Repoblaci&oacute;n capilar","Camuflaje de cicatrices");
    $faciales=array("Pigmentaci&oacute;n en &aacute;reas con vitiligo (seg&uacute;n piel y zona)","Tratamientos con colageno, elastina y acido hialuronico",
    "Tratamientos para eliminar lineas de expresi&oacute;n","Alternativas para la remoci&oacute;n de pigmentos mal implantados",
    "Eliminaci&oacute;n de manchas seniles, pecas, y por el sol","Eliminaci&oacute;n de milios y verrugas en rostro y cuello"); 
   
    if($servicio==1){    
    $texto="";
    for($x=0;$x<11;$x++){
        $texto.="<tr><td><input type='checkbox' name='checkbox' id='$delineados[$x]' class='letras'>$delineados[$x]</input></td></tr>";
    }
    echo $texto;
    }
    if($servicio==2){    
    $texto="";
    for($x=0;$x<5;$x++){
        $texto.="<tr><td><input type='checkbox' name='checkbox' id='$correcciones[$x]' class='letras'>$correcciones[$x]</input></td></tr>";
    }
    echo $texto;
}
if($servicio==3){    
    $texto="";
    for($x=0;$x<4;$x++){
        $texto.="<tr><td><input type='checkbox' name='checkbox' id='$especiales[$x]' class='letras'>$especiales[$x]</input></td></tr>";
    }
    echo $texto;
}
if($servicio==4){    
    $texto="";
    for($x=0;$x<6;$x++){
        $texto.="<tr><td><input type='checkbox' name='checkbox' id='$faciales[$x]' class='letras'>$faciales[$x]</input></td></tr>";
    }
      echo $texto;
}

?>