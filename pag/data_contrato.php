<?php
	if (!empty($_POST['periodo'])) {
		$periodo = $_POST['periodo'];
		$mod = $_POST['mod'];
		if ($mod == "cadastrar") {
			if ($periodo == 1) {
			?>
			<input type='hidden' value="01/01/0000" name="inicio" required="">
			<input type='hidden' value="01/01/0000" name="termino" required="">
			<?php
			}else{
			?>
			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Data de início*:
				</label>
				<div class="col-md-7 col-sm-6 col-xs-12">
				  <input type='text' class="form-control" / id='myDatepicker2' placeholder="data de início" value="" name="inicio" required="">
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Data de término*:
				</label>
				<div class="col-md-7 col-sm-6 col-xs-12">
				  <input type='text' class="form-control" / id='myDatepicker' placeholder="data de término" value="" name="termino" required="">
				</div>
			</div>
			<?php
			}
		}else{
			//editar contrato
			if ($periodo == 1) {
			?>
			<input type='hidden' value="01/01/0000" name="inicio" required="">
			<input type='hidden' value="01/01/0000" name="termino" required="">
			<?php
			}elseif(!empty($_POST['inicio']) AND !empty($_POST['fim'])){
				$inicio = date("d/m/Y",strtotime($_POST['inicio']));
				$fim = date("d/m/Y",strtotime($_POST['fim']));
			?>
			<div class="item form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Data de início*:
				</label>
				<div class="col-md-8 col-sm-6 col-xs-12">
				  <input type='text' class="form-control" / id='myDatepicker2' placeholder="data de início" value="<?php echo $inicio?>" name="inicio" required="">
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Data de término*:
				</label>
				<div class="col-md-8 col-sm-6 col-xs-12">
				  <input type='text' class="form-control" / id='myDatepicker' placeholder="data de término" value="<?php echo $fim?>" name="termino" required="">
				</div>
			</div>
			<?php
			}else{
			?>
			<div class="item form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Data de início*:
				</label>
				<div class="col-md-8 col-sm-6 col-xs-12">
				  <input type='text' class="form-control" / id='myDatepicker2' placeholder="data de início"  name="inicio" required="">
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Data de término*:
				</label>
				<div class="col-md-8 col-sm-6 col-xs-12">
				  <input type='text' class="form-control" / id='myDatepicker' placeholder="data de término" name="termino" required="">
				</div>
			</div>
			<?php
			}
		}
	}
?>
