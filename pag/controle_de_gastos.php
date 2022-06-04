<?php
	require "conexao.php";
	class gastos_empresarial extends conexao{
		public $buscar;
		public $buscar_linha;
		public $buscar_2;
		public $buscar_2_linha;
		public $buscar_status;
		public $buscar_status_linha;
		function gerenciar_gasto(){
			if (!empty($_POST['dados'][0]['value']) AND !empty($_POST['dados'][1]['value']) AND !empty($_POST['dados'][2]['value']) AND 
			!empty($_POST['dados'][3]['value'])) {
			$id_empresa = $_POST['dados'][0]['value'];
			$id_despesa = $_POST['dados'][1]['value'];
			$nome_empresa = $_POST['dados'][0]['name'];
			$nome_despesa = $_POST['dados'][1]['name'];
			$mes = $_POST['dados'][2]['value'];
			$ano = $_POST['dados'][3]['value'];
			$mes_nome = array(1=>"janeiro",2=>"Fevereiro",3=>"Março",4=>"Abril",5=>"Maio",6=>"Junho",7=>"Julho",8=>"Agosto",
				9=>"Setembro",10=>"Outubro",11=>"Novembro",12=>"Dezembro",
			);
			$this->buscar = $this->con->prepare("SELECT nome_da_empresa,nome_despesa,num_pasta FROM empresa INNER JOIN despesa ON empresa.id_empresa=:id_empresa AND despesa.id_despesa=:id_despesa");
			$this->buscar->bindValue(":id_empresa",$id_empresa);
			$this->buscar->bindValue(":id_despesa",$id_despesa);
			$this->buscar->execute();
			$this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ);
			$this->buscar_status = $this->con->prepare("SELECT * FROM status_despesa WHERE id_status NOT IN(15)");
			$this->buscar_status->execute();
			?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-md-12 table-responsive">
				<table class="table table-striped table-bordered table-responsive">
					<thead>
						<tr>
							<th style="font-size:13px;color:#000;width:50px">N° da pasta</th>
							<th style="font-size:13px;color:#000;width:150px">Razão social</th>
							<th style="font-size:13px;color:#000;width:100px">Despesa</th>
							<th style="font-size:13px;color:#000;width:50px">Mês</th>
							<th style="font-size:13px;color:#000;width:50px">Ano</th>
							<th style="font-size:13px;color:#000;width:200px">Status</th>
							<th style="font-size:13px;color:#000;width:200px">Valor</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo utf8_encode($this->buscar_linha->num_pasta)?></td>
							<td><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></td>
							<td><?php echo utf8_encode($this->buscar_linha->nome_despesa)?></td>
							<td><?php echo $mes_nome[$mes]?></td>
							<td><?php echo $ano?></td>
							<td>
								<select class="select2_single form-control" name="status_despesa">
								<option value="" selected disabled>Selecione uma opção</option>
								<?php 
									while ($this->buscar_status_linha = $this->buscar_status->FETCH(PDO::FETCH_OBJ)) {
									?>
									<option value="<?php echo $this->buscar_status_linha->id_status?>"><?php echo utf8_encode($this->buscar_status_linha->nome_status)?></option>
									<?php
									}
								?>
								</select>
							</td>
							<td>
								<input type="text" class="form-control" id="demo1" maxlength="9" placeholder="valor da despesa" name="valor">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
			}
		}
		function editar_controle_de_gastos(){
			if (!empty($_POST['dados'][0]['value']) AND !empty($_POST['dados'][1]['value']) AND !empty($_POST['dados'][2]['value']) AND 
			!empty($_POST['dados'][3]['value'])) {
			$id_empresa = $_POST['dados'][0]['value'];
			$id_despesa = $_POST['dados'][1]['value'];
			$id_gasto = $_POST['dados'][4]['value'];
			$mes = $_POST['dados'][2]['value'];
			$ano = $_POST['dados'][3]['value'];
			$mes_nome = array(1=>"janeiro",2=>"Fevereiro",3=>"Março",4=>"Abril",5=>"Maio",6=>"Junho",7=>"Julho",8=>"Agosto",
				9=>"Setembro",10=>"Outubro",11=>"Novembro",12=>"Dezembro",
			);
			$this->buscar = $this->con->prepare("SELECT nome_da_empresa,nome_despesa,num_pasta,valor 
				FROM gastos INNER JOIN empresa ON empresa.id_empresa=:empresa 
				INNER JOIN despesa ON despesa.id_despesa=:id_despesa AND id_gasto=:id_gasto");
			$this->buscar->bindValue(":id_despesa",$id_despesa);
			$this->buscar->bindValue(":empresa",$id_empresa);
			$this->buscar->bindValue(":id_gasto",$id_gasto);
			$this->buscar->execute();
			$this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ);
			$this->buscar_status = $this->con->prepare("SELECT * FROM status_despesa WHERE id_status NOT IN(15)");
			$this->buscar_status->execute();
			$this->buscar_2 = $this->con->prepare("SELECT id_status FROM gastos INNER JOIN 
				status_despesa ON gastos.fk_status = status_despesa.id_status 
				AND id_gasto=:id_gasto AND id_status NOT IN(15)");
			$this->buscar_2->bindValue(":id_gasto",$id_gasto);
			$this->buscar_2->execute();
			$this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ);
			?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
				<table class="table table-striped table-bordered table-responsive">
					<thead>
						<tr>
							<th style="font-size:13px;color:#000;width:50px">N° da pasta</th>
							<th style="font-size:13px;color:#000;width:150px">Razão social</th>
							<th style="font-size:13px;color:#000;width:100px">Despesa</th>
							<th style="font-size:13px;color:#000;width:50px">Mês</th>
							<th style="font-size:13px;color:#000;width:50px">Ano</th>
							<th style="font-size:13px;color:#000;width:200px">Status</th>
							<th style="font-size:13px;color:#000;width:200px">Valor</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo utf8_encode($this->buscar_linha->num_pasta)?></td>
							<td><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></td>
							<td><?php echo utf8_encode($this->buscar_linha->nome_despesa)?></td>
							<td><?php echo $mes_nome[$mes]?></td>
							<td><?php echo $ano?></td>
							<td>
								<select class="select2_single form-control" name="status_despesa">
								<option value="" selected disabled>Selecione uma opção</option>
								<?php 
									while ($this->buscar_status_linha = $this->buscar_status->FETCH(PDO::FETCH_OBJ)) {
										if (!empty($this->buscar_2_linha->id_status)) {
										?>
										<option value="<?php echo $this->buscar_status_linha->id_status?>"<?php echo ($this->buscar_2_linha->id_status == $this->buscar_status_linha->id_status)?'selected':null ?> ><?php echo utf8_encode($this->buscar_status_linha->nome_status)?></option>
										<?php
										}else{
										?>
										<option value="<?php echo $this->buscar_status_linha->id_status?>"><?php echo utf8_encode($this->buscar_status_linha->nome_status)?></option>
										<?php
										}
									?>
									<?php
									}
								?>
								</select>
							</td>
							<td><input type="text" class="form-control" name="valor" maxlenght="9" id="demo1" value="<?php echo number_format($this->buscar_linha->valor,2,",",".")?>"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
			}
		}
	}
	$gasto = new gastos_empresarial();
	$pg = $_POST['pg'];
	if ($pg == "controle_de_gastos") {
		$gasto->gerenciar_gasto();
	}else{
		$gasto->editar_controle_de_gastos();
	}
?>