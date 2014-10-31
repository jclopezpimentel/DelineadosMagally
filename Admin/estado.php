

<?php include('cabecera.php');        ?>   

  <link rel="stylesheet" href="Css/styles.css"/>

  

	       <?php
          try {
		include 'conexion.php';
    
    $ID=$_GET['id'];
   
		$re=mysql_query("select * from fotosevidencia where IdFotos=".$ID)or die(mysql_error());
                         
		while ($f=mysql_fetch_array($re)) {
    		?>  <br><div id="estadofga"> <div class="productoestado">
			<center>
				<img src="<?php echo $f['Path'];?>" style="width:170px; height:170px;" ><br><br>
			</center>
		</div></div>
	<?php
		}
    } catch (Exception $re) {  
   
      }
	?>        
                   
<form name="formupdate" action="http://www.delineadosmagally.com.mx/Admin/home.php?p=MD6" method="POST">  
       <input type="text" name="NID" value="<?php echo($ID); ?>" style = "visibility: hidden;"> <br>
      
        <?php
          try {
		include 'conexion.php';
    
    $ID=$_GET['id'];
		$rre=mysql_query("select * from fotosevidencia where IdFotos=".$ID)or die(mysql_error());
    $estado="uno";
         
		while ($f=mysql_fetch_array($rre)) {
    $estado= $f['Publicar'];
		}
    $b="visible";
    if ($estado == $b) {
  ?>  
     <input type="checkbox" name="visible"  value="visible" style = "position:absolute; z-index:1; left:30%; width:19%; left:28%;top:89%; "checked>
     
  <?php
}
$bb="invisible";
    if($estado ==$bb){
            ?>
             <input type="checkbox" name="visible"  value="visible" style = "position:absolute; z-index:1; left:30%; width:17%; left:28%;top:98%; ">
             <?php
    }
    include 'conexion.php';
        $rsre=mysql_query("select * from fotosevidencia where IdCita=0")or die(mysql_error());
       $estado="uno";
    ?><select name="mi_combobox" style="position:absolute; z-index=0; left:45%; top:89%;"><?php                      
		$contador = 1;
while ($f=mysql_fetch_array($rsre)) { 
        $ID=$_GET['id'];
       $hola=$f['IdFotos'];  
      if($ID==$hola){   
      $h=$f['Posicion'];
        ?>
       <option selected value="<?php echo $h; ?>"> Posicion <?php echo $h; ?></option>
              <?php
              $contador+=1;
              $oldPosition=$h;
              echo $oldPosition;
      } else  {
     
    ?><option value="<?php echo $contador; ?>">Posicion <?php echo $contador; ?></option> <?php
      $contador+=1;
      }
		}  
      
       ?>
 </select>
 <input type="hidden"  value="<?php echo $oldPosition;  ?>" name="vieja" >
 	<?php
    } catch (Exception $re) {  
   
      }
	?>  
     <p style="position:absolute; z-index=1; left:40%; top:88%;">visible</p> <br>
                             <br>
                             <!--<input name="boton1" type="submit" value="Actualizar">-->
       <input name="boton1"  type="image"    style = " position:absolute; top:96%; left:45%; height:10%; width=10%;"  src="Images/actualizar.png">
</form> 
 
                 
                 
<form name="formupdatee" action="http://www.delineadosmagally.com.mx/Admin/home.php?p=MD6" method="POST" >
  
 <input type="text" name="NIID" value="<?php echo($ID); ?>" style = "visibility: hidden;"> <br>  
  <input name="boton2"  type="image" style = " position:absolute; left:38%;top:95%; height=6%; width:6%" src="Images/eliminar.png">
  <!--<input name="boton1" type="submit" value="Eliminar">             -->
            </form>  
            <br><br><br><br><br><br><br>
           <div id="fondo"><br> </div>    
           

  
 </center>
        
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php    	include('pie.php');
	?>
