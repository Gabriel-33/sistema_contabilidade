<?php
	require 'dompdf/autoload.inc.php';
	require 'conexao.php';
	use Dompdf\Dompdf;
	session_start();
	class pdf_contrato extends conexao{
		public $buscar_contrato;
		public $buscar_contrato_linha;
		public $buscar_logo;
		public $buscar_logo_linha;
		public $perido;
		public $status;
		public function gerar_pdf(){
			$pdf = new Dompdf();
			$this->buscar_contrato = $this->con->prepare("SELECT * FROM contrato INNER JOIN empresa
			 ON contrato.nome_empresa = empresa.id_empresa INNER JOIN tipo_contrato ON 
			 contrato.tipo_de_contrato = tipo_contrato.id_tipo_contrato AND id_contrato=:id_contrato");
			$this->buscar_contrato->bindValue(":id_contrato",$_GET['id_contrato']);
			$this->buscar_contrato->execute();
			$this->buscar_contrato_linha = $this->buscar_contrato->fetch(PDO::FETCH_OBJ);
			$this->buscar_logo = $this->con->prepare("SELECT img_dash FROM personal");
			$this->buscar_logo->execute();
			$this->buscar_logo_linha = $this->buscar_logo->FETCH(PDO::FETCH_OBJ);
			if ($this->buscar_contrato_linha->inicio == "0000-01-01") {
				$this->periodo = "Indetérminado";
			}else{
				$this->periodo = date("d/m/Y",strtotime($this->buscar_contrato_linha->inicio))." À ".date("d/m/Y",strtotime($this->buscar_contrato_linha->fim));
			}
			$this->status = array(0=>"Pendente",1=>"Arquivado");
			ob_start();
			?>
			<div style="width:1100px">
				<img src="<?php echo $this->buscar_logo_linha->img_dash?>" style="width:180px;hight:400px;border-radius:10px;">
				<center>
					<h1 style="font-family:verdana;margin-top:-50px"><?php echo "Contrato na categória ".utf8_encode($this->buscar_contrato_linha->nome_tipo_contrato)?></h1>
				</center>
			</div>
			<div style="position:center;margin-top:35px">
				<h5 style="font-size:25px">1. Contrato do tipo <?php echo utf8_encode($this->buscar_contrato_linha->nome_tipo_contrato)?>, realizado pela empresa <?php echo utf8_encode($this->buscar_contrato_linha->nome_da_empresa)?>.</h5>
				<hr>
					<h5 style="font-size:25px">2. Periódo: <?php echo $this->periodo?>.</h5>
				</hr>
				<?php
					if (!empty($this->buscar_contrato_linha->descricao)) {
					?>
					<hr>
						<h5 style="font-size:25px">3. Descrição: <?php echo utf8_encode($this->buscar_contrato_linha->texto)?></h5>
					</hr>
					<?php
					}
				?>
				<hr>
				<h5 style="font-size:25px">4. Contrato: <?php echo $this->status[$this->buscar_contrato_linha->status]?>.</h5>
				</hr>
			</div>
			<?php
			$html = ob_get_clean();
			$pdf->loadHtml($html);
			$pdf->setPaper('A4','landscape');
			$pdf->render();
			$pdf->stream('resumo_contrato_"'.utf8_encode($this->buscar_contrato_linha->nome_da_empresa).'".pdf',Array('Attachment'=>0));
		}
		function verificar_login(){
			if (!empty($_SESSION['cod'])) {
			}else{
				session_destroy();
				unset($_SESSION);
				header("location:../pag/login.php");
			}
		}
	}
	$pdf_contrato = new pdf_contrato();
	$pdf_contrato->verificar_login();
	$pdf_contrato->gerar_pdf();
?>
