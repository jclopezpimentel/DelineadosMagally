<?php
//defino una clase para los elementos del campo autocompletar
class ElementoAutocompletar {
   //propiedades de los elementos
   var $value;
   var $label;
   
   //constructor que recibe los datos para inicializar los elementos
   function __construct($label, $value){
      $this->label = $label;
      $this->value = $value;
   }
}
//recibo el dato que deseo buscar sugerencias
$datoBuscar = $_POST["term"];
//defino un array con varios elementos objetos de la clase anterior
include "conexion.php";
$rs=mysql_query("select IdCliente,Nombre,ApellidoPaterno,ApellidoMaterno from clientes where Nombre like '%" . $datoBuscar . "%' ",$con);
$array=array();
$texto="";
if($rs!=NULL){
    $texto= "<ul id='lista'>";
    while($clientes=mysql_fetch_array($rs)){
        $nombre=$clientes['Nombre'];
        $paterno=$clientes['ApellidoPaterno'];
        $materno=$clientes['ApellidoMaterno'];
        $idCliente=$clientes['IdCliente'];
       $texto.="<li class='letras' id='$idCliente' onclick='mostrarCitas($idCliente)'  style='cursor:pointer;'><p>".$nombre." ".$paterno." ".$materno."</p></li>
       ";              
    }
    $texto.= "</ul>";      
    }
    
    echo $texto;

?>