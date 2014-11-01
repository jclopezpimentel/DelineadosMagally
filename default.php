
 <br> <br> 

<div id="wowslider-container1">
				<div class="ws_images"><ul>   
				    <?php
						include 'Admin/conexion.php';
						$re=mysql_query("select * from fotosevidencia where Galeria=1 order by Posicion")or die(mysql_error());
					   //  $re=mysql_query("select * from fotosevidencia where IdCita<>0 order by Posicion")or die(mysql_error());
					   
              $contador = 1; 
						while ($f=mysql_fetch_array($re)) {
                	    $variable =  $f['Publicar'];
	                    $variabl= "visible";
     				    if ($variable == $variabl):  ?>
					     <li>
					     	<img src="Admin/<?php echo $f['Path'];?>" alt="foto" title="foto <?php echo ($contador);?>" />
					     </li>
			            <?php $contador+=1; else: ?><?php endif; ?>
						<?php
						} 
					?>
					</ul>
				</div>
			</div>
<center>
	<h1 >Delineados Magally</h1>
	<h3 style='cursor:pointer';  title="Ver mas">
		<a onmouseover="this.style.color='Black'" onmouseout="this.style.color='#FC5454'" onclick="cambiar('ejemplo'); return false;" style="text-decoration:none;color: #FC5454;" href="http://delineadosmagally.com.mx/?DelineadoCejas#tema">&iquest;Qu&eacute; es Micropigmentacion?</a>
	</h3>
</center>     
