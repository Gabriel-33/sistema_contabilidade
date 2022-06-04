<?php
  require 'conexao.php';
  class controle extends conexao{
    public $buscar;
    public $buscar_linha;
    public $buscar_2;     
    public $buscar_2_linha;
    public $buscar_3;     
    public $buscar_3_linha;
    public $buscar_4;
    public $buscar_4_linha;
    public $id;
    public $data;
    function listar_controle(){
      // var_dump($_POST);
      //delete option->>
      if (!empty($_POST['dados_fk']) AND !empty($_POST['dados_data'])) {
          $this->buscar = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa 
          ON gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON 
          gastos.fk_despesa = despesa.id_despesa INNER JOIN status_despesa ON 
          gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa AND ano=:ano");
          $this->buscar->bindValue(":fk_empresa",$_POST['dados_fk']);
          $this->buscar->bindValue(":ano",$_POST['dados_data']);
          $this->buscar->execute();
          $this->buscar_4 = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa ON gastos.fk_empresa = empresa.id_empresa
          INNER JOIN despesa ON gastos.fk_despesa = despesa.id_despesa INNER JOIN 
          status_despesa ON gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa 
          AND ano=:ano");
          $this->buscar_4->bindValue(":fk_empresa",$_POST['dados_fk']);
          $this->buscar_4->bindValue(":ano",$_POST['dados_data']);
          $this->buscar_4->execute();
          $this->buscar_2 = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa 
            ON gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON 
            gastos.fk_despesa = despesa.id_despesa INNER JOIN status_despesa ON 
            gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa AND ano=:ano");
          $this->buscar_2->bindValue(":fk_empresa",$_POST['dados_fk']);
          $this->buscar_2->bindValue(":ano",$_POST['dados_data']);
          $this->buscar_2->execute();
          $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ);
          $this->buscar_3 = $this->con->prepare("SELECT nome_da_empresa,num_pasta FROM empresa 
            WHERE id_empresa=:id_empresa");
          $this->buscar_3->bindValue(":id_empresa",$_POST['dados_fk']);
          $this->buscar_3->execute();
          $this->buscar_3_linha = $this->buscar_3->FETCH(PDO::FETCH_OBJ);
        }
        //even here-->
      if (!empty($_POST['dados']['0']['value'])) {
        $this->id = $_POST['dados']['0']['value'];
        if (!empty($_POST['dados']['1']['value'])) {
          $this->data = $_POST['dados']['1']['value'];
        }else{
          $this->data = 0;
        }
        $mes_nome = array(1=>"janeiro",2=>"Fevereiro",3=>"Março",4=>"Abril",5=>"Maio",6=>"Junho",7=>"Julho",8=>"Agosto",
          9=>"Setembro",10=>"Outubro",11=>"Novembro",12=>"Dezembro",
        );
        if (!empty($_POST['dados']['1']['value'])) {
          //verificando dados com ano
          $this->buscar = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa 
          ON gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON 
          gastos.fk_despesa = despesa.id_despesa INNER JOIN status_despesa ON 
          gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa AND ano=:ano");
          $this->buscar->bindValue(":fk_empresa",$this->id);
          $this->buscar->bindValue(":ano",$_POST['dados']['1']['value']);
          $this->buscar->execute();
          $this->buscar_4 = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa ON gastos.fk_empresa = empresa.id_empresa
          INNER JOIN despesa ON gastos.fk_despesa = despesa.id_despesa INNER JOIN 
          status_despesa ON gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa 
          AND ano=:ano");
          $this->buscar_4->bindValue(":fk_empresa",$this->id);
          $this->buscar_4->bindValue(":ano",$_POST['dados']['1']['value']);
          $this->buscar_4->execute();
          $this->buscar_2 = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa 
            ON gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON 
            gastos.fk_despesa = despesa.id_despesa INNER JOIN status_despesa ON 
            gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa AND ano=:ano");
          $this->buscar_2->bindValue(":fk_empresa",$this->id);
          $this->buscar_2->bindValue(":ano",$_POST['dados']['1']['value']);
          $this->buscar_2->execute();
          $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ);
          $this->buscar_3 = $this->con->prepare("SELECT nome_da_empresa,num_pasta FROM empresa 
            WHERE id_empresa=:id_empresa");
          $this->buscar_3->bindValue(":id_empresa",$this->id);
          $this->buscar_3->execute();
          $this->buscar_3_linha = $this->buscar_3->FETCH(PDO::FETCH_OBJ);
        }else{
          //verificando dados sem ano
          $this->buscar = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa 
          ON gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON 
          gastos.fk_despesa = despesa.id_despesa INNER JOIN status_despesa ON 
          gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa");
          $this->buscar->bindValue(":fk_empresa",$this->id);
          $this->buscar->execute();
          $this->buscar_4 = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa ON gastos.fk_empresa = empresa.id_empresa
          INNER JOIN despesa ON gastos.fk_despesa = despesa.id_despesa INNER JOIN status_despesa 
          ON gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa");
          $this->buscar_4->bindValue(":fk_empresa",$this->id);
          $this->buscar_4->execute();
          $this->buscar_2 = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa ON 
            gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON 
            gastos.fk_despesa = despesa.id_despesa INNER JOIN status_despesa 
            ON gastos.fk_status = status_despesa.id_status WHERE fk_empresa=:fk_empresa");
          $this->buscar_2->bindValue(":fk_empresa",$this->id);
          $this->buscar_2->execute();
          $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ);
          $this->buscar_3 = $this->con->prepare("SELECT nome_da_empresa,num_pasta FROM 
            empresa WHERE id_empresa=:id_empresa");
          $this->buscar_3->bindValue(":id_empresa",$this->id);
          $this->buscar_3->execute();
          $this->buscar_3_linha = $this->buscar_3->FETCH(PDO::FETCH_OBJ);
        }
        if ($this->buscar->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("button[data-role=controle_de_gastos]").click(function(){
                var id_controle_de_gastos = $(this).val();
                $("#excluir_controle_de_gastos").modal("show");
                $("#id_controle_de_gastos").val(id_controle_de_gastos);
              });
            });
          </script>
          <div class="modal fade" id="excluir_controle_de_gastos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Realmente deseja excluir esse(s) gasto(s)?</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success" id="excluir_true">Excluir</button>
                  <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                </div>
              </div>
            </div>
          </div>
          <center><strong style="color:#000">GASTOS DE EMPRESAS CADASTRADOS</strong></center>
          <button class="btn btn-danger fa fa-trash" id="excluir"></button>
          <form method="post" action="" id="excluir_form">
            <input type="hidden" name="id" value="<?php echo $_POST['dados']['0']['value'] ?>">
            <input type="hidden" name="data" value="<?php echo $_POST['dados']['1']['value'] ?>">
            <div class="table-responsive">
              <div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="dt-buttons btn-group" style="margin-bottom:5px">
                  <input type="button" class="btn btn-default" value="Gerar excel" id="btnExport">
                  <a href="pdf_despesa.php?id_empresa=<?php echo $this->id?>&data=<?php echo $this->data ?>" class="btn btn-default" value="Gerar pdf" id="btnExportPdf" target="_blank">Gerar pdf</a>
                </div>
              </div>
              <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                <thead>
                  <tr>
                    <th colspan="5"><center><?php echo utf8_encode($this->buscar_2_linha->nome_da_empresa) ?></center></th>
                    <th colspan="3"><center>Ações</center></th>
                  </tr>
                  <tr> 
                    <th>Despesa</th>
                    <th>Status</th>
                    <th>Mês</th>
                    <th>Ano</th>
                    <th>Valor</th>
                    <th>Editar</th>
                    <th><center>SELECIONAR<center><input type="checkbox" id="select_all" style="margin-left:20px"></center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                  ?>
                  <tr>
                    <td><?php echo utf8_encode($this->buscar_linha->nome_despesa)?></td>
                    <td>
                      <?php 
                        if(!empty($this->buscar_linha->nome_status)){
                          echo utf8_encode($this->buscar_linha->nome_status);
                        }
                      ?>
                    </td>
                    <td><?php echo $mes_nome[$this->buscar_linha->mes]?></td>
                    <td><?php echo $this->buscar_linha->ano?></td>
                    <?php
                      if ($this->buscar_linha->valor == "0.00") {
                      ?>
                      <td>-</td>
                      <?php
                      }else{
                      ?>
                      <td><?php echo number_format($this->buscar_linha->valor,2,',','.')?></td>
                      <?php
                      }
                    ?>
                    <td style="width: 10px"><a href="?pg=editar_controle_de_gastos&id_gastos=<?php echo $this->buscar_linha->id_gasto?>&aba=6" class="btn btn-primary fa fa-pencil"></a></td>
                    <td style="width: 10px"><center><input type="checkbox" id="empresa" name="id_gasto[]" value="<?php echo $this->buscar_linha->id_gasto?>"></center></td>
                  </tr>
                <?php 
                  } 
                ?>
                </tbody>
              </table>
            </div>
          </form>
          <div class="container">
            <table id="tblExport" hidden>
            <thead>
              <tr>
                <th colspan="5"><center><?php echo utf8_encode($this->buscar_2_linha->nome_da_empresa) ?></center></th>
              </tr>
              <tr> 
                <th>Despesa</th>
                <th>Status</th>
                <th>Mês</th>
                <th>Ano</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($this->buscar_4_linha = $this->buscar_4->FETCH(PDO::FETCH_OBJ)) {
              ?>
              <tr>
                <td><?php echo utf8_encode($this->buscar_4_linha->nome_despesa)?></td>
                <td>
                  <?php 
                    if(!empty($this->buscar_4_linha->nome_status)){
                      echo utf8_encode($this->buscar_4_linha->nome_status);
                    }
                  ?>
                </td>
                <td><?php echo $mes_nome[$this->buscar_4_linha->mes]?></td>
                <td><?php echo $this->buscar_4_linha->ano?></td>
                <?php
                  if ($this->buscar_4_linha->valor == "0.00") {
                  ?>
                    <td>-</td>
                  <?php
                  }else{
                  ?>
                  <td><?php echo number_format($this->buscar_4_linha->valor,2,'.','.')?></td>
                  <?php
                  }
                ?>
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
              saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'despesas_<?php echo date('d-m-Y') ?>.xlsx');
              });
            </script>
            <script type="text/javascript">
              var hc="<td colspan='5'><center><?php echo utf8_encode($this->buscar_3_linha->nome_da_empresa)?></center></td>"; 
              $(document).ready(function() {
                $("#select_all").click(function(){
                  if ($("#select_all").prop('checked')) {
                    $("form #empresa").prop('checked',true);
                  }else{
                    $("form #empresa").prop('checked',false);
                  }
                });
                $("#excluir").click(function(){
                  $("#excluir_controle_de_gastos").modal("show");
                });
                $("#excluir_true").click(function(){
                  $("#excluir_form").submit();
                });
              $('#example').DataTable( {
                  dom: 'Bfrtip',
                  buttons: [
                      {
                        extend: 'print',
                        exportOptions: {
                          columns: [0,1,2,3,4],
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
                } );
            });
            </script>
      <?php
        }else{
        ?>
        <center><h2>Nenhum registro encontrado para essa empresa!</h2></center>
        <?php
        }
      }
    }
  }
  $lista = new controle();
  $lista->listar_controle();
?>