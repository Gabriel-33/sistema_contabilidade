<?php
require 'conexao.php';
	class agenda extends conexao{
		public $buscar;
		public $buscar_linha;
		public $data;
		public $data_formatada;
		function ver_agenda(){
			$this->data = explode("/", $_POST['data']);
			$this->data_formatada = $this->data[2]."-".$this->data[1]."-".$this->data[0];
			if (is_array($this->data) AND !is_string($this->data)) {
				$this->buscar = $this->con->prepare("SELECT * FROM agenda INNER JOIN 
					empresa ON agenda.fk_empresa=empresa.id_empresa");
				$this->buscar->execute();
				if ($this->buscar->rowCount()>0) {
					?>
					 <script>
					  $(function() {
					    $('#calendar').fullCalendar({
					      	events: [
						      	<?php
						    	while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
						    	?>
							    {
							      title  : '<?php echo $this->buscar_linha->nome_da_empresa ?>',
							      start  : '<?php echo $this->buscar_linha->data ?>',
							    },
							    <?php } ?>
						    ],
					    });
					  });
					</script>
					<div id='calendar' style="margin-top:10px"></div>
					<?php
				}else{
				?>
				<center><h2>Nenhum lembrete marcado para essa data ou essa visita já foi concluida!</h2></center>
				<?php
				}
			}
		}
	}
	$instancia = new agenda();
	$instancia->ver_agenda();
?>
