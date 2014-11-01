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

<div id="fga">  <center> 
              
                           <h1>Agregar imagen</h1>  <br>
 <form action="home.php?p=MD6" method="post" enctype="multipart/form-data">
  <input name="archivo" type="file" size="35" />      <br><br>
  
  <input name="visible" type="checkbox"> visible   <br><br>
  
   
  
  <input name="enviar" type="submit" value="Agregar" />
  <input name="action" type="hidden" value="upload" />  
 <?php      
  
		include 'conexion.php';
		$re=mysql_query("SELECT MAX(Posicion) FROM fotosevidencia WHERE Galeria=1")or die(mysql_error()); 
		$resultado = mysql_query($re);       
    // <input type="text" value="<?php mysql_num_rows($re);  
     ?>  
</form>
                                                                </center> </div>  <br><br><br>
                  
                                                                <?php  
                                                                
                                                                $status = "";
if ($_POST["action"] == "upload") {
    // obtenemos los datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
   
    if ($archivo != "") {
        // guardamos el archivo a la carpeta files
        $destino =  "Images/images/".$prefijo."_".$archivo;
        if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            $status = "Archivo subido: <b>".$archivo."</b>";   
  // echo "el archivo llamado ".$archivo."de tamano".$tamano."de tipo ".$tipo;

   include 'conexion.php';
                       
   if(isset($_POST['visible'])){
                         
                        
                        $bandera=bandera+1;
                        
                         
                        $Pos='8';
                        $gal = '1';
                        $ver = 'visible';
                        $sql = "INSERT INTO fotosevidencia(Publicar, Path, Posicion, Galeria) VALUES('$ver','$destino','$Pos','$gal')";
                        $result = mysql_query($sql);
    }else{
                        $Pos = '8';
                        $gal = '1';
                        $ver = 'invisible';
                        $sql = "INSERT INTO fotosevidencia(Publicar, Path, Posicion, Galeria) VALUES('$ver','$destino','$Pos','$gal')";
                        $result = mysql_query($sql);
    
    }   
        } else {
            $status = "Error al subir el archivo";
        }
    } else {
        $status = "Error al subir archivo";
    }
    
}    

  
 ?>




          <?php               

      try {
    
             include 'conexion.php';
               $newPosition=$_POST['mi_combobox'];
             // printf ($newPosition);
             if (isset($_POST['visible'])) {
                    $oldPosition = $_REQUEST['vieja'];
                    $NID = $_REQUEST['NID'];
                    $ver = $_REQUEST['visible'];
                    $sql = "UPDATE fotosevidencia SET Posicion = 0 WHERE Posicion=$oldPosition";
                    $result = mysql_query($sql);
                    
                     if ($oldPosition<$newPosition){
                         $s = "UPDATE fotosevidencia SET Posicion = Posicion - 1 WHERE Posicion > oldPosition and Posicion <= newPosition and Posicion>0";
                          $resul = mysql_query($s);
                        }else{
                        $s ="UPDATE fotosevidencia SET Posicion = Posicion + 1 WHERE Posicion >= newPosition and Posicion < oldPosition and Posicion>0";
                        $resu = mysql_query($s);
                        }
                        $so ="UPDATE fotosevidencia SET Posicion = newPosition WHERE Posicion=0";
                        $resu = mysql_query($s0);
                    
                    $s ="UPDATE fotosevidencia SET Posicion = $newPosition WHERE Posicion=0";
                    $resu = mysql_query($s);
                 //   $sql = "UPDATE fotosevidencia SET Publicar='$ver',Posicion='$newPosition' WHERE IdFotos='$NID'";
                   //  $result = mysql_query($sql);    
             } else {
                     if (isset($_POST['NID'])) {
                     $oldPosition = $_REQUEST['vieja'];
                     $NID = $_REQUEST['NID'];
                    $ver = 'invisible';
              //      $sql = "UPDATE fotosevidencia SET Publicar='$ver'Posicion='$newPosition'  WHERE IdFotos='$NID'";
                //     $result = mysql_query($sql);
                     $sql = "UPDATE fotosevidencia SET Posicion = 0 WHERE Posicion=$oldPosition";
                    $result = mysql_query($sql);
                    
                     if ($oldPosition<$newPosition){
                         $s = "UPDATE fotosevidencia SET Posicion = Posicion - 1 WHERE Posicion > oldPosition and Posicion <= newPosition and Posicion>0";
                          $resul = mysql_query($s);
                        }else{
                        $s ="UPDATE fotosevidencia SET Posicion = Posicion + 1 WHERE Posicion >= newPosition and Posicion < oldPosition and Posicion>0";
                        $resu = mysql_query($s);
                        }
                        $so ="UPDATE fotosevidencia SET Posicion = newPosition WHERE Posicion=0";
                        $resu = mysql_query($s0);
                        
                         
                                    
                    $s ="UPDATE fotosevidencia SET Posicion = $newPosition WHERE Posicion=0";
                    $resu = mysql_query($s);
                                  }else{}
                                
             }      
      } catch (Exception $e) {  
   
      }
         
             
             if (isset($_POST['NIID'])) {
                    $NIID = $_REQUEST['NIID'];
                    $sql = "DELETE FROM fotosevidencia WHERE IdFotos='$NIID'";
                     $result = mysql_query($sql);
             } else {
                     
             
             }
     
 
 ?>
 
 
 
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div id="admgal"><br> <center><h1>Imagenes opcionales en la galeria</h1></center>   <br><br>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from fotosevidencia where IdCita=0 order by Posicion")or die(mysql_error()); 
		while ($f=mysql_fetch_array($re)) {
		?>
			<div class="productoo">
			<center>
				<img src="<?php echo $f['Path'];?>">      <br>
				<span><?php echo $f['Publicar'];?></span><br><!--  -->
				<a href="estado.php?id=<?php  echo $f['IdFotos'];?>">Detalles</a>
			</center>
		</div>
	<?php
		}
	?>
		    </div>            

<?php 
	}	
?>
