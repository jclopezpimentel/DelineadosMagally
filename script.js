( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
	$('#cssmenu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});


	$(".titulo").click(function() {		
		//$("div.info").css("height:50%");
		var father=$(this).parent();
/*		if (father.hasClass("subapartado")){
			father.css("height:50%");
			alert("Si existe");
		}else{
			alert("No existe");
		}
*/

		var info=father.children(".info");		

		info.css("height","50%");
		
});

});



} )( jQuery );



