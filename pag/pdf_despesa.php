<?php
	require 'dompdf/autoload.inc.php';
	require 'conexao.php';
	use Dompdf\Dompdf;
	class pdf_alvara extends conexao{
		public $texto;
		public $buscar;
		public $buscar_linha;
		public $buscar_empresa;
		public $nome_da_empresa;
		public $binario;
		public $mes;
		public $nome_do_arquivo;
		public function gerar_pdf(){
			$this->mes = array(1=>"janeiro",2=>"Fevereiro",3=>"Março",4=>"Abril",5=>"Maio",6=>"Junho",7=>"Julho",8=>"Agosto",9=>"Setembro",10=>"Outubro",11=>"Novembro",12=>"Dezembro",
     		 );
			if ($_GET['data'] != "0") {
				$this->buscar_empresa = $this->con->prepare("SELECT * FROM  gastos 
				INNER JOIN empresa ON gastos.fk_empresa = empresa.id_empresa WHERE fk_empresa=:fk_empresa 
				AND ano=:ano");
				$this->buscar_empresa->bindValue(":fk_empresa",$_GET['id_empresa']);
				$this->buscar_empresa->bindValue(":ano",$_GET['data']);
				$this->buscar_empresa->execute();
				$this->nome_da_empresa = $this->buscar_empresa->FETCH(PDO::FETCH_OBJ);
				// var_dump($this->nome_da_empresa);
				$this->buscar = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa ON 
					gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON gastos.fk_despesa = despesa.id_despesa 
					INNER JOIN status_despesa ON gastos.fk_status = status_despesa.id_status 
					WHERE fk_empresa=:fk_empresa AND ano=:ano");
				$this->buscar->bindValue(":fk_empresa",$_GET['id_empresa']);
				$this->buscar->bindValue(":ano",$_GET['data']);
				$this->buscar->execute();
			}else{
				$this->buscar_empresa = $this->con->prepare("SELECT * FROM  gastos 
				INNER JOIN empresa ON gastos.fk_empresa = empresa.id_empresa WHERE fk_empresa=:fk_empresa");
				$this->buscar_empresa->bindValue(":fk_empresa",$_GET['id_empresa']);
				$this->buscar_empresa->execute();
				$this->nome_da_empresa = $this->buscar_empresa->FETCH(PDO::FETCH_OBJ);
				// var_dump($this->nome_da_empresa);
				$this->buscar = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa ON 
					gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON gastos.fk_despesa = despesa.id_despesa 
					INNER JOIN status_despesa ON gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa");
				$this->buscar->bindValue(":fk_empresa",$_GET['id_empresa']);
				$this->buscar->execute();
			}
			$this->binario = array("-","Ok");
			$this->texto .= '<table border="1" style="width:100%;">';
			$this->texto .= '<thead>';
			$this->texto .= '<tr style="nth-child(even){background-color: #f2f2f2;background-color: rgba(0,0,255,0.6);">';
			$this->texto .= '<th colspan="5" style="border: 1px solid #ddd;"><center>'.utf8_encode(strtoupper($this->nome_da_empresa->nome_da_empresa)).'</center></th>';
			$this->texto .= '</tr>';
			$this->texto .= '<tr style="border: 1px solid padding: 3px;background-color: rgba(0,0,255,0.6);">';
			$this->texto .= '<td style="border: 1px solid padding: 3px;"><center>Despesa</center></td>';
			$this->texto .= '<td style="border: 1px solid padding: 3px;"><center>Status</center></td>';
			$this->texto .= '<td style="border: 1px solid padding: 3px;"><center> Mês</center></td>';
			$this->texto .= '<td style="border: 1px solid padding: 3px;"><center>Ano</center></td>';
			$this->texto .= '<td style="border: 1px solid padding: 3px;"><center>Valor</center></td>';
			$this->texto .= '</tr>';
			$this->texto .= '</thead>';
			while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
				$this->texto .= "<tbody>";
				$this->texto .= "<tr><td><center>".utf8_encode($this->buscar_linha->nome_despesa)."</center></td>";
				$this->texto .= "<td><center>".utf8_encode($this->buscar_linha->nome_status)."</center></td>";	
				$this->texto .= "<td><center>".$this->mes[$this->buscar_linha->mes]."</center></td>";
				$this->texto .= "<td><center>".$this->buscar_linha->ano."</center></td>";
				if ($this->buscar_linha->valor == "0.00") {
				$this->texto .= "<td><center>-</center></td></tr>";
				}else{
					$this->texto .= "<td><center>".number_format($this->buscar_linha->valor,2,",",".")."</center></td></tr>";
				}
				$this->texto .= "</tbody>";
				$this->nome_do_arquivo = $this->buscar_linha->nome_da_empresa;
			}
			$Dompdf = new Dompdf();
			$Dompdf->loadHtml($this->texto);
			$Dompdf->setPaper("landscape");
			$Dompdf->render();
			$Dompdf->stream($this->nome_do_arquivo."-".date('d-m-Y'),array('Attachment'=>0));
		}
	}
	$pdf_alvara = new pdf_alvara();
	$pdf_alvara->gerar_pdf();
?>
