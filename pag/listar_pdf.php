<?php
	if (!empty($_GET['contrato'])) {
		$contrato = $_GET['contrato'];
	}
?>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="js/pdfobject.min.js"></script>
<div class="container">
  <div class="col-md-12 col-sm-12 col-xs-12" id="ver_pdf" style="height:500px">
    
  </div>
</div>
<script type="text/javascript">
  var pdf = $("#ver_pdf");
  PDFObject.embed("<?php echo $contrato ?>",pdf);
</script>