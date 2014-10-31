 <?php
echo "
 <br> <br> 
                             ";?>  
    
    <div id="wowslider-container1">
				<div class="ws_images"><ul>   
				    <?php
						include 'conexion.php';
						//$re=mysql_query("select * from fotosevidencia where Galeria=2")or die(mysql_error());
					      $re=mysql_query("select * from fotosevidencia where IdCita<>0 order by Posicion")or die(mysql_error());
					   
              $contador = 1; 
						while ($f=mysql_fetch_array($re)) {
                	    $variable =  $f['Publicar'];
	                    $variabl= "visible";
     				    if ($variable == $variabl):  ?>
					     <li>
					     	<img src="Admin/<?php echo $f['Path'];?>" alt="foto" title="foto <?php echo ($contador);?>" id="wows1_0"/>
					     </li>
			            <?php $contador+=1; else: ?><?php endif; ?>
						<?php
						} 
					?>
					</ul>
				</div>
			</div>
      
     <br><br><br><br><br><br> 
      


	   
                     
            
		          <div id='f'>
	<?php
		include 'conexion.php';
		//$re=mysql_query("select * from fotosevidencia where Galeria=1")or die(mysql_error());
		  $re=mysql_query("select * from fotosevidencia where IdCita<>0 and Publicar='visible' order by Posicion")or die(mysql_error());
					   
    while ($f=mysql_fetch_array($re)) {
		?>                                                                          
			<div class="producto">
			<center>
				<img  class="zoom"  src="Admin/<?php echo $f['Path'];?>"  class="magnify"><br>
				
			</center>
		</div>   
	<?php
		}
	?>    
  
      
</div>      <br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br>
