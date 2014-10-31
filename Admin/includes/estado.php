<?php include('cabecera.php');        ?>
<center>
 
	       <?php
          try {
		include 'conexion.php';
    
    $ID=$_GET['id'];
   
		$re=mysql_query("select * from fotosevidencia where IdFotos=".$ID)or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>  <br> <div id="ffga"> 
			<center>
				<img src="<?php echo $f['Path'];?>" style="width:80%; height:auto;" ><br>
				<span>Estado: <?php echo $f['Publicar'];?></span><br>
			</center>
		</div>
	<?php
		}
    } catch (Exception $re) {  
   
      }
	?>        
                           
<form name="formupdate" action="http://www.delineadosmagally.com.mx/Admin/home.php?p=MD6" method="POST">  
       <input type="text" name="NID" value="<?php echo($ID); ?>" style = "visibility: hidden;"> <br>
      <input type="checkbox" name="visible" value="visible" style = " position:absolute; z-index:1; left:50%; width:19%; left:54%;top:79%; "><p style="position:absolute; z-index=0; left:100% top:50%;">visible</p> <br>
                             <br>
                             <!--<input name="boton1" type="submit" value="Actualizar">-->
       <input name="boton1"  type="image"  width="18%"  style = " position:absolute; top:76%; left:65%; height:35%"  src="Images/actualizar.png">
</form> 
 
                 
                 
<form name="formupdatee" action="http://www.delineadosmagally.com.mx/Admin/home.php?p=MD6" method="POST" >
  
 <input type="text" name="NIID" value="<?php echo($ID); ?>" style = "visibility: hidden;"> <br>  
  <input name="boton2" width="13%" height="35%" type="image" style = " position:absolute; left:36%;top:74%; width:22%" src="Images/eliminar.png">
  <!--<input name="boton1" type="submit" value="Eliminar">             -->
            </form>  

               </div> 

  
 </center>
        

        <?php    	include('pie.php');
	?>