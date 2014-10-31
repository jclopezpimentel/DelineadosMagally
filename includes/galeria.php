<!DOCTYPE html >
<html >
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<script type="text/javascript" src="mootools-yui-compressed.js"></script>
	<link rel="stylesheet" href="1.css" />
</head>
<body>

<?php

include "conexion.php";
$rs=mysql_query("select Path,Descripcion from fotosevidencia",$con);
$descripciones="gfhgbhfdg";
$url=array("6.jpg","7.jpg","6.jpg","7.jpg","6.jpg","7.jpg");
if($rs!=NULL){
      while($fotos = mysql_fetch_array($rs)){
echo  "<div class='thumb'>
	<div class='someContent'>
		<div class='content'>".$fotos['Descripcion']."</div>";
		
	echo "</div>
	<div class='divLeft' style='left:0px'>
		<div class='divLeftImage' style='background:url(".$fotos['Path'].");'></div>
		<div class='divLeftShadow'></div>
	</div>
	<div class='divRight' style='left:0px;background-image:url(".$fotos['Path'].");'></div>
	<img class='thumbnail-shadow' alt='' src='thumbnail-shadow.png'/>
</div>";
}

}



?>

<script type="text/javascript">
window.addEvent('domready',function(){
$$('div.thumb').each(function(div){

	div.getElement('div.someContent').set('tween', {duration:'700'});
	div.getElement('div.divLeft').set('tween', {duration: '450'});
	div.getElement('div.divRight').set('tween', {duration: '450'});
	
	div.addEvent('mouseenter',function(e){
		this.getElement('div.divLeft').tween('left','-70px')
		this.getElement('div.divRight').tween('left','80px')
		this.getElement('div.someContent').tween("background-position", "-20px 0px");
	})
	div.addEvent('mouseleave',function(e){
		this.getElement('div.divLeft').tween('left','0px')
		this.getElement('div.divRight').tween('left','0px')
		this.getElement('div.someContent').tween("background-position", "0px -167px");

	})
})
})
</script>	

</body>
</html>