<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: http://www.delineadosmagally.com.mx/Admin/");		
	}
	else 
	{


	  
require('FPDF/fpdf.php');
include 'conexion.php';
class PDF extends FPDF
{
//Cabecera de página
   function Header()
   {
    $this->Image("FPDF/Images/cabecera.png" , 10 ,8, 200);
    
   }
   
   
   
   function PrimerHoja($antEnf,$enf,$fetch,$datos)
   {  $nombre=$fetch['Nombre'];
      $this->SetFont('Arial','',16);
      $this->Cell(180,7,"Cuestionario",0,0,C);
      $this->Ln(15);
      $this->SetFont('Arial','',11);
      $this->Cell(20,7,"Nombre:",0);
      $this->Cell(110,7,utf8_decode(urldecode($nombre))." ".utf8_decode(urldecode($fetch['ApellidoPaterno']))." ".utf8_decode(urldecode($fetch['ApellidoMaterno'])),B);
      $this->Cell(17,7,"Celular: ",2);
      $this->Cell(29,7,$fetch['Celular'],B);
      $this->Ln();
      $this->Cell(15,7,"Edad : ",2);
      $this->Cell(10,7,$fetch['Edad'],B);
      $this->Cell(23,7,"Ocupación : ",2);
      $this->Cell(55,7,utf8_decode(urldecode($fetch['Ocupacion'])),B);
      $this->Cell(32,7,"Servicio Medico: ",2);
      $this->Cell(55,7,utf8_decode(urldecode($fetch['ServicioMedico'])),B);
      $this->Ln();
      $this->Cell(40,7,"1.- Le han practicado algún tatuaje, perforación o micropigmentación: ".$fetch['Tatuajes'],2);$this->Ln();
      $this->Cell(40,7,"2.- Le han realizado algun procedimiento dental (endodoncia): ".$fetch['Endodoncia'],2);$this->Ln();
      $this->Cell(40,7,"3.- Le han realizado alguna transfusion sanguinea en los ultimos seis meses: ".$fetch['Transfusion'],2);$this->Ln();
      $this->Cell(40,7,"4.- Tiene usted antecedentes de enfermedades,como: ",2);
      $this->Ln();
      				
      $antecedentes=array("Diabetes","Cicatriz Queloide","Cáncer","Conjuntivitis","Hipertensión","Epilepsia","Hemofilia","Herpes");
      $cc=0;
      for($x=0;$x<count($antecedentes);$x++){
        if($cc<count($antEnf)){
            if($antEnf[$cc]==$antecedentes[$x]){
                $this->Cell(5,5,"x",1);
                $this->Cell(40,7,utf8_decode(urldecode($antecedentes[$x])),2);
                $cc++;
            }else{
                $this->Cell(5,5,"",1);
                $this->Cell(40,7,utf8_decode(urldecode($antecedentes[$x])),2);
            }
        
            if($x==3){
                $this->Ln();
            }
        }else{
            $this->Cell(5,5,"",1);
                $this->Cell(40,7,utf8_decode(urldecode($antecedentes[$x])),2);
            if($x==3){
                $this->Ln();
            }
        }        
      }
      
      $this->Ln();
      $this->Cell(40,7,"5.- Tiene usted antecedentes de enfermedades trasmisibles como: ",2);
      $this->Ln();
      $transmitibles=array("Hepatitis","Chancro","Gonorrea","Sifilis","VIH");
      $cc=0;
      for($x=0;$x<count($transmitibles);$x++){
        if($cc<count($enf)){
            if($enf[$cc]==$transmitibles[$x]){
                $this->Cell(5,5,"x",1);
                $this->Cell(30,7,$transmitibles[$x],2);
                $cc++;
            }else{
                $this->Cell(5,5,"",1);
                $this->Cell(30,7,$transmitibles[$x],2);
            }
        }else{
            $this->Cell(5,5,"",1);
            $this->Cell(30,7,$transmitibles[$x],2);
        }        
      }
      $this->Ln();
      $this->Cell(40,7,"6.-Padece usted alguna alergia a sustancias, alimentos, medicamentos, anestesicos u otros: ".utf8_decode(urldecode($fetch['Alergias'])),2);
      $this->Ln();
      $this->Cell(40,7,"7.-Actualmente toma usted algun medicamento: ".utf8_decode(urldecode($fetch['Medicamentos'])),2);
      $this->Ln();
      $this->Cell(40,7,"8. Consume usted alguna droga : ".utf8_decode(urldecode($fetch['Drogas'])),2);
      $this->Ln();
      $this->Cell(40,7,"9.- Le han realizado alguna intervencion quirurgica en los ultimos seis meses: ".$fetch['IntervencionQuirurgica'],2);
      $this->Ln();
       $this->Cell(40,7,"10.- Ha tomado alimentos en las ultimas 4 horas: ".$fetch['Alimentos'],2);
      $this->Ln();
       $this->Cell(40,7,"11.- Ha ingerido bebidas alcoholicas en las ultimas 8 hrs: ".$fetch['Alcohol'],2);
      $this->Ln();
      $this->Cell(40,7,"12.- Esta embarazada o en periodo de lactancia: ".$fetch['Embarazo'],2);
      $this->Ln();
      $this->Ln();  
      $this->Cell(40,7,"Nombre y firma:",2);  
      $this->Cell(140,7,"",B);  
      $this->Ln();
      $this->Cell(180,7,"",B);
      $this->Ln();$this->Ln();
      $this->SetTextColor(255,0,0);
      $this->Cell(180,7,"ATENCIÓN",0,0,C);
      $this->Ln();
      $this->Ln();
      $this->SetFont('Arial','',9);
      $this->SetTextColor(0,0,0);
      $this->MultiCell(125,6,"°LLENE ESTA FORMA (FRENTE Y VUELTA) POR CADA CLIENTE QUE ATIENDA Y ANTES DE EFECTUAR CUALQUIER PROCEDIMIENTO.",2);
      $this->MultiCell(125,6,"°SI EL CLIENTE NO LO FIRMA NO DEBE PROPORCIONAR EL SERVICIO.",2);
      $this->MultiCell(125,6,"°GUARDE LOS FORMATOS EN EL EXPEDIENTE INDIVIDUAL DEL CLIENTE Y CONSERVE POR LO MENOS DOS AÑOS.",2);
      $this->MultiCell(125,6,"°  EN CASO DE ATENDER A UN MENOR DE EDAD, DEBERA LLENAR EL FORMATO ESPECIAL",B);
      $this->Image("FPDF/Images/academia.jpg" , 138 ,195, 60);
    }
    
    function SegundaHoja(){
        $this->SetFont('Arial','',16);
        $this->Cell(180,7,"CARTA DE CONSENTIMIENTO INFORMADO",0,0,C);
        $this->Ln(13);
        $this->SetFont('Arial','',10);
        $this->Cell(180,6,"_____________________________________________ Chiapas., a ______de __________del año _________",0);
        $this->Ln();
        $this->Cell(180,6,"Yo___________________________________________ que me identifico con __________________________",0);
        $this->Ln();
        $this->Cell(180,6,"y con domicilio en:____________________________________________________________________________",0);
        $this->Ln();
        $this->MultiCell(180,6,"Declaro que me ha sido explicado ampliamente por el o la Profesional en Micropigmentación MAGALLY LOPEZ PIMENTEL sobre los riesgos de cicatrización, infección, inflamacion, intolerancia, sangrado, presencia de secresiones, complicaciones medidas de aseo, limpieza y cuidados a seguir en caso de que el procedimiento de  MICROPIGMENTACION ____  DERMODESPIGMENTACION_____ ELIM. VERRUGAS____ me ocasione alguna manifestacion de intolerancia, inflamación, infección que requiera de cambiar, tratar o eliminar asi como las medidas a seguir en caso de infección.",0);
        $this->Ln();
        $this->MultiCell(180,6,"Asi mismo y para el caso de los procedimientos de micropigmentación o tatuaje estoy consciente de que los mismos son irreversibles, y en caso de disminuir la percepción de éstos deberá ser mediante prácticas médicas realizadas por profesionales especializados.",0);
        $this->Ln();
        $this->MultiCell(180,6,"Sin perjuicio de los procedimientos que se realizan declaro tener plena capacidad conciencia y lucidez, para decidir y aceptar  el procedimiento de____________________________________ bajo mi completa responsabilidad.",0);
        $this->Ln(23);
        $this->Cell(50,7,"",0,0,C);
        $this->Cell(80,7,"NOMBRE Y FIRMA",T,0,C);
        $this->Cell(50,7,"",0,0,C);
            }
    
    
    function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}



$cita=$_GET['p'];
$rs = mysql_query("select * from citas inner join clientes on citas.IdCliente=clientes.IdCliente inner join historialcliente his on his.IdCita=citas.IdCita where citas.IdCita=$cita",$con);   
    $fetch = mysql_fetch_array($rs); 
                     
    $fecha=$fetch['Fecha'];
    $nombre=$fetch['Nombre'];
    $apellidoP=$fetch['ApellidoPaterno'];
    $apellidoM=$fetch['ApellidoMaterno'];
    
    $rs = mysql_query("select Enfermedad from antecedentesenfermedades where IdCita=$cita",$con);
    $total=mysql_num_rows($rs);
    if($total>0){
      $x=0;
      while ($antEnf = mysql_fetch_array($rs)){
        $ant[$x]= $antEnf['Enfermedad'];
       $x++;
      }
    }
    
      
    $rs = mysql_query("select Enfermedad from enfermedadestransmitibles where IdCita=$cita",$con);
    $total=mysql_num_rows($rs);
    if($total>0){
     $x=0;
      while($enftrans   = mysql_fetch_array($rs)){
        $enf[$x]= $enftrans['Enfermedad'];
        $x++;       
        }
    }
    
    $rs = mysql_query("select * from caracteristicasformula where IdCita=$cita",$con);
  $datos=mysql_fetch_array($rs);
  $rs=mysql_query("select Path,Descripcion from fotosevidencia where IdCita=$cita",$con);
    
    $total=mysql_num_rows($rs);
    if($total>0){
     $x=0;
      while($img = mysql_fetch_array($rs)){
        $imagenes[$x]= $img['Path'];
        $des[$x]= $img['Descripcion'];
        $x++;       
        }
    }
    
    
    
    
$pdf=new PDF('P','mm','letter');
$pdf->setTopMargin(40);
$pdf->AddPage();
$pdf->PrimerHoja($ant,$enf,$fetch,$datos);
$pdf->AddPage();
$pdf->SegundaHoja();
$pdf->Output($nombre.$apellidoP.$apellidoM.$fecha.".pdf",D);
}
?>	
