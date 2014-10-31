<?php
	// HTML to PDF in PHP
	// ejemplo de utilización de la clase dompdf
	// http://www.parentesys.com
	
	
	if (!isset($_GET["op"])) { $op = ""; } else { $op = trim($_GET["op"]); } 
	

	// construimos el HTML para el mensaje
	$strHTML ="https://www.fanfiction.net/s/9831075/1/Herencia-eterna";

	// si hemos pulsado el boton de PDF desde el listado de factura, pasa por aqui.	
	if ($op=="pdf") {
				// generamos PDF
				require_once("./dompdf-0.5.1/dompdf_config.inc.php");
				
				$dompdf = new DOMPDF();
				$dompdf->load_html($strHTML);
				$dompdf->render();
				$dompdf->stream("HTMLtoPDFinPHP.pdf");
				exit(0);
	
	}
	
				
?>

