<?php
	if (isset($_POST['cor'])) {
		$cor = $_POST['cor'];
		if ($cor == "2") {
		?>
		<div class="form-group">
      		<label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nova cor da dashboard <span class="required"></span></label>
	        <div class="col-md-8 col-sm-6 col-xs-12">
	          <input type="text" name="nova_cor" class="form-control col-md-7 col-xs-12" placeholder="Nova cor" required="required" id="demo">
	        </div>
      	</div>
		<?php
		}
	}
?>