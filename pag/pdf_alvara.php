<?php
	require 'dompdf/autoload.inc.php';
	require 'conexao.php';
	use Dompdf\Dompdf;
	class pdf_alvara extends conexao{
		public $texto;
		public $buscar;
		public $buscar_linha;
		public $binario;
		public $id;
		public $data;
		public $nome_do_arquivo;
		public function gerar_pdf(){
			$this->id = $_GET['fk_empresa'];
			$this->data = $_GET['data'];
			if ($this->id == "all") {
				if ($this->data !=0) {
					$this->buscar = $this->con->prepare("SELECT * FROM alvara INNER JOIN empresa ON 
					alvara.empresa = empresa.id_empresa WHERE ano=:ano ORDER BY ano");
					$this->buscar->bindValue(":ano",$this->data);
					$this->buscar->execute();
				}else{
					$this->buscar = $this->con->prepare("SELECT * FROM alvara INNER JOIN empresa ON 
					alvara.empresa = empresa.id_empresa ORDER BY ano");
					$this->buscar->execute();
				}
			}else{
				if ($this->data !=0) {
					$this->buscar = $this->con->prepare("SELECT * FROM alvara INNER JOIN empresa ON 
					alvara.empresa = empresa.id_empresa WHERE empresa=:empresa AND ano=:ano ORDER BY ano");
					$this->buscar->bindValue(":empresa",$this->id);
					$this->buscar->bindValue(":ano",$this->data);
					$this->buscar->execute();
				}else{
					$this->buscar = $this->con->prepare("SELECT * FROM alvara INNER JOIN empresa ON 
					alvara.empresa = empresa.id_empresa WHERE empresa=:empresa ORDER BY ano");
					$this->buscar->bindValue(":empresa",$this->id);
					$this->buscar->execute();
				}
			}
			$this->buscar->execute();
			$this->binario = array("-","Ok");
			$this->texto .= '<table style="width:100%">';
			$this->texto .= '<thead>';
			$this->texto .= '<tr style="nth-child(even){background-color: #f2f2f2;background-color: rgba(0,0,255,0.6);">';
			$this->texto .= '<th colspan="10" style="border: 1px solid #ddd;"><center>Alvará</center></th>';
			$this->texto .= '<th colspan="4" style="border: 1px solid #ddd;"><center>Corpo de bombeiro</center></th>';
			$this->texto .= '</tr>';
			$this->texto .= '<tr style="nth-child(even){background-color: #f2f2f2;background-color: rgba(0,0,255,0.6);">';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Ano</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>N° da pasta</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Razão social</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Insc</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Area t</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Area u</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>T/E</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>T/P</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Arq</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Ent</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>T/P</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>T/E</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Arq</center></th>';
			$this->texto .= '<th style="border: 1px solid #ddd; padding: 8px;"><center>Ent</center></tdh';
			$this->texto .= '</tr>';
			$this->texto .= '</thead>';
			while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
				$this->texto .= "<tbody>";
				$this->texto .= "<tr><td style='border: 1px solid padding: 3px;'><center>".$this->buscar_linha->ano."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->buscar_linha->num_pasta."</center></td>";	
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".utf8_encode($this->buscar_linha->nome_da_empresa)."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->buscar_linha->insc."</center></td>";
				if (!empty($this->buscar_linha->area_t)) {
					$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".number_format($this->buscar_linha->area_t,2,",",".")."</center></td>";
				}else{
					$this->texto .= "<td style='border: 1px solid padding: 3px;'><center></td>";
				}
				if (!empty($this->buscar_linha->area_u)) {
					$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".number_format($this->buscar_linha->area_u,2,",",".")."</center></td>";
				}else{
					$this->texto .= "<td style='border: 1px solid padding: 3px;'><center></center></td>";
				}
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->binario[$this->buscar_linha->te]."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->binario[$this->buscar_linha->tp]."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->binario[$this->buscar_linha->arq]."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->binario[$this->buscar_linha->ent]."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->binario[$this->buscar_linha->tp_cp]."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->binario[$this->buscar_linha->te_cp]."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->binario[$this->buscar_linha->arq_cp]."</center></td>";
				$this->texto .= "<td style='border: 1px solid padding: 3px;'><center>".$this->binario[$this->buscar_linha->ent_cp]."</center></td></tr>";
				$this->texto .= "</tbody>";
				$this->nome_do_arquivo = $this->buscar_linha->nome_da_empresa;
			}
			$Dompdf = new Dompdf();
			$Dompdf->loadHtml($this->texto);
			$Dompdf->setPaper("A4","landscape");
			$Dompdf->render();
			$Dompdf->stream($this->nome_do_arquivo."-".date('d-m-Y'),array('Attachment'=>0));
		}
	}
	$pdf_alvara = new pdf_alvara();
	$pdf_alvara->gerar_pdf();
?>
