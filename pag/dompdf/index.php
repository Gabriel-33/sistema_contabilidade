<?php
	require 'autoload.inc.php';
	use Dompdf\Dompdf;
	$Dompdf = new Dompdf(); 
	$texto = 
	"<table border='1'> 
		<thead>
			<tr>
				<th colspan='4'>teste</th>
				<th colspan='1'>teste</th>
			</tr>
			<tr>
				<th>teste</th>
				<th>teste2</th>
				<th>teste4</th>
				<th>teste5</th>
				<th>teste5</th>
			</tr>
		</thead>
		<tbody> 
			<tr> 
				<td>teste</td>
				<td>testwe</td>
				<td>testes</td>
				<td>testse</td>
				<td>teste</td>
			</tr> 
		</tbody> 
	</table>";
	$Dompdf->loadHtml($texto);
	$Dompdf->setPaper("A4","landscape");
	$Dompdf->render();
	$Dompdf->stream('codexworld',array('Attachment'=>0));
?>