<?php
	require 'conexao.php';	
	class alvara extends conexao{
		public $busca;
		public $buscar_linha;
		public $buscar_2;
		public $buscar_2_linha;
		public $buscar_3;
		public $buscar_3_linha;
		public $buscar_4;
		public $buscar_4_linha;
		public $data;
		public $id;
		function buscar_alvara(){
			$this->id = $_POST['dados']['0']['value'];
			if (!empty($_POST['dados']['1']['value'])) {
				$this->data = $_POST['dados']['1']['value'];
			}else{
				$this->data = 0;
			}
			if (!empty($_POST['dados']['0']['value'])) {
				if ($this->id == "all") {
					if (!empty($_POST['dados']['1']['value'])) {
						$this->buscar = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
						empresa ON alvara.empresa = empresa.id_empresa WHERE ano=:ano");
						$this->buscar->bindValue(":ano",$_POST['dados']['1']['value']);
						$this->buscar->execute();
						$this->buscar_2 = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
							empresa ON alvara.empresa = empresa.id_empresa WHERE ano=:ano");
						$this->buscar_2->bindValue(":ano",$_POST['dados']['1']['value']);
						$this->buscar_2->execute();
						$this->buscar_3 = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
							empresa ON alvara.empresa = empresa.id_empresa WHERE ano=:ano");
						$this->buscar_3->bindValue(":ano",$_POST['dados']['1']['value']);
						$this->buscar_3->execute();
					}else{
						$this->buscar = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
						empresa ON alvara.empresa = empresa.id_empresa");
						$this->buscar->execute();
						$this->buscar_2 = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
							empresa ON alvara.empresa = empresa.id_empresa");
						$this->buscar_2->execute();
						$this->buscar_3 = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
							empresa ON alvara.empresa = empresa.id_empresa");
						$this->buscar_3->execute();
					}
				}else{
					if (!empty($_POST['dados']['1']['value'])) {
						$this->buscar = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
						empresa ON alvara.empresa = empresa.id_empresa WHERE id_empresa=:id_empresa 
						AND ano=:ano");
						$this->buscar->bindValue(":id_empresa",$_POST['dados']['0']['value']);
						$this->buscar->bindValue(":ano",$_POST['dados']['1']['value']);
						$this->buscar->execute();
						$this->buscar_2 = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
							empresa ON alvara.empresa = empresa.id_empresa WHERE id_empresa=:id_empresa 
							AND ano=:ano");
						$this->buscar_2->bindValue(":id_empresa",$_POST['dados']['0']['value']);
						$this->buscar_2->bindValue(":ano",$_POST['dados']['1']['value']);
						$this->buscar_2->execute();
						$this->buscar_3 = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
							empresa ON alvara.empresa = empresa.id_empresa WHERE id_empresa=:id_empresa 
							AND ano=:ano");
						$this->buscar_3->bindValue(":id_empresa",$_POST['dados']['0']['value']);
						$this->buscar_3->bindValue(":ano",$_POST['dados']['0']['value']);
						$this->buscar_3->execute();
					}else{
						$this->buscar = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
						empresa ON alvara.empresa = empresa.id_empresa WHERE id_empresa=:id_empresa");
						$this->buscar->bindValue(":id_empresa",$_POST['dados']['0']['value']);
						$this->buscar->execute();
						$this->buscar_2 = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
							empresa ON alvara.empresa = empresa.id_empresa WHERE id_empresa=:id_empresa");
						$this->buscar_2->bindValue(":id_empresa",$_POST['dados']['0']['value']);
						$this->buscar_2->execute();
						$this->buscar_3 = $this->con->prepare("SELECT * FROM alvara INNER JOIN 
							empresa ON alvara.empresa = empresa.id_empresa WHERE id_empresa=:id_empresa");
						$this->buscar_3->bindValue(":id_empresa",$_POST['dados']['0']['value']);
						$this->buscar_3->execute();
					}
				}
				if ($this->buscar->rowCount()>0) {
					?>
					<div class="modal fade" id="excluir_alvara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			            <div class="modal-dialog" role="document">
			              <div class="modal-content">
			                <div class="modal-header">
			                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
			                </div>
			                <div class="modal-body">
			                  <center><h2>Realmente deseja excluir esse(s) alvará(s)?</h2></center>
			                </div>
			                <div class="modal-footer">
			                  <button type="submit" class="btn btn-success" id="excluir_true">Excluir</button>
			                  <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
			                </div>
			              </div>
			            </div>
			          </div>
					<center><strong style="color:#000">ALVARÁ(S) CADASTRADO(S)</strong></center>
					<button class="btn btn-danger fa fa-trash" id="excluir"></button>
					<form method="post" action="" id="form_send">
						<div class="table-responsive">
						<div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
							<div class="dt-buttons btn-group" style="margin-bottom:5px">
								<input type="button" class="btn btn-default" value="Gerar excel" id="btnExport">
								<a href="pdf_alvara.php?fk_empresa=<?php echo $this->id?>&data=<?php echo $this->data?>" class="btn btn-default" value="Gerar pdf" id="btnExportPdf" target="_blank">Gerar pdf</a>
							</div>
						</div>
						<table id="example" class="table table-striped table-bordered table-responsive">
					        <thead>
					          <tr>
					        	<th colspan="10" style="color:#000"><center>ALVARÁ</center></th>
					          	<th colspan="4" style="color:#000"><center>CORPO DE BOMBEIRO</center></th>
					          	<th colspan="3" style="color:#000"><center>GERÊNCIA</center></th>
					          </tr>
					          <tr>
					          	<th style="color:#000">ANO</th>
					            <th style="color:#000;">N°. PASTA</th> 
					            <th style="color:#000">EMPRESA</th>
					            <th style="color:#000">INSC</th>
					            <th style="color:#000">ÁREA T</th>
					            <th style="color:#000">ÁREA U</th>
					            <th style="color:#000">TE</th>
					            <th style="color:#000">TP</th>
					            <th style="color:#000">ARQ</th>
					            <th style="color:#000">ENT</th>
					            <th style="color:#000">T/P</th>
					            <th style="color:#000">T/E</th>
					            <th style="color:#000">ARQ</th>
					            <th style="color:#000">ENT</th>
					            <th style="color:#000;width: 80px">VER PDF</th>
					            <th style="color:#000;width: 80px">EDITAR</th>
					            <th style="color:#000;width: 80px"><center>SELECIONAR</center> <center><input type="checkbox" id="select_all" style="margin-left:20px"></center></th>
					          </tr>
					        </thead>
					        <tbody>
					        	<?php
				          			while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
				          		?>
					          <tr>
					          	<td><?php echo $this->buscar_linha->ano?></td>
				          		<td><?php echo $this->buscar_linha->num_pasta?></td>
				          		<td><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></td>
				          		<td><?php echo $this->buscar_linha->insc?></td>
				          		<td>
				          		<?php if($this->buscar_linha->area_t != 0.00){
				          			echo number_format($this->buscar_linha->area_t,2,",",".");
				          		}
				          		?>
				          		</td>
				          		<td>
				          		<?php
				          			if ($this->buscar_linha->area_u != 0.00) {
				          			 	echo number_format($this->buscar_linha->area_u,2,",",".");
				          			 } 
				          		?>	
				          		</td>
				          		<td>
				          			<?php  
				          				if ($this->buscar_linha->te == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php 
				          				if ($this->buscar_linha->tp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php
				          				if ($this->buscar_linha->arq == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php 
				          				if ($this->buscar_linha->ent == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php
				          				if ($this->buscar_linha->tp_cp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php 
				          				if ($this->buscar_linha->te_cp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php
				          				if ($this->buscar_linha->arq_cp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php 
				          				if ($this->buscar_linha->ent_cp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
					                <?php
					                  if (!empty($this->buscar_linha->pdf_alva)) {
					                  ?>
					                  <a target="_blank" href="<?php echo $this->buscar_linha->pdf_alva?>" class="btn btn-success fa fa-eye" data-role="ver_pdf">
					                  </a>
					                  <?php
					                  }else{
					                    echo "Sem pdf";
					                  }
					                ?>
					              </td>
				          		<td><a href="index.php?pg=editar_alva&id_alvara=<?php echo $this->buscar_linha->id_alvara?>&aba=5" class="btn btn-primary fa fa-pencil"></a></td>
				          		<td><center><input type="checkbox" name="id_alvara[]" id="empresa" value="<?php echo $this->buscar_linha->id_alvara?>"></center></td>
					          </tr>
					          <?php
					          	}
					          ?>
					        </tbody>
					      </table>
				      </div>
					</form>
				      <div class="container">
				      	<table id="tblExport" class="table table-striped table-bordered table-responsive" style="display: none">
					        <thead>
					          <tr>
					        	<th colspan="10" style="color:#000"><center>ALVARÁ</center></th>
					          	<th colspan="4" style="color:#000"><center>CORPO DE BOMBEIRO</center></th>
					          </tr>
					          <tr>
					          	<th style="color:#000">ANO</th>
					            <th style="color:#000">N°. PASTA</th> 
					            <th style="color:#000">EMPRESA</th>
					            <th style="color:#000">INSC</th>
					            <th style="color:#000">ÁREA T</th>
					            <th style="color:#000">ÁREA U</th>
					            <th style="color:#000">TE</th>
					            <th style="color:#000">TP</th>
					            <th style="color:#000">ARQ</th>
					            <th style="color:#000">ENT</th>
					            <th style="color:#000">T/P</th>
					            <th style="color:#000">T/E</th>
					            <th style="color:#000">ARQ</th>
					            <th style="color:#000">ENT</th>
					          </tr>
					        </thead>
					        <tbody>
					        	<?php
				          			while ($this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ)) {
				          		?>
					          <tr>
					          	<td><?php echo $this->buscar_2_linha->ano?></td>
				          		<td><?php echo $this->buscar_2_linha->num_pasta?></td>
				          		<td><?php echo utf8_encode($this->buscar_2_linha->nome_da_empresa)?></td>
				          		<td><?php echo $this->buscar_2_linha->insc?></td>
				          		<td>
				          		<?php if($this->buscar_2_linha->area_t != 0.00){
				          			echo number_format($this->buscar_2_linha->area_t,2,".",".");
				          		}
				          		?>
				          		</td>
				          		<td>
				          		<?php
				          			if ($this->buscar_2_linha->area_u != 0.00) {
				          			 	echo number_format($this->buscar_2_linha->area_u,2,".",".");
				          			 } 
				          		?>	
				          		</td>
				          		<td>
				          			<?php  
				          				if ($this->buscar_2_linha->te == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php 
				          				if ($this->buscar_2_linha->tp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php
				          				if ($this->buscar_2_linha->arq == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php 
				          				if ($this->buscar_2_linha->ent == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php
				          				if ($this->buscar_2_linha->tp_cp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php 
				          				if ($this->buscar_2_linha->te_cp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php
				          				if ($this->buscar_2_linha->arq_cp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
				          		<td>
				          			<?php 
				          				if ($this->buscar_2_linha->ent_cp == 1) {
				          					echo "Ok";
				          				}else{

				          				}
				          			?>
				          		</td>
					          </tr>
					          <?php
					          	}
					          ?>
					        </tbody>
					      </table>
				      </div>
				      <script>
			              var wb = XLSX.utils.table_to_book(document.getElementById('tblExport'), {sheet:"Sheet JS"});
			              var wbout = XLSX.write(wb, {bookType:'xlsx', bookSST:true, type: 'binary'});
			              function s2ab(s) {
			                var buf = new ArrayBuffer(s.length);
			                var view = new Uint8Array(buf);
			                for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
			                return buf;
			              }
			              $("#btnExport").click(function(){
			              saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'alvara_<?php echo date('d-m-Y') ?>.xlsx');
			              });
			           </script>
				      <script type="text/javascript">
				      	var hc="<td colspan='10'><center>ALVARÁ</center></td>"+"<td colspan='4'>CORPO DE BOMBEIRO</td>";
					    $(document).ready(function() {
					    	$("#select_all").click(function(){
					          if ($("#select_all").prop('checked')) {
					            $("form #empresa").prop('checked',true);
					          }else{
					            $("form #empresa").prop('checked',false);
					          }
					        });
					    	$("#excluir").click(function(){
					    		$("#excluir_alvara").modal("show");
					    	});
					    	$("#excluir_true").click(function(){
					    		$("#form_send").submit();
					    	});
					    $('#example').DataTable( {
					        dom: 'Bfrtip',
					        buttons: [
					        	{
			                    	extend: 'print',
			                    	exportOptions: {
			                        columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13],
			                    	}
			                	},
					          ],	
					          language:{
					            "sEmptyTable": "Nenhum registro encontrado",
					            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
					            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
					            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
					            "sInfoPostFix": "",
					            "sInfoThousands": ".",
					            "sLengthMenu": "_MENU_ resultados por página",
					            "sLoadingRecords": "Carregando...",
					            "sProcessing": "Processando...",
					            "sZeroRecords": "Nenhum registro encontrado",
					            "sSearch": "Pesquisar",
					            "oPaginate": {
					                "sNext": "Próximo",
					                "sPrevious": "Anterior",
					                "sFirst": "Primeiro",
					                "sLast": "Último"
					            },
					            "oAria": {
					                "sSortAscending": ": Ordenar colunas de forma ascendente",
					                "sSortDescending": ": Ordenar colunas de forma descendente"
					            }
					        }
					      });
					  });
					    </script>
					<?php
				}else{
				?>
				<center><h2>Nenhum alvará encontrado para essa pesquisa!</h2></center>
				<?php
				}
			}
		}
	}
	$alva = new alvara;
	$alva->buscar_alvara();	
?>