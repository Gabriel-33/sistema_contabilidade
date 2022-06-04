<?php
  require "conexao.php";
  class modulos extends conexao{
    private $nome;
    private $senha;
    private $nova_senha;
    private $cf_senha;
    private $email;
    private $gmail;
    private $cor;
    private $img;
    private $img_tmp;
    private $num_pasta;
    private $num_insc;
    private $status;
    private $inicio;
    private $fim;
    private $data;
    private $obs;
    private $fk_contrato;
    private $area_total;
    private $area_utilizada;
    private $taxa_entrega_alva;
    private $pagamento_alva;
    private $arq_alva;
    private $envio_alva;
    private $taxa_ent_cp;
    private $pagamento_cp;
    private $arq_cp;
    private $ent_cp;
    private $ano_alva;
    private $tipo_despesa; 
    private $mes;
    private $ano; 
    private $status_despesa; 
    private $pdf;
    private $pdf_tmp;
    private $csv_tmp;
    private $txt_contrato;
    private $valor;
    public $arquivo;
    public $nivel;
    public $dado;
    public $dado_separado;
    public $inserir;
    public $verificar;
    public $verificar_2;
    public $atualizar;
    public $img_create;
    public $img_erro;
    public $img_red;
    public $img_altura_original;
    public $img_largura_original;
    public $img_nova_largura;
    public $img_nova_altura;
    public $bucar;
    public $buscar_linha;
    public $bucar_2;
    public $buscar_2_linha;
    public $bucar_3;
    public $buscar_3_linha;
    public $bucar_4;
    public $buscar_4_linha;
    public $fk_empresa;
    public $tipo_contrato;
    public $id;
    public $excluir;
    public $ext;
    public $contar_empresa;
    public $contar_empresa_linha;
    public $contar_alvara;
    public $contar_alvara_linha;
    public $contar_contrato;
    public $contar_contrato_linha;
    public $inicio_data;
    public $fim_data;
    function get_nome(){
      return $this->nome;
    }
    function set_nome($nome){
      $this->nome = $nome;
    }
    function get_data(){
      return $this->data;
    }
    function set_data($data){
      $this->data = $data;
    }
    function get_pdf(){
      return $this->pdf;
    }
    function set_pdf($pdf){
      $this->pdf = $pdf;
    }
    function set_csv($csv){
      $this->csv = $csv;
    }
    function get_csv(){
      return $this->csv;
    }
    function get_pdf_tmp(){
      return $this->pdf_tmp;
    }
    function set_pdf_tmp($pdf_tmp){
      $this->pdf_tmp = $pdf_tmp;
    }
    function get_mes(){
      return $this->mes;
    }
    function set_valor($valor){
      $this->valor = $valor;
    }
    function get_valor(){
      return $this->valor;
    }
    function set_mes($mes){
      $this->mes = $mes;
    }
    function get_statusDespesa(){
      return $this->status_despesa;
    }
    function set_statusDespesa($status_despesa){
      $this->status_despesa = $status_despesa;
    }
    function get_ano(){
      return $this->ano;
    }
    function set_ano($ano){
      $this->ano = $ano;
    }
    function get_tipoDespesa(){
      return $this->tipo_despesa;
    }
    function set_tipoDespesa($tipo_despesa){
      $this->tipo_despesa = $tipo_despesa;
    }
    function get_anoAlva(){
      return $this->ano_alva;
    }
    function set_anoAlva($ano_alva){
      $this->ano_alva = $ano_alva;
    }

    function get_areaTotal(){
      return $this->area_total;
    }
    function set_areaTotal($area_total){
      $this->area_total = $area_total;
    }
    function get_taxa_entCp(){
      return $this->taxa_ent_cp;
    }
    function set_taxa_entCp($taxa_ent_cp){
      $this->taxa_ent_cp = $taxa_ent_cp;
    }
    function get_pagamentoCp(){
      return $this->pagamento_cp;
    }
    function set_pagamentoCp($pagamento_cp){
      $this->pagamento_cp = $pagamento_cp;
    }
    function get_entCp(){
      return $this->ent_cp;
    }
    function set_entCp($ent_cp){
      $this->ent_cp = $ent_cp;
    }
    function set_arqCp($arq_cp){
      $this->arq_cp = $arq_cp;
    }
    function get_arqCp(){
      return $this->arq_cp;
    }
    function get_envioAlva(){
      return $this->envio_alva;
    }
    function set_envioAlva($envio_alva){
      $this->envio_alva = $envio_alva;
    }
    function get_arqAlva(){
      return $this->arq_alva;
    }
    function set_arqAlva($arq_alva){
      $this->arq_alva = $arq_alva;
    }
    function get_pagamentoAlva(){
      return $this->pagamento_alva;
    }
    function set_pagamentoAlva($pagamento_alva){
      $this->pagamento_alva = $pagamento_alva;
    }
    function get_txEntrega_alva(){
      return $this->taxa_entrega_alva;
    }
    function set_txEntrega_alva($taxa_entrega_alva){
      $this->taxa_entrega_alva = $taxa_entrega_alva;
    }
    function get_areaUtil(){
      return $this->area_util;
    }
    function set_areaUtil($area_utilizada){
      $this->area_utilizada = $area_utilizada;
    }
    function get_numInsc(){
      return $this->num_insc;
    }
    function set_numInsc($num_insc){
      $this->num_insc = $num_insc;
    }
    function get_fk_contrato(){
      return $this->fk_contrato;
    }
    function set_fk_contrato($fk_contrato){
      $this->fk_contrato = $fk_contrato;
    }
    function get_status(){
      return $this->status;
    }
    function set_status($status){
      $this->status = $status;
    }
    function get_num_pasta(){
      return $this->num_pasta;
    }
    function set_num_pasta($num_pasta){
      $this->num_pasta = $num_pasta;
    }
    function get_inicio(){
      return $this->inicio;
    }
    function set_inicio($inicio){
      $this->inicio = $inicio;
    }
    function get_fim(){
      return $this->fim;
    }
    function set_fim($fim){
      $this->fim = $fim;
    }
    function get_obs(){
      return $this->obs;
    }
    function set_obs($obs){
      $this->obs = $obs;
    }
    function get_senha(){
      return $this->senha;
    }
    function set_senha($senha){
      $this->senha = $senha;
    }
    function get_novaSenha(){
      return $this->nova_senha;
    }
    function set_novaSenha($nova_senha){
      $this->nova_senha = $nova_senha;
    }
    function get_cfSenha(){
      return $this->cf_senha;
    }
    function set_cfSenha($cf_senha){
      $this->cf_senha = $cf_senha;
    }
    function get_email(){
      return $this->email;
    }
    function set_email($email){
      $this->email = $email;
    }
    function get_gmail(){
      return $this->gmail;
    }
    function set_gmail($gmail){
      $this->gmail = $gmail;
    }
    function get_cor(){
      return $this->cor;
    }
    function set_cor($cor){
      $this->cor = $cor;
    }
    function get_img(){
      return $this->img;
    }
    function set_img($img){
      $this->img = $img;
    }
    function get_img_tmp(){
      return $this->img_tmp;
    }
    function set_img_tmp($img_tmp){
      $this->img_tmp = $img_tmp;
    }
    function get_txt_contrato(){
      return $this->txt_contrato;
    }
    function set_txt_contrato($txt_contrato){
      $this->txt_contrato = $txt_contrato;
    }
    function personalizar_sistema(){
      $this->buscar = $this->con->prepare("SELECT * FROM personal WHERE id_personal=1");
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ);
      if (!empty($_POST['nome_dash'])) {
        $this->id = $_GET['id_user'];
        if (!empty($this->img_tmp)) {
          if ($this->img_erro == 0) {
            if (mime_content_type($this->img_tmp) == "image/jpeg" || mime_content_type($this->img_tmp) == "image/png") {
                  $this->inserir = $this->con->prepare("UPDATE personal SET nome_dash=:nome_dash,
                    img_dash=:img_dash WHERE id_personal=1");
                  $this->inserir->bindValue(":nome_dash",utf8_decode($this->nome));
                  $this->inserir->bindValue(":img_dash","img_loja/".$this->img);
                  $this->inserir->execute();
                  $this->atualizar = $this->con->prepare("UPDATE user SET color_dash=:color_dash
                    WHERE id_user=:id_user");
                  $this->atualizar->bindValue(":color_dash",$this->cor);
                  $this->atualizar->bindValue(":id_user",$this->id);
                  $this->atualizar->execute();
                  if ($this->inserir->rowCount()>0) {
                    ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                      setTimeout(function(){location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>"} , 2000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Dash personalizada com sucesso!</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php
                    if (mime_content_type($this->img_tmp) == "image/jpeg") {
                    $this->img_create = imagecreatefromjpeg($this->img_tmp);
                    }else{
                      $this->img_create = imagecreatefrompng($this->img_tmp);
                    }
                    $this->img_largura_original = imagesx($this->img_create);
                    $this->img_altura_original = imagesy($this->img_create);
                    $this->img_nova_largura = $this->img_largura_original*0.35;
                    $this->img_nova_altura = $this->img_altura_original*0.35;
                    $this->img_red = imagecreatetruecolor($this->img_nova_largura, $this->img_nova_altura);
                    imagecopyresampled($this->img_red, $this->img_create, 0, 0, 0, 0, $this->img_nova_largura, $this->img_nova_altura, $this->img_largura_original, $this->img_altura_original);
                    if ($this->img_altura_original>550 AND $this->img_largura_original>550) {
                      if (mime_content_type($this->img_tmp) == "image/jpeg") {
                        imagejpeg($this->img_red,"img_loja/".$this->img);
                      }else{
                        imagepng($this->img_red,"img_loja/".$this->img);
                      }
                    }else{
                      move_uploaded_file($this->img_tmp, "img_loja/".$this->img);
                    }
                    if (!empty($this->buscar_linha->img_dash)) {
                      unlink($this->buscar_linha->img_dash);
                    }
                  }else{
                    ?>
                    <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_erro").modal("show");
                      setTimeout(function(){location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>"} , 2000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_erro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Erro ao personalizar dash. Tente novamente mais tarde</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php
                  }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_tipo_img").modal("show");
                setTimeout(function(){location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>"} , 3000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_tipo_img" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Envie somente imagens do tipo "JPG" ou "PNG"!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_warning").modal("show");
                setTimeout(function(){location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>"} , 4000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Verifique o tamanho da imagem!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
        }else{
          $this->verificar = $this->con->prepare("SELECT * FROM personal INNER JOIN user 
            WHERE nome_dash=:nome_dash");
          $this->verificar->bindValue(":nome_dash",utf8_decode($this->nome));
          $this->verificar->execute();
          $this->verificar_2 = $this->con->prepare("SELECT * FROM user WHERE color_dash=:color_dash 
            AND id_user=:id_user");
          $this->verificar_2->bindValue(":id_user",$this->id);
          $this->verificar_2->bindValue(":color_dash",$this->cor);
          $this->verificar_2->execute();
          if ($this->verificar->rowCount() == 0 OR $this->verificar_2->rowCount() == 0) {
          $this->inserir = $this->con->prepare("UPDATE personal SET nome_dash=:nome_dash
            WHERE id_personal=1");
          $this->inserir->bindValue(":nome_dash",utf8_decode($this->nome));
          $this->inserir->execute();
          $this->atualizar = $this->con->prepare("UPDATE user SET color_dash=:color_dash
            WHERE id_user=:id_user");
          $this->atualizar->bindValue(":color_dash",$this->cor);
          $this->atualizar->bindValue(":id_user",$this->id);
          $this->atualizar->execute();
          if ($this->inserir->rowCount()>0 OR $this->atualizar->rowCount()>0) {
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_warning").modal("show");
                setTimeout(function(){location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Dash personalizada com sucesso!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
           }
          }else{
          ?>
          <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_warning").modal("show");
                setTimeout(function(){location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $this->id = $_GET['id_user'] ?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Você inseriu os mesmos dados!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
        }
      }
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $("form #cor").change(function(){
          var cor = $(this).val();
          $.post("color.php",{cor:cor},function(data){
            $("#retorno").html(data);
              // Example using an event, to change the color of the .jumbotron background:
              $('#demo').colorpicker({format:'hex'}).on('changeColor', function(e) {
                $('#demo').colpickSetColor(true);
                $(this).parsley().validate();
              });
          });
        }); 
      });
    </script>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
      <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
          <center><span class="section">CUSTOMIZAR A DASHBOARD</span></center>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome da dashboard*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input id="name" value="<?php echo utf8_encode($this->buscar_linha->nome_dash)?>" type="text" name="nome_dash" class="form-control col-md-5 col-xs-12" 
              placeholder="Nome da dashboard" required="required" maxlength="40">
            </div>
          </div>
          <div class="item form-group">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12">Opção de cor:</label>
                <div class="col-md-8 col-sm-6 col-xs-6">
                  <select class="select2_single form-control" id="cor" name="cor">
                    <option value="1">Cor personalizada</option>
                    <option value="2" id="nova_cor">Nova cor</option>
                    <option value="3">Cor original</option>
                  </select>
                </div>
            </div>
          </div>
          <div class="item form-group" id="retorno">
          </div>
          <div class="item form-group">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12">Imagem da empresa:</label>
                <div class="col-md-8 col-sm-9 col-xs-12">
                  <input type="button" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar Foto">
                  <input type="file" name="img" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Imagem do usuário">
                </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
              <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
          </div>
        </form>
    <?php
    }
    function personalizar_user(){
      $this->buscar = $this->con->prepare("SELECT * FROM user WHERE id_user=:id_user");
      $this->buscar->bindValue(":id_user",$_SESSION['id_user']);
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ);
      if (!empty($this->nome) AND !empty($this->email)) {
        if (!empty($this->img_tmp)) {
          if ($this->img_erro == 0) {
            if (mime_content_type($this->img_tmp) == "image/jpeg" ||  mime_content_type($this->img_tmp) == "image/png") {
              $this->atualizar = $this->con->prepare("UPDATE user SET nome_user=:nome_user,img=:img,
                email_user=:email_user,gmail=:gmail WHERE id_user=:id_user");
              $this->atualizar->bindValue(":nome_user",utf8_decode($this->nome));
              $this->atualizar->bindValue(":img","img_user/".$this->img);
              $this->atualizar->bindValue(":email_user",$this->email);
              $this->atualizar->bindValue(":gmail",$this->gmail);
              $this->atualizar->bindValue(":id_user",$_SESSION['id_user']);
              $this->atualizar->execute();
              if ($this->atualizar->rowCount()>0) {
                ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      setTimeout(function(){location.href="?pg=personalizar_user&aba=3"} , 1000);   
                      $("#ok_alert").modal("show");
                      $("#ok").click(function(){
                        window.location.href="?pg=personalizar_user&aba=3";
                      });
                    });
                  </script>
                  <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Usuário atualizado com sucesso!</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                  if (mime_content_type($this->img_tmp) == "image/jpeg") {
                    $this->img_create = imagecreatefromjpeg($this->img_tmp);
                  }else{
                    $this->img_create = imagecreatefrompng($this->img_tmp);
                  }
                  $this->img_largura_original = imagesx($this->img_create);
                  $this->img_altura_original = imagesy($this->img_create);
                  $this->img_nova_largura = $this->img_largura_original*0.35;
                  $this->img_nova_altura = $this->img_altura_original*0.35;
                  $this->img_red = imagecreatetruecolor($this->img_nova_largura,$this->img_nova_altura);
                  imagecopyresampled($this->img_red, $this->img_create, 0, 0, 0, 0, $this->img_nova_largura, $this->img_nova_altura, $this->img_largura_original, $this->img_altura_original);
                  if ($this->img_altura_original>500 AND $this->img_largura_original>500) {
                    if (mime_content_type($this->img_tmp) == "image/jpeg") {
                      imagejpeg($this->img_red,"img_user/".$this->img);
                    }else{
                      imagepng($this->img_red,"img_user/".$this->img);
                    }
                  }else{
                    move_uploaded_file($this->img_tmp, "img_user/".$this->img);
                  }
                }
                if (!empty($this->buscar_linha->img)) {
                  unlink($this->buscar_linha->img);
                }
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  setTimeout(function(){location.href="?pg=personalizar_user&aba=3"} , 4000);
                  $("#erro_tipo").modal("show");
                  $("#ok").click(function(){
                    window.location.href="?pg=personalizar_user&aba=3";
                  });
                });
              </script>
              <div class="modal fade" id="erro_tipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Envie somente imagens "JPG" ou "PNG"</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
          }else{
          ?>
          <script type="text/javascript">
              $(document).ready(function(){
                setTimeout(function(){location.href="?pg=personalizar_user&aba=3"} , 3000);
                $("#erro_tipo_desc").modal("show");
                $("#ok").click(function(){
                  window.location.href="?pg=personalizar_user&aba=3";
                });
              });
            </script>
            <div class="modal fade" id="erro_tipo_desc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Algum erro ocorreu durante o envio da imagem. Verfique o tamanho da imagem</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
        }else{
         $this->buscar_2 = $this->con->prepare("SELECT * FROM user WHERE 
          nome_user=:nome_user AND email_user=:email_user AND gmail=:gmail AND id_user=:id_user");
          $this->buscar_2->bindValue(":nome_user",utf8_decode($this->nome));
          $this->buscar_2->bindValue(":email_user",$this->email);
          $this->buscar_2->bindValue(":gmail",$this->gmail);
          $this->buscar_2->bindValue(":id_user",$_SESSION['id_user']);
          $this->buscar_2->execute();
          if ($this->buscar_2->rowCount() == 0) {
            $this->atualizar = $this->con->prepare("UPDATE user SET nome_user=:nome_user,
              email_user=:email_user,gmail=:gmail WHERE id_user=:id_user");
            $this->atualizar->bindValue(":nome_user",utf8_decode($this->nome));
            $this->atualizar->bindValue(":email_user",$this->email);
            $this->atualizar->bindValue(":gmail",$this->gmail);
            $this->atualizar->bindValue(":id_user",$_SESSION['id_user']);
            $this->atualizar->execute();
            if ($this->atualizar->rowCount()>0) {
              ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=personalizar_user&aba=3"} , 1000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=personalizar_user&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Usuário atualizado com sucesso!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              setTimeout(function(){location.href="?pg=personalizar_user&aba=3"} , 2000);   
              $("#ok_alert").modal("show");
              $("#ok").click(function(){
                window.location.href="?pg=personalizar_user&aba=3";
              });
            });
          </script>
          <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                </div>
                <div class="modal-body">
                  <center><h2>Você inseriu os mesmos dados!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }
      }
    ?>
      <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
       <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
          <center><span class="section">CUSTOMIZAR O USUÁRIO</span></center>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Nome do usuário*:
            </label>
            <div class="col-md-8 col-sm-5 col-xs-12">
              <input id="name" maxlength="20" value="<?php echo utf8_encode($this->buscar_linha->nome_user)?>" type="text" name="nome_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Nome do usuário" required="required">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Email do usuário*: 
            </label>
            <div class="col-md-8 col-sm-5 col-xs-12">
              <input id="email_user" value="<?php echo utf8_encode($this->buscar_linha->email_user)?>" type="text" name="email_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Email do usuário" required="required" maxlength="30">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Gmail do usuário*:
            </label>
            <div class="col-md-8 col-sm-5 col-xs-11">
              <input id="email_user" value="<?php echo utf8_encode($this->buscar_linha->gmail)?>" type="email" name="gmail" class="form-control col-md-7 col-xs-12" 
              placeholder="Email do usuário" required="required" maxlength="30">
            </div>
            <a data-toggle="tooltip" title="Endereço de email para envio de código de login." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
          </div>
          <div class="item form-group">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-4 col-xs-12">Imagem do usuário:</label>
                <div class="col-md-8 col-sm-3 col-xs-12">
                  <input type="button" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar Foto">
                  <input type="file" name="img" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Imagem do usuário">
                </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
              <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
          </div>
        </form>
    <?php
    }
    function buscar_dados_sistema(){
      $this->buscar = $this->con->prepare("SELECT * FROM personal WHERE id_personal=1");
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ);
    }
    function buscar_user(){ 
      $this->buscar_2 = $this->con->prepare("SELECT * FROM user WHERE id_user=:id_user");
      $this->buscar_2->bindValue(":id_user",$_SESSION['id_user']);
      $this->buscar_2->execute();
      $this->buscar_2_linha = $this->buscar_2->fetch(PDO::FETCH_OBJ);

    }
    function personalizar_senha(){
      if (!empty($this->senha) AND !empty($this->nova_senha) AND !empty($this->cf_senha)) {
        $this->buscar = $this->con->prepare("SELECT senha FROM user WHERE senha=:senha AND id_user=:id_user");
        $this->buscar->bindValue(":senha",sha1($this->senha));
        $this->buscar->bindValue(":id_user",$_SESSION['id_user']);
        $this->buscar->execute();
        $this->verificar = $this->con->prepare("SELECT * FROM user WHERE senha=:senha");
        $this->verificar->bindValue(":senha",sha1($this->nova_senha));
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          if($this->buscar->rowCount()>0){
            if ($this->nova_senha == $this->cf_senha) {
                $this->atualizar = $this->con->prepare("UPDATE user SET senha=:senha WHERE id_user=:id_user");
                $this->atualizar->bindValue(":senha",sha1($this->nova_senha));
                $this->atualizar->bindValue(":id_user",$_SESSION['id_user']);
                $this->atualizar->execute();
                if ($this->atualizar->rowCount()>0) {
                  session_destroy();
                  unset($_SESSION);
                  unset($_POST);
                ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      setTimeout(function(){location.href="?pg=personalizar_senha&aba=3"} , 8000);   
                      $("#retorno_ok").modal("show");
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=personalizar_senha&aba=3";
                      });
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Senha alterada com sucesso. Por questões de segurança você será redirecionado(a) para página de login!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }else{
                ?>
                <script type="text/javascript">
                    $(document).ready(function(){
                      setTimeout(function(){location.href="?pg=personalizar_senha&aba=3"} , 4000);   
                      $("#retorno_ok").modal("show");
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=personalizar_senha&aba=3";
                      });
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Erro ao alterar senha. Tente novamente mais tarde!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                setTimeout(function(){location.href="?pg=personalizar_senha&aba=3"} , 4000);   
                $("#retorno_ok").modal("show");
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=personalizar_senha&aba=3";
                });
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>As novas senhas não batem. Verifique-as e tente novamente!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
              $(document).ready(function(){
                setTimeout(function(){location.href="?pg=personalizar_senha&aba=3"} , 4000);   
                $("#retorno_ok").modal("show");
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=personalizar_senha&aba=3";
                });
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Senha atual incorreta!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php 
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            setTimeout(function(){location.href="?pg=personalizar_senha&aba=3"} , 4000);   
            $("#retorno_ok").modal("show");
            $("#retorno_ok").click(function(){
              window.location.href="?pg=personalizar_senha&aba=3";
            });
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Você inseriu a mesma senha!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
        <center><span class="section">ALTERAR SENHA DE USUÁRIO</span></center>
        <div class="item form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Senha atual*:
          </label>
          <div class="col-md-8 col-sm-6 col-xs-11">
            <input id="name"  type="text" name="senha" class="form-control col-md-7 col-xs-12" 
            placeholder="Senha atual" required="required" maxlength="16">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nova senha*:
          </label>
          <div class="col-md-8 col-sm-6 col-xs-11">
            <input id="senha" type="text" name="nova_senha" class="form-control col-md-7 col-xs-12" 
            placeholder="Nova senha" required="required" maxlength="16">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Confirmar nova senha*:
          </label>
          <div class="col-md-8 col-sm-6 col-xs-11">
            <input id="senha_2" type="text" name="confirmar_nova_senha" class="form-control col-md-7 col-xs-12" 
            placeholder="Confirme a nova senha" required="required" maxlength="16">
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
        </div>
      </form>
    <?php
    }
    function cadastrar_admins(){
      if (!empty($this->nome) AND !empty($this->email) AND !empty($this->senha) AND !empty($this->id)) {
        if (!empty($this->img_tmp)) {
          if (mime_content_type($this->img_tmp) == "image/jpeg" || mime_content_type($this->img_tmp) == "image/png") {
              $this->inserir = $this->con->prepare("UPDATE user SET 
                nome_user=:nome_user,status=:status,img=:img,email_user=:email_user,senha=:senha,
                color_dash=:color_dash,gmail=:gmail WHERE id_user=:id_user");
              $this->inserir->bindValue(":nome_user",utf8_decode($this->nome));
              $this->inserir->bindValue(":status",1);
              $this->inserir->bindValue(":img","img_user/".$this->img);
              $this->inserir->bindValue(":email_user",$this->email);
              $this->inserir->bindValue(":gmail",$this->gmail);
              $this->inserir->bindValue(":senha",sha1($this->senha));
              $this->inserir->bindValue(":color_dash",null);
              $this->inserir->bindValue(":id_user",$this->id);
              $this->inserir->execute();
              if ($this->inserir->rowCount()>0) {
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 1000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=cadastrar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Administrador cadastrado com sucesso!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                if (mime_content_type($this->img_tmp) == "image/jpeg") {
                  $this->img_create = imagecreatefromjpeg($this->img_tmp);
                }else{
                  $this->img_create = imagecreatefrompng($this->img_tmp);
                }
                $this->img_largura_original = imagesx($this->img_create);
                $this->img_altura_original = imagesy($this->img_create);
                $this->img_nova_largura = $this->img_largura_original*0.35;
                $this->img_nova_altura = $this->img_altura_original*0.35;
                $this->img_red = imagecreatetruecolor($this->img_nova_largura, $this->img_nova_altura);
                imagecopyresampled($this->img_red, $this->img_create, 0, 0, 0, 0, $this->img_nova_largura, $this->img_nova_altura, $this->img_largura_original, $this->img_altura_original);
                  if ($this->img_nova_largura>500 AND $this->img_nova_altura>500) {
                    if (mime_content_type($this->img_tmp) == "image/jpeg") {
                    imagejpeg($this->img_red,"img_user/".$this->img);
                    }else{
                      imagepng($this->img_red,"img_user/".$this->img);
                    }
                  }else{
                    move_uploaded_file($this->img_tmp, "img_user/".$this->img);
                  }
              }else{
              ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 2000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=cadastrar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Erro ao cadastrar administrador. Tente novamente mais tarde!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 2000);   
                $("#ok_alert").modal("show");
                $("#ok").click(function(){
                  window.location.href="?pg=cadastrar_admins&aba=3";
                });
              });
            </script>
            <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Envie somente imagens do tipo "JPG" ou "PNG"!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
            $this->inserir = $this->con->prepare("UPDATE user SET 
                nome_user=:nome_user,status=:status,email_user=:email_user,senha=:senha,
                color_dash=:color_dash,gmail=:gmail WHERE id_user=:id_user");
              $this->inserir->bindValue(":nome_user",utf8_decode($this->nome));
              $this->inserir->bindValue(":status",1);
              $this->inserir->bindValue(":email_user",$this->email);
              $this->inserir->bindValue(":gmail",$this->gmail);
              $this->inserir->bindValue(":senha",sha1($this->senha));
              $this->inserir->bindValue(":color_dash",null);
              $this->inserir->bindValue(":id_user",$this->id);
            if ($this->inserir->rowCount()>0) {
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 1000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=cadastrar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Administrador cadastrado com sucesso!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }else{
              ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 2000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=cadastrar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Erro ao cadastrar administrador. Tente novamente mais tarde!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
          }
        }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
          <center><span class="section">CADASTRAR NOVO ADMINISTRADOR</span></center>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome do usuário*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input id="name" type="text" name="nome_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Nome do usuário" required="required" maxlength="30">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Email do usuário*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input id="email_user" type="text" name="email_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Email do usuário" required="required" maxlength="30">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Gmail do usuário*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-11">
              <input id="email_user" type="email" name="gmail_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Gmail do usuário" required="required" maxlength="30">
            </div>
            <a data-toggle="tooltip" title="Endereço de email para envio de código de login." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Senha do usuário*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input id="email_user" type="text" name="senha" class="form-control col-md-7 col-xs-12" 
              placeholder="Senha do usuário" required="required" maxlength="16">
            </div>
          </div>
          <div class="item form-group">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12">Imagem do usuário:</label>
                <div class="col-md-8 col-sm-9 col-xs-12">
                  <input type="button" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar Foto">
                  <input type="file" name="img" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Imagem do usuário">
                </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
              <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
          </div>
        </form>
    <?php  
    }
    function editar_admin(){
      $this->buscar = $this->con->prepare("SELECT * FROM user WHERE id_user=:id_user");
      $this->buscar->bindValue(":id_user",$this->id);
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ);
      if (!empty($this->nome) AND !empty($this->email)) {
        if ($this->buscar_linha->status == 1) {
          if (!empty($this->img_tmp)) {
          if ($this->img_erro == 0) {
            if (mime_content_type($this->img_tmp) == "image/jpeg" || mime_content_type($this->img_tmp) == "image/png") {
              $this->atualizar = $this->con->prepare("UPDATE user SET nome_user=:nome_user,img=:img,
                email_user=:email_user,gmail=:gmail WHERE id_user=:id_user");
              $this->atualizar->bindValue(":nome_user",utf8_decode($this->nome));
              $this->atualizar->bindValue(":img","img_user/".$this->img);
              $this->atualizar->bindValue(":email_user",$this->email);
              $this->atualizar->bindValue(":gmail",$this->gmail);
              $this->atualizar->bindValue(":id_user",$this->id);
              $this->atualizar->execute();
              if ($this->atualizar->rowCount()>0) {
                if (!empty($this->buscar_linha->img)) {
                }
                ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      setTimeout(function(){location.href="?pg=listar_admins&aba=3"} , 2000);   
                      $("#ok_alert").modal("show");
                      $("#ok").click(function(){
                        window.location.href="?pg=listar_admins&aba=3";
                      });
                    });
                  </script>
                  <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Usuário atualizado com sucesso!</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                  if (mime_content_type($this->img_tmp) == "image/jpeg") {
                    $this->img_create = imagecreatefromjpeg($this->img_tmp);
                  }else{
                    $this->img_create = imagecreatefrompng($this->img_tmp);
                  }
                  $this->img_largura_original = imagesx($this->img_create);
                  $this->img_altura_original = imagesy($this->img_create);
                  $this->img_nova_largura = $this->img_largura_original*0.35;
                  $this->img_nova_altura = $this->img_altura_original*0.35;
                  $this->img_red = imagecreatetruecolor($this->img_nova_largura,$this->img_nova_altura);
                  imagecopyresampled($this->img_red, $this->img_create, 0, 0, 0, 0, $this->img_nova_largura, $this->img_nova_altura, $this->img_largura_original, $this->img_altura_original);
                  if ($this->img_altura_original>500 AND $this->img_largura_original>500) {
                    if (mime_content_type($this->img_tmp) == "image/jpeg") {
                      imagejpeg($this->img_red,"img_user/".$this->img);
                    }else{
                      imagepng($this->img_red,"img_user/".$this->img);
                    }
                  }else{
                    move_uploaded_file($this->img_tmp, "img_user/".$this->img);
                  }
                }
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  setTimeout(function(){location.href="?pg=editar_admin&aba=3&id_admin=<?php echo $this->id?>"} , 4000);
                  $("#erro_tipo").modal("show");
                  $("#ok").click(function(){
                    window.location.href="?pg=editar_admin&aba=3&id_admin=<?php echo $this->id?>";
                  });
                });
              </script>
              <div class="modal fade" id="erro_tipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Envie somente imagens "JPG" ou "PNG"</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
          }else{
          ?>
          <script type="text/javascript">
              $(document).ready(function(){
                setTimeout(function(){location.href="?pg=editar_admin&aba=3&id_admin=<?php echo $this->id?>"} , 3000);
                $("#erro_tipo_desc").modal("show");
                $("#ok").click(function(){
                  window.location.href="?pg=editar_admin&aba=3&id_admin=<?php echo $this->id?>";
                });
              });
            </script>
            <div class="modal fade" id="erro_tipo_desc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Algum erro ocorreu durante o envio da imagem. Verfique o tamanho da imagem</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
        }else{
         $this->buscar_2 = $this->con->prepare("SELECT * FROM user WHERE 
          nome_user=:nome_user AND email_user=:email_user AND gmail=:gmail AND id_user=:id_user");
          $this->buscar_2->bindValue(":nome_user",utf8_decode($this->nome));
          $this->buscar_2->bindValue(":email_user",$this->email);
          $this->buscar_2->bindValue(":gmail",$this->gmail);
          $this->buscar_2->bindValue(":id_user",$this->id);
          $this->buscar_2->execute();
          if ($this->buscar_2->rowCount() == 0) {
            $this->atualizar = $this->con->prepare("UPDATE user SET nome_user=:nome_user,
              email_user=:email_user,gmail=:gmail WHERE id_user=:id_user");
            $this->atualizar->bindValue(":nome_user",utf8_decode($this->nome));
            $this->atualizar->bindValue(":email_user",$this->email);
            $this->atualizar->bindValue(":gmail",$this->gmail);
            $this->atualizar->bindValue(":id_user",$this->id);
            $this->atualizar->execute();
            if ($this->atualizar->rowCount()>0) {
              ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=listar_admins&aba=3"} , 1000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=listar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Usuário atualizado com sucesso!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              setTimeout(function(){location.href="?pg=listar_admins&aba=3"} , 2000);   
              $("#ok_alert").modal("show");
              $("#ok").click(function(){
                window.location.href="?pg=listar_admins&aba=3";
              });
            });
          </script>
          <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                </div>
                <div class="modal-body">
                  <center><h2>Você inseriu os mesmos dados!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
           }
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            setTimeout(function(){location.href="?pg=listar_admins&aba=3"} , 4500);   
            $("#ok_alert").modal("show");
            $("#ok").click(function(){
              window.location.href="?pg=listar_admins&aba=3";
            });
          });
        </script>
        <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
              </div>
              <div class="modal-body">
                <center><h2>Esse usuário é do tipo "Dono", logo você não tem permissão para edita-lo!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
      <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
       <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
          <center><span class="section">CUSTOMIZAR O USUÁRIO</span></center>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Nome do usuário*:
            </label>
            <div class="col-md-8 col-sm-5 col-xs-12">
              <input id="name" maxlength="20" value="<?php echo utf8_encode($this->buscar_linha->nome_user)?>" type="text" name="nome_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Nome do usuário" required="required">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Email do usuário*:
            </label>
            <div class="col-md-8 col-sm-5 col-xs-12">
              <input id="email_user" value="<?php echo utf8_encode($this->buscar_linha->email_user)?>" type="text" name="email_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Email do usuário" required="required" maxlength="30">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Gmail do usuário*:
            </label>
            <div class="col-md-8 col-sm-5 col-xs-11">
              <input id="email_user" value="<?php echo utf8_encode($this->buscar_linha->gmail)?>" type="email" name="gmail" class="form-control col-md-7 col-xs-12" 
              placeholder="Email do usuário" required="required" maxlength="30">
            </div>
            <a data-toggle="tooltip" title="Endereço de email para envio de código de login." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
          </div>
          <div class="item form-group">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-4 col-xs-12">Imagem do usuário:</label>
                <div class="col-md-8 col-sm-3 col-xs-12">
                  <input type="button" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar Foto">
                  <input type="file" name="img" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Imagem do usuário">
                </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
              <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
          </div>
        </form>
    <?php
    }
    function cadastrar_admin_root(){
      if (!empty($this->nome) AND !empty($this->email) AND !empty($this->senha)) {
        if (!empty($this->img_tmp)) {
          if (mime_content_type($this->img_tmp) == "image/jpeg" || mime_content_type($this->img_tmp) == "image/png") {
              $this->inserir = $this->con->prepare("INSERT INTO user(nome_user,status,img,email_user,senha,
                color_dash,gmail)VALUES(:nome_user,:status,:img,:email_user,:senha,:color_dash,:gmail)");
              $this->inserir->bindValue(":nome_user",utf8_decode($this->nome));
              $this->inserir->bindValue(":status",$this->nivel);
              $this->inserir->bindValue(":img","img_user/".$this->img);
              $this->inserir->bindValue(":email_user",$this->email);
              $this->inserir->bindValue(":gmail",$this->gmail);
              $this->inserir->bindValue(":senha",sha1($this->senha));
              $this->inserir->bindValue(":color_dash",null);
              $this->inserir->execute();
              if ($this->inserir->rowCount()>0) {
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 1000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=cadastrar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Administrador cadastrado com sucesso!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                if (mime_content_type($this->img_tmp) == "image/jpeg") {
                  $this->img_create = imagecreatefromjpeg($this->img_tmp);
                }else{
                  $this->img_create = imagecreatefrompng($this->img_tmp);
                }
                $this->img_largura_original = imagesx($this->img_create);
                $this->img_altura_original = imagesy($this->img_create);
                $this->img_nova_largura = $this->img_largura_original*0.35;
                $this->img_nova_altura = $this->img_altura_original*0.35;
                $this->img_red = imagecreatetruecolor($this->img_nova_largura, $this->img_nova_altura);
                imagecopyresampled($this->img_red, $this->img_create, 0, 0, 0, 0, $this->img_nova_largura, $this->img_nova_altura, $this->img_largura_original, $this->img_altura_original);
                  if ($this->img_nova_largura>500 AND $this->img_nova_altura>500) {
                    if (mime_content_type($this->img_tmp) == "image/jpeg") {
                    imagejpeg($this->img_red,"img_user/".$this->img);
                    }else{
                      imagepng($this->img_red,"img_user/".$this->img);
                    }
                  }else{
                    move_uploaded_file($this->img_tmp, "img_user/".$this->img);
                  }
              }else{
              ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 2000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=cadastrar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Erro ao cadastrar administrador. Tente novamente mais tarde!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 2000);   
                $("#ok_alert").modal("show");
                $("#ok").click(function(){
                  window.location.href="?pg=cadastrar_admins&aba=3";
                });
              });
            </script>
            <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Envie somente imagens do tipo "JPG" ou "PNG"!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
            $this->inserir = $this->con->prepare("INSERT INTO user(nome_user,status,email_user,senha,color_dash,gmail)
              VALUES(:nome_user,:status,:email_user,:senha,:color_dash,:gmail)");
            $this->inserir->bindValue(":nome_user",utf8_decode($this->nome));
            $this->inserir->bindValue(":status",$this->nivel);
            $this->inserir->bindValue(":email_user",$this->email);
            $this->inserir->bindValue(":gmail",$this->gmail);
            $this->inserir->bindValue(":senha",sha1($this->senha));
            $this->inserir->bindValue(":color_dash",null);
            $this->inserir->execute();
            if ($this->inserir->rowCount()>0) {
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 1000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=cadastrar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Administrador cadastrado com sucesso!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }else{
              ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_admins&aba=3"} , 2000);   
                    $("#ok_alert").modal("show");
                    $("#ok").click(function(){
                      window.location.href="?pg=cadastrar_admins&aba=3";
                    });
                  });
                </script>
                <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Erro ao cadastrar administrador. Tente novamente mais tarde!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
          }
        }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
          <center><span class="section">CADASTRAR NOVO ADMINISTRADOR</span></center>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome do usuário*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input id="name" type="text" name="nome_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Nome do usuário" required="required" maxlength="30">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Email do usuário*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input id="email_user" type="text" name="email_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Email do usuário" required="required" maxlength="30">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Gmail do usuário*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-11">
              <input id="email_user" type="email" name="gmail_user" class="form-control col-md-7 col-xs-12" 
              placeholder="Gmail do usuário" required="required" maxlength="30">
            </div>
            <a data-toggle="tooltip" title="Endereço de email para envio de código de login." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Senha do usuário*:
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input id="email_user" type="text" name="senha" class="form-control col-md-7 col-xs-12" 
              placeholder="Senha do usuário" required="required" maxlength="16">
            </div>
          </div>
          <div class="item form-group">
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-3 col-xs-12">Nível do usuário:</label>
              <div class="col-md-8 col-sm-6 col-xs-12">
                <select class="select2_single form-control" id="cor" name="nivel_user" required="required">
                  <option value="" selected="" disabled="">Selecione uma opção</option>
                    <option value="1">Funcionário</option>
                    <option value="2">Administrador geral(Dono)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="item form-group">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12">Imagem do usuário:</label>
                <div class="col-md-8 col-sm-9 col-xs-12">
                  <input type="button" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar Foto">
                  <input type="file" name="img" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Imagem do usuário">
                </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
              <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
          </div>
        </form>
    <?php  
    }
    function listar_admins(){
      $this->buscar = $this->con->prepare("SELECT * FROM user");
      $this->buscar->execute();
    ?>
    <center><strong style="color:#000">ADMINISTRADORES CADASTRADOS</strong></center>
    <div class="table table-responsive">
      <table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Imagem</th> 
            <th>Nome do administrador</th>
            <th>Email</th>
            <th>Gmail</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
          ?>
          <tr>
            <td>
              <?php
                if (!empty($this->buscar_linha->img)) {
                ?>
                <img src="<?php echo $this->buscar_linha->img?>" class="img img-rounded" style="max-height: 80px;max-width: 150px">
                <?php
                }else{
                ?>
                <img src="images/icon_user.png" style="max-height: 80px;max-width: 150px">
                <?php
                }
              ?>
            </td>
            <td><?php echo utf8_encode($this->buscar_linha->nome_user)?></td>
            <td><?php echo $this->buscar_linha->email_user?></td>
            <td><?php echo $this->buscar_linha->gmail?></td> 
          </tr>
        <?php 
          } 
        ?>
        </tbody>
      </table>
    </div>
      <script type="text/javascript">
        var hc="none";
        $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [1,2]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [1,2]
                    },
                },
                {
                    extend: 'pdf',
                    title:'Administradores',
                    exportOptions: {
                        columns: [1,2]
                    },
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
    }
    function listar_admin_root(){
      $this->buscar = $this->con->prepare("SELECT * FROM user");
      $this->buscar->execute();
      if (!empty($_POST['id_user'])) {
        $this->id = $_POST['id_user'];
        $this->verificar_2 = $this->con->prepare("SELECT * FROM user WHERE id_user=:id_user 
          AND status=2");
        $this->verificar_2->bindValue(":id_user",$this->id);
        $this->verificar_2->execute();
        if ($this->verificar_2->rowCount() == 0) {
            $this->excluir = $this->con->prepare("DELETE FROM user WHERE id_user=:id_user");
            $this->excluir->bindValue(":id_user",$this->id);
            $this->excluir->execute();
            if ($this->excluir->rowCount()>0) {
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                    setTimeout(function(){location.href="?pg=listar_admins&aba=3"} , 2000);
                  $("#retorno_ok").click(function(){
                      window.location.href="?pg=listar_admins&aba=3";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Usuário excluido com sucesso!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                    setTimeout(function(){location.href="?pg=listar_admins&aba=3"} , 2000);
                  $("#retorno_ok").click(function(){
                      window.location.href="?pg=listar_admins&aba=3";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Erro ao exclui usuário. Tente novamente mais tarde!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
          }else{
          ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=listar_admins&aba=3"} , 4000);
                $("#retorno_ok").click(function(){
                    window.location.href="?pg=listar_admins&aba=3";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Esse usuário não pode ser excluido pois ele é um usuário do tipo "Dono"!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
        }  
      }
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $("button[data-role=excluir_admin]").click(function(){
          var id_user = $(this).val();
          $("#id_user").val(id_user);
          $("#retorno_despesa").modal("show");
        });
      });
    </script>
    <div class="modal fade" id="retorno_despesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
          </div>
          <div class="modal-body">
            <center><h2>Realmente deseja excluir esse usuário?</h2></center>
          </div>
          <div class="modal-footer">
            <form method="post" action="?pg=listar_admins&aba=3">
              <input type="hidden" name="id_user" id="id_user">
              <button type="submit" class="btn btn-success">Excluir</button>
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <center><strong style="color:#000">ADMINISTRADORES CADASTRADOS</strong></center>
    <div class="table table-responsive">
      <table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Imagem</th> 
            <th>Nome do administrador</th>
            <th>Email</th>
            <th>Gmail</th>
            <th>Tipo de usuário</th>
            <th>Editar</th>
            <th>Excluir</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
          ?>
          <tr>
            <td>
              <?php
                if (!empty($this->buscar_linha->img)) {
                ?>
                <img src="<?php echo $this->buscar_linha->img?>" class="img img-rounded" style="max-height: 80px;max-width: 150px">
                <?php
                }else{
                ?>
                <img src="images/icon_user.png" style="max-height: 80px;max-width: 150px">
                <?php
                }
              ?>
            </td>
            <td><?php echo utf8_encode($this->buscar_linha->nome_user)?></td>
            <td><?php echo $this->buscar_linha->email_user?></td>
            <td><?php echo $this->buscar_linha->gmail?></td>
            <td>
              <?php if ($this->buscar_linha->status == 1) {
                echo "funcionário ";  
              }else{
                echo "dono";
              } 
              ?>
            </td>
            <td>
              <?php
                if ($this->buscar_linha->status == 2) {
                  echo "Usuário dono";
                }else{
                ?>
                <a href="?pg=editar_admin&aba=3&id_admin=<?php echo $this->buscar_linha->id_user?>" class="btn btn-primary fa fa-pencil"></a>
                <?php
                }
              ?>
            </td>
            <td>
              <?php
                if ($this->buscar_linha->status == 2) {
                  echo "Usuário dono";
                }else{
                ?>
                <button data-role="excluir_admin" value="<?php echo $this->buscar_linha->id_user?>" class="btn btn-danger fa fa-trash"></button>
                <?php
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
      <script type="text/javascript">
        var hc="none";
        $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [1,2,3,4]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [1,2,3,4]
                    },
                },
                {
                    extend: 'pdf',
                    title:'Administradores',
                    exportOptions: {
                        columns: [1,2,3,4]
                    },
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
    }
    function cadastrar_alvara(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      if (!empty($this->id) AND !empty($this->num_insc)) {
        $this->buscar_2 = $this->con->prepare("SELECT num_pasta FROM empresa WHERE id_empresa=:id_empresa");
        $this->buscar_2->bindValue(":id_empresa",$this->id);
        $this->buscar_2->execute();
        $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ);
        $this->verificar = $this->con->prepare("SELECT * FROM alvara WHERE ano=:ano AND insc=:insc AND empresa=:empresa");
        $this->verificar->bindValue(":empresa",$this->id);
        $this->verificar->bindValue(":insc",$this->num_insc);
        $this->verificar->bindValue(":ano",$this->ano_alva);
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          if (!empty($this->pdf_tmp)) {
            if(mime_content_type($this->pdf_tmp) == "application/pdf"){
              if (filesize($this->pdf_tmp)<=850000) {
                $this->inserir = $this->con->prepare("INSERT INTO alvara(ano,empresa,num_pasta,insc,area_t,area_u,pdf_alva,
                  te,tp,arq,ent,tp_cp,te_cp,arq_cp,ent_cp) VALUES(:ano,:empresa,:num_pasta,:insc,:area_t,:area_u,:pdf_alva,:te,:tp,:arq,:ent,:tp_cp,:te_cp,:arq_cp,:ent_cp)");
                $this->inserir->bindValue(":empresa",$this->id);
                $this->inserir->bindValue(":ano",$this->ano_alva);
                $this->inserir->bindValue(":num_pasta",$this->buscar_2_linha->num_pasta);
                $this->inserir->bindValue(":insc",$this->num_insc);
                $this->inserir->bindValue(":area_t",$this->area_total);
                $this->inserir->bindValue(":area_u",$this->area_utilizada);
                $this->inserir->bindValue(":pdf_alva","ViewerJS/pdf_alvara/".$this->pdf);
                $this->inserir->bindValue(":te",$this->taxa_entrega_alva);
                $this->inserir->bindValue(":tp",$this->pagamento_alva);
                $this->inserir->bindValue(":arq",$this->arq_alva);
                $this->inserir->bindValue(":ent",$this->envio_alva);
                $this->inserir->bindValue(":tp_cp",$this->pagamento_cp);
                $this->inserir->bindValue(":te_cp",$this->taxa_ent_cp);
                $this->inserir->bindValue(":arq_cp",$this->arq_cp);
                $this->inserir->bindValue(":ent_cp",$this->ent_cp);
                $this->inserir->execute();
                if ($this->inserir->rowCount()>0) {
                  move_uploaded_file($this->pdf_tmp, "ViewerJS/pdf_alvara/".$this->pdf);
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_alvara&aba=5"} , 2000);   
                    $("#retorno_ok").modal("show");
                    $("#retorno_ok").click(function(){
                      window.location.href="?pg=cadastrar_alvara&aba=5";
                    });
                  });
                </script>
                <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Alvará cadastrado com sucesso</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }else{
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    setTimeout(function(){location.href="?pg=cadastrar_alvara&aba=5"} , 2000);   
                    $("#retorno_ok").modal("show");
                    $("#retorno_ok").click(function(){
                      window.location.href="?pg=cadastrar_alvara&aba=5";
                    });
                  });
                </script>
                <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Erro ao cadastrar alvará .Tente novamente mais tarde</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  setTimeout(function(){location.href="?pg=cadastrar_alvara&aba=5"} , 3000);   
                  $("#retorno_ok").modal("show");
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=cadastrar_alvara&aba=5";
                  });
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Envie documentos pdf até 850 kbytes</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                setTimeout(function(){location.href="?pg=cadastrar_alvara&aba=5"} , 3000);   
                $("#retorno_ok").modal("show");
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=cadastrar_alvara&aba=5";
                });
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Envie somente documentos do tipo "PDF"</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
              $this->inserir = $this->con->prepare("INSERT INTO alvara(ano,empresa,num_pasta,insc,area_t,area_u,te,tp,arq,ent,tp_cp,te_cp,arq_cp,ent_cp) VALUES(:ano,:empresa,:num_pasta,:insc,:area_t,:area_u,:te,:tp,:arq,:ent,:tp_cp,:te_cp,:arq_cp,:ent_cp)");
              $this->inserir->bindValue(":empresa",$this->id);
              $this->inserir->bindValue(":ano",$this->ano_alva);
              $this->inserir->bindValue(":num_pasta",$this->buscar_2_linha->num_pasta);
              $this->inserir->bindValue(":insc",$this->num_insc);
              $this->inserir->bindValue(":area_t",$this->area_total);
              $this->inserir->bindValue(":area_u",$this->area_utilizada);
              $this->inserir->bindValue(":te",$this->taxa_entrega_alva);
              $this->inserir->bindValue(":tp",$this->pagamento_alva);
              $this->inserir->bindValue(":arq",$this->arq_alva);
              $this->inserir->bindValue(":ent",$this->envio_alva);
              $this->inserir->bindValue(":tp_cp",$this->pagamento_cp);
              $this->inserir->bindValue(":te_cp",$this->taxa_ent_cp);
              $this->inserir->bindValue(":arq_cp",$this->arq_cp);
              $this->inserir->bindValue(":ent_cp",$this->ent_cp);
              $this->inserir->execute();
              if ($this->inserir->rowCount()>0) {
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  setTimeout(function(){location.href="?pg=cadastrar_alvara&aba=5"} , 2000);   
                  $("#retorno_ok").modal("show");
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=cadastrar_alvara&aba=5";
                  });
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Alvará cadastrado com sucesso</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  setTimeout(function(){location.href="?pg=cadastrar_alvara&aba=5"} , 2000);   
                  $("#retorno_ok").modal("show");
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=cadastrar_alvara&aba=5";
                  });
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Erro ao cadastrar alvará .Tente novamente mais tarde</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
            }
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              setTimeout(function(){location.href="?pg=cadastrar_alvara&aba=5"} , 2000);   
              $("#retorno_ok").modal("show");
              $("#retorno_ok").click(function(){
                window.location.href="?pg=cadastrar_alvara&aba=5";
              });
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Esse alvará, com esses dados já está cadastrado</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
      }
    ?>  <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
        <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" autocomplete="off" data-parsley-validate>
          <center><span class="section">CADASTRAR ALVARÁ</span></center>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-2 col-xs-12" for="name">Razão social*:
            </label>
            <div class="col-md-7 col-sm-9 col-xs-11">
              <select class="select2_single form-control" id="cor" name="fk_empresa" required="required">
                <option value="" selected="" disabled="">Selecione uma opção</option>
                <?php
                  while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                  ?>
                  <option value="<?php echo $this->buscar_linha->id_empresa?>"><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
                  <?php
                  }
                ?>
              </select>
            </div>
            <a href="?pg=cadastrar_empresa&aba=1" data-toggle="tooltip" title="Esse dado vem da opção 'cadastrar empresa', na aba empresa." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-2 col-xs-12" for="name">N° da insc. municipal*:<span class="required"></span>
            </label>
            <div class="col-md-7 col-sm-9 col-xs-12">
              <input id="name" type="text" name="num_insc_social" class="form-control col-md-7 col-xs-12" 
              placeholder="N° da inscrição municipal" required="required" maxlength="18">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-2 col-xs-12" for="name">Ano alvará*:<span class="required"></span>
            </label>
            <div class="col-md-7 col-sm-9 col-xs-12">
              <input id="ano_alva" type="text" name="ano_alva" class="form-control col-md-7 col-xs-12" 
              placeholder="Ano alvará" required="required" data-mask="0000">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-2 col-xs-12" for="area_total">Área total:<span class="required"></span>
            </label>
            <div class="col-md-7 col-sm-9 col-xs-12">
              <input id="demo1" type="text" name="area_total"  class="form-control col-md-7 col-xs-12" 
              placeholder="Área total" maxlength="12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-2 col-xs-12" for="area_total">Área utilizada:<span class="required"></span>
            </label>
            <div class="col-md-7 col-sm-9 col-xs-12">
              <input id="demo2" type="text" name="area_utilizada"  class="form-control col-md-7 col-xs-12" 
              placeholder="Área utilizada" maxlength="12">
            </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12">Taxa de entrega alvará:</label>
              <div class="col-md-7 col-sm-9 col-xs-12">
                <select class="select2_single form-control" id="cor" name="taxa_entrega_alva">
                    <option disabled="" selected="">Selecione uma opção</option>
                    <option value="1">Ok</option>
                    <option value="0">-</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12">Pagamento do alvará:</label>
              <div class="col-md-7 col-sm-9 col-xs-12">
                <select class="select2_single form-control" id="cor" name="pagamento_alva">
                    <option disabled="" selected="">Selecione uma opção</option>
                    <option value="1">Ok</option>
                    <option value="0">-</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12">Arquivamento do alvará:</label>
              <div class="col-md-7 col-sm-9 col-xs-12">
                <select class="select2_single form-control" id="cor" name="arq_alva">
                    <option disabled="" selected="">Selecione uma opção</option>
                    <option value="1">Ok</option>
                    <option value="0">-</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12">Envio do alvará:</label>
              <div class="col-md-7 col-sm-9 col-xs-12">
                <select class="select2_single form-control" id="cor" name="envio_alva">
                    <option disabled="" selected="">Selecione uma opção</option>
                    <option value="1">Ok</option>
                    <option value="0">-</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12">Tx Ent. corpo bomb. :</label>
              <div class="col-md-7 col-sm-9 col-xs-12">
                <select class="select2_single form-control" id="cor" name="taxa_ent_cp">
                    <option disabled="" selected="">Selecione uma opção</option>
                    <option value="1">Ok</option>
                    <option value="0">-</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12">Pag. corpo bomb. :</label>
              <div class="col-md-7 col-sm-9 col-xs-12">
                <select class="select2_single form-control" id="cor" name="pagamento_cp">
                    <option disabled="" selected="">Selecione uma opção</option>
                    <option value="1">Ok</option>
                    <option value="0">-</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12">Arq. corpo bomb. :</label>
              <div class="col-md-7 col-sm-9 col-xs-12">
                <select class="select2_single form-control" id="cor" name="arq_cp">
                    <option disabled="" selected="">Selecione uma opção</option>
                    <option value="1">Ok</option>
                    <option value="0">-</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12">Envio. corpo bomb. :</label>
              <div class="col-md-7 col-sm-9 col-xs-12">
                <select class="select2_single form-control" id="cor" name="ent_cp">
                    <option disabled="" selected="">Selecione uma opção</option>
                    <option value="1">Ok</option>
                    <option value="0">-</option>
                </select>
              </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-2 col-xs-12 col-lg-3">Alvará da empresa:</label>
            <div class="col-md-3 col-sm-3 col-xs-8 col-lg-2">
              <input type="button" id="btn_img" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar pdf">
              <input type="file" name="pdf_alva" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Alvará da empresa">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
              <a data-toggle="tooltip" title="Documento de alvará até 850 kbytes. Escaneie as páginas em até 150 dpi." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
            </div>  
          </div>
          <div class="form-group">
              <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
          </div>
        </form>
    <?php
    }
    function cadastrar_empresa(){
      if (!empty($this->nome) AND !empty($this->num_pasta)) {
        $this->verificar = $this->con->prepare("SELECT * FROM empresa WHERE num_pasta=:num_pasta OR nome_da_empresa=:nome_da_empresa");
        $this->verificar->bindValue(":num_pasta",utf8_decode($this->num_pasta));
        $this->verificar->bindValue(":nome_da_empresa",utf8_decode($this->nome));
        $this->verificar->execute();
        if ($this->verificar->rowCount()>0) {
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=cadastrar_empresa&aba=1"} , 3000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=cadastrar_empresa&aba=1";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Já existe uma empresa com esse nome ou número de pasta cadastrada!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }else{
          $this->inserir = $this->con->prepare("INSERT INTO empresa(nome_da_empresa,num_pasta) VALUES(:nome_da_empresa,:num_pasta)");
          $this->inserir->bindValue(":nome_da_empresa",utf8_decode($this->nome));
          $this->inserir->bindValue(":num_pasta",utf8_decode($this->num_pasta));
          $this->inserir->execute();
          if ($this->inserir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=cadastrar_empresa&aba=1"} , 2000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=cadastrar_empresa&aba=1";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Empresa cadastrada com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=cadastrar_empresa&aba=1"} , 3500);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=cadastrar_empresa&aba=1";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao cadastrar empresa. Tente novamente mais tarde!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate>
      <center><span class="section">CADASTRAR EMPRESA <a href="?pg=cadastrar_empresa_csv&aba=1" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Enviar arquivo csv com dados de empresas"><i class="fa fa-plus"></i></a></span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome da empresa*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-11">
          <input id="name" type="text" name="nome_empresa" class="form-control col-md-7 col-xs-12" 
          placeholder="Nome da empresa" required="required" maxlength="60" autocomplete="off">
        </div>
          <a data-toggle="tooltip" title="Diferencie matriz de filial no nome e número da pasta.EX:empresa-filial. N° 124/f" style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
        </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Número da pasta*: 
        </label>
        <div class="col-md-8 col-sm-6 col-xs-11">
          <input id="name" type="text" name="num_pasta" class="form-control col-md-7 col-xs-12" 
          placeholder="Número da pasta" required="required" maxlength="10" autocomplete="off">
        </div>
      </div>
      <div class="item form-group" id="retorno">
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function cadastrar_empresa_csv(){
      if (!empty($this->nome) AND !empty($this->csv)) {
        $this->ext = pathinfo($this->nome,PATHINFO_EXTENSION);
        if ($this->ext == "csv") {
          $this->arquivo = fopen($this->csv, "r");
          while ($this->dado = fgetcsv($this->arquivo)) {
            $this->dado_separado = explode(";", $this->dado[0]);
            $this->inserir = $this->con->prepare("INSERT INTO empresa(nome_da_empresa,num_pasta) VALUES(:nome_da_empresa,:num_pasta)");
            $this->inserir->bindValue(":nome_da_empresa",$this->dado_separado[1]);
            $this->inserir->bindValue(":num_pasta",$this->dado_separado[0]);
            $this->inserir->execute();
            // var_dump($this->dado_separado[1]);
            if ($this->inserir->rowCount()) {
            ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 4000);
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=listar_empresas&aba=1";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Empresas cadastradas com sucesso através de arquivo csv!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }else{
            ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=cadastrar_empresa_csv&aba=1"} , 4000);
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=cadastrar_empresa_csv&aba=1";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Erro ao cadastrar empresas através de arquivo csv. Tente novamente mais tarde!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=cadastrar_empresa_csv&aba=1"} , 4000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=cadastrar_empresa_csv&aba=1";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Envie apenas arquivos excel do tipo "CSV"!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate>
      <center><span class="section">CADASTRAR EMPRESA(S) ATRAVÉS DE ARQUIVO CSV</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Arquivo csv*:
        </label>
        <div class="col-md-3 col-sm-3 col-xs-8 col-lg-2">
          <input type="button" id="btn_img" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar csv">
          <input type="file" name="csv" id="getFile" style="display:none;margin-top:18px!important" required="" class="material-control tooltips-general" placeholder="Csv da(s) empresa(s)">
        </div>
      </div>
      <div class="item form-group" id="retorno">
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function listar_empresas(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      if (!empty($_POST['id_empresa'])) {
        $this->id = $_POST['id_empresa'];
        $i = 0;
        while (count($this->id)>$i) {
          $this->verificar = $this->con->prepare("SELECT * FROM contrato WHERE nome_empresa=:nome_empresa");
          $this->verificar->bindValue(":nome_empresa",$this->id[$i]);
          $this->verificar->execute();
          if ($this->verificar->rowCount() == 0) {
            $this->buscar_2 = $this->con->prepare("SELECT * FROM gastos WHERE fk_empresa=:fk_empresa");
            $this->buscar_2->bindValue(":fk_empresa",$this->id[$i]);
            $this->buscar_2->execute();
            $this->buscar_3 = $this->con->prepare("SELECT * FROM alvara WHERE empresa=:empresa");
            $this->buscar_3->bindValue(":empresa",$this->id[$i]);
            $this->buscar_3->execute();
            $this->buscar_4 = $this->con->prepare("SELECT * FROM agenda WHERE fk_empresa=:fk_empresa");
            $this->buscar_4->bindValue(":fk_empresa",$this->id[$i]);
            $this->buscar_4->execute();
            if ($this->buscar_4->rowCount() == 0) {
              if ($this->buscar_3->rowCount() == 0) {
                if ($this->buscar_2->rowCount() == 0) {
                  $this->excluir = $this->con->prepare("DELETE FROM empresa WHERE id_empresa=:id_empresa");
                  $this->excluir->bindValue(":id_empresa",$this->id[$i]);
                  $this->excluir->execute();
                  if ($this->excluir->rowCount()>0) {
                  ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                      setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 4000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=listar_empresas&aba=1";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Empresa(s) excluida(s) com sucesso!</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  }else{
                  ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                      setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 4000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=listar_empresas&aba=1";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Erro ao excluir empresa(s). Tente novamente mais tarde!</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  }
                }else{
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $("#retorno_ok").modal("show");
                    setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 15000);
                    $("#retorno_ok").click(function(){
                      window.location.href="?pg=listar_empresas&aba=1";
                    });  
                  });
                </script>
                <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Há 
                          empresa(s) vinculada(s) á gasto(s) cadastrado(s) no setor contábil(aba exibir controle de gastos). Exclua primeiro o(s) gasto(s) para depois excluir essa(s) empresa(s)!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 15000);
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=listar_empresas&aba=1";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Há empresa(s) vinculada á alvará(s) cadastrado(s). Exclua primeiro o(s) alvará(s) para depois excluir essa(s) empresa(s)!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 15000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=listar_empresas&aba=1";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Há empresa(s) com evento(s) vinculado à ela(s). Exclua primeiro o(s) evento(s) na aba agenda e tente novamente!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 15000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=listar_empresas&aba=1";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Há empresa(s) com 
                      contrato(s) vinculado(s) à ela(s), logo não pode(m) ser excluida(s), exclua o(s) contrato(s) e tente novamente!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          $i++;
        }
      }
    ?>
    <div class="modal fade" id="modal_excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
          </div>
          <div class="modal-body">
            <center><h2>Realmente deseja excluir essa(s) empresa(s)?</h2></center>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="excluir_true">Excluir</button>
            <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <center><strong style="color:#000;">EMPRESAS CADASTRADAS</strong></center>
    <div class="col-md-2" style="margin-top:40px;">
    <button data-toggle="tooltip" title="Exclusão de empresas selecionadas na tabela" class="btn btn-danger fa fa-trash" id="excluir"></button>
    <a data-toggle="tooltip" title="Empresas que possuem contrato, despesa,evento ou alvará vinculados a ela, não poderão ser excluidas. Para solicitar a exclusão, exclua primeiro os dados vinculado a essa(s) empresa(s)" style="font-size: 20px;color:rgb(0,150,255);margin-left:10px;margin-top:40px"><i class="fa fa-info-circle"></i></a>
    </div>
    <form method="post" action="">
    <div class="table table-responsive" style="margin-top:14px">
      <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
          <tr>
            <th style="width: 80px">N° da pasta</th>
            <th>Razão social</th> 
            <th style="width: 30px">Editar</th>
            <th style="width: 30px"><center>SELECIONAR</center><center>
              <input type="checkbox" id="select_all" style="margin-left:20px"></center>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
          ?>
          <tr>
            <td><?php echo utf8_encode($this->buscar_linha->num_pasta)?></td>
            <td><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></td>
            <td><a href="?pg=editar_empresa&aba=1&id_empresa=<?php echo $this->buscar_linha->id_empresa?>" class="btn btn-primary fa fa-pencil"></a></td>
            <td><center><input type="checkbox" name="id_empresa[]" id="empresa" value="<?php echo $this->buscar_linha->id_empresa?>"></center></td> 
          </tr>
        <?php 
          } 
        ?>
        </tbody>
      </table>
    </div>
    </form>
      <script type="text/javascript">
        var hc="none";
        $(document).ready(function() {
        $("#select_all").click(function(){
          if ($("#select_all").prop('checked')) {
            $("form #empresa").prop('checked',true);
          }else{
            $("form #empresa").prop('checked',false);
          }
        });
        $("#excluir").click(function(){
          $("#modal_excluir").modal("show");
        });
        $("#excluir_true").click(function(){
          $("form").submit();
        });
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                  extend: 'print',
                  exportOptions: {
                      columns: [0,1]
                  }
                },
                {
                  extend: 'excelHtml5',
                  exportOptions: {
                      columns: [0,1],
                  },
                },
                {
                  extend: 'pdf',
                  title:'Empresas',
                  exportOptions: {
                      columns: [0,1]
                  },
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
    }
    function cadastrar_contrato(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      $this->buscar_2 = $this->con->prepare("SELECT * FROM tipo_contrato");
      $this->buscar_2->execute();
      if (!empty($this->nome) AND !empty($this->fk_contrato) AND !empty($this->inicio) AND !empty($this->fim)
        AND isset($this->status)) {
          $this->buscar_3 = $this->con->prepare("SELECT num_pasta FROM empresa WHERE id_empresa=:id_empresa");
          $this->buscar_3->bindValue(":id_empresa",$this->nome);
          $this->buscar_3->execute();
          $this->buscar_3_linha = $this->buscar_3->FETCH(PDO::FETCH_OBJ);
       if (!empty($this->pdf_tmp)) {
        if(mime_content_type($this->pdf_tmp) == "application/pdf"){
          if (filesize($this->pdf_tmp)<=850000) {
            $this->inserir = $this->con->prepare("INSERT INTO contrato(pdf_contrato,num_da_pasta,
              nome_empresa,tipo_de_contrato,inicio,fim,status,texto,descricao) 
            VALUES(:pdf_contrato,:num_da_pasta,:nome_empresa,:tipo_de_contrato,:inicio,:fim,
              :status,:texto,:descricao)");
            $this->inserir->bindValue(":pdf_contrato","ViewerJS/pdf_contrato/".$this->pdf);
            $this->inserir->bindValue(":num_da_pasta",$this->buscar_3_linha->num_pasta);
            $this->inserir->bindValue(":nome_empresa",$this->nome);
            $this->inserir->bindValue(":tipo_de_contrato",$this->fk_contrato);
            $this->inserir->bindValue(":inicio",$this->inicio);
            $this->inserir->bindValue(":fim",$this->fim);
            $this->inserir->bindValue(":status",$this->status);
            $this->inserir->bindValue(":texto",utf8_decode($this->txt_contrato));
            $this->inserir->bindValue(":descricao",utf8_decode($this->obs));
            $this->inserir->execute();
            if ($this->inserir->rowCount()>0) {
              move_uploaded_file($this->pdf_tmp, "ViewerJS/pdf_contrato/".$this->pdf);
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  setTimeout(function(){location.href="?pg=cadastrar_contrato&aba=2"} , 1000);   
                  $("#ok_alert").modal("show");
                  $("#ok").click(function(){
                    window.location.href="?pg=cadastrar_contrato&aba=2";
                  });
                });
              </script>
              <script type="text/javascript">
                  $(document).ready(function(){
                    $("#retorno_ok").modal("show");
                    setTimeout(function(){location.href="?pg=cadastrar_contrato&aba=2"} , 1000);
                    $("#retorno_ok").click(function(){
                      window.location.href="?pg=cadastrar_contrato&aba=2";
                    });  
                  });
                </script>
                <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Contrato cadastrado com sucesso!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=cadastrar_contrato&aba=2"} , 4000);
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=cadastrar_contrato&aba=2";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Erro ao cadastrar contrato. Tente novamente mais tarde!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                setTimeout(function(){location.href="?pg=cadastrar_contrato&aba=2"} , 3000);   
                $("#ok_alert").modal("show");
                $("#ok").click(function(){
                  window.location.href="?pg=cadastrar_contrato&aba=2";
                });
              });
            </script>
            <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Envie um pdf de tamanho até 850 kbytes!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
        }else{
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
              setTimeout(function(){location.href="?pg=cadastrar_contrato&aba=2"} , 3000);   
              $("#ok_alert").modal("show");
              $("#ok").click(function(){
                window.location.href="?pg=cadastrar_contrato&aba=2";
              });
            });
          </script>
          <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
                </div>
                <div class="modal-body">
                  <center><h2>Envie somente documentos no formato "PDF"!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
       }else{
        $this->inserir = $this->con->prepare("INSERT INTO contrato(num_da_pasta,nome_empresa,tipo_de_contrato,inicio,fim,
          status,texto,descricao) VALUES(:num_da_pasta,:nome_empresa,:tipo_de_contrato,:inicio,
          :fim,:status,:texto,:descricao)");
        $this->inserir->bindValue(":num_da_pasta",$this->buscar_3_linha->num_pasta);
        $this->inserir->bindValue(":nome_empresa",$this->nome);
        $this->inserir->bindValue(":tipo_de_contrato",$this->fk_contrato);
        $this->inserir->bindValue(":inicio",$this->inicio);
        $this->inserir->bindValue(":fim",$this->fim);
        $this->inserir->bindValue(":status",$this->status);
        $this->inserir->bindValue(":texto",utf8_decode($this->txt_contrato));
        $this->inserir->bindValue(":descricao",utf8_decode($this->obs));
        $this->inserir->execute();
        if ($this->inserir->rowCount()) {
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            setTimeout(function(){location.href="?pg=cadastrar_contrato&aba=2"} , 1000);   
            $("#retorno_ok").modal("show");
            $("#retorno_ok").click(function(){
              window.location.href="?pg=cadastrar_contrato&aba=2";
            });
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Contrato cadastrado com sucesso!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            setTimeout(function(){location.href="?pg=cadastrar_contrato&aba=2"} , 2000);   
            $("#ok_alert").modal("show");
            $("#ok").click(function(){
              window.location.href="?pg=cadastrar_contrato&aba=2";
            });
          });
        </script>
        <div class="modal fade" id="ok_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <center><h2 class="modal-title" id="myModalLabel">Atenção</h2></center>
              </div>
              <div class="modal-body">
                <center><h2>Erro ao cadastrar contrato. Tente novamente mais!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" id="ok" class="btn btn-primary" data-dismiss="modal">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
       }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#periodo').change(function() {
          var periodo = $(this).val();
          $.post("data_contrato.php",{periodo:periodo,mod:'cadastrar'},function(e){
            $("#retorno").html(e);
            $('#myDatepicker2').datetimepicker({
              format: 'DD/MM/YYYY',
              locale: 'pt-br',
            });
            $('#myDatepicker').datetimepicker({
              format: 'DD/MM/YYYY',
              locale: 'pt-br',
            });
            $('#myDatepicker').datetimepicker().on('dp.change', function(e) {
              $(this).parsley().validate();
            });
            $('#myDatepicker2').datetimepicker().on('dp.change', function(e) {
              $(this).parsley().validate();
            });
          });
        });
      }); 
    </script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">CADASTRAR CONTRATO</span></center>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nome da empresa*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-11">
          <select class="form-control" name="id_empresa" required="required">
            <option value="" selected="" disabled="">Escolha uma opção</option>
            <?php
              while ($this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ)) {
              ?>
              <option value="<?php echo $this->buscar_linha->id_empresa?>"><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
              <?php
              }
            ?>          
          </select>
        </div>
        <a href="?pg=cadastrar_empresa&aba=1" data-toggle="tooltip" title="Esse dado vem da opção 'cadastrar empresa', na aba empresa." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo de contrato*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-11">
          <select class="form-control" name="tipo_contrato" required="">
            <option value="" selected="" disabled="" required="">Escolha uma opção</option>
            <?php
              while ($this->buscar_2_linha = $this->buscar_2->fetch(PDO::FETCH_OBJ)) {
              ?>
              <option value="<?php echo $this->buscar_2_linha->id_tipo_contrato?>"><?php echo utf8_encode($this->buscar_2_linha->nome_tipo_contrato)?></option>
              <?php
              }
            ?>          
          </select>
        </div>
        <a href="?pg=cadastrar_tipo_contrato&aba=2" data-toggle="tooltip" title="Esse dado vem da opção 'cadastrar tipo de contrato', na aba contratos." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Período*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
          <select class="form-control" name="periodo" id="periodo">
            <option value="" selected="" disabled="">Escolha uma opção</option>
            <option value="1">Tempo indeterminado</option>
            <option value="2">Tempo determinado</option>
          </select>
        </div>
      </div>
      <div id="retorno"></div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Status do contrato*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
          <select class="form-control" name="status" required="">
            <option value="" selected="" disabled="">Escolha uma opção</option>
              <option value="1">Arquivado</option>
              <option value="0">Pendente</option>
          </select>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comentário do contrato: <span class="required"></span>
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
            <textarea class="resizable_textarea form-control" placeholder="Comentário" name="obs" maxlength="140"></textarea>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Texto do contrato: <span class="required"></span>
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
            <textarea class="resizable_textarea form-control" placeholder="Texto completo do contrato" 
            name="text_contrato" maxlength="98000"></textarea>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pdf do contrato:</label>
        <div class="col-md-3 col-sm-3 col-xs-8 col-lg-2">
          <input type="button" id="btn_img" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar pdf">
          <input type="file" name="pdf" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Pdf do usuário">
        </div>
        <div class="col-md-2 col-sm-2 col-xs-2">
          <a data-toggle="tooltip" title="Documento pdf até 850 kbytes. Escaneie as páginas em 100 dpi." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
        </div>  
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function listar_contrato(){
      $this->buscar = $this->con->prepare("SELECT * FROM contrato INNER JOIN empresa ON contrato.nome_empresa = 
        empresa.id_empresa INNER JOIN tipo_contrato ON contrato.tipo_de_contrato = tipo_contrato.id_tipo_contrato 
        ORDER BY pdf_contrato desc");
      $this->buscar->execute();
      if (!empty($_POST['id_empresa'])) {
        $this->id = $_POST['id_empresa'];
        $i = 0;
        while (count($this->id)>$i) {
          $this->buscar_2 = $this->con->prepare("SELECT * FROM contrato WHERE id_contrato=:id_contrato");
          $this->buscar_2->bindValue(":id_contrato",$this->id[$i]);
          $this->buscar_2->execute();
          $this->buscar_2_linha = $this->buscar_2->fetch(PDO::FETCH_OBJ);
          $this->excluir = $this->con->prepare("DELETE FROM contrato WHERE id_contrato=:id_contrato");
          $this->excluir->bindValue(":id_contrato",$this->id[$i]);
          $this->excluir->execute();
        if ($this->excluir->rowCount()>0) {
            if (!empty($this->buscar_2_linha->pdf_contrato)) {
              unlink($this->buscar_2_linha->pdf_contrato);
            }
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_contrato&aba=2"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_contrato&aba=2";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Contrato(s) excluido(s) com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_contrato&aba=2"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_contrato&aba=2";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao excluir!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          $i++;
        }
      }
    ?>
    <div class="modal fade" id="modal_excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
          </div>
          <div class="modal-body">
            <center><h2>Realmente deseja excluir esse(s) contrato(s)?</h2></center>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="excluir_true">Excluir</button>
            <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <center><strong style="color:#000">CONTRATOS CADASTRADOS</strong></center>
    <button data-toggle="tooltip" title="Exclusão de contratos selecionados na tabela" class="btn btn-danger fa fa-trash" id="excluir"></button>
    <form method="post" action="" id="excluir_contrato">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>N° da pasta</th>
                <th>Razão social</th>
                <th>Tipo de contrato</th>
                <th>Período do contrato</th>
                <th>Status do contrato</th>
                <th>Observação do contrato</th>
                <th>Texto do contrato</th>
                <th style="width:40px">Ver pdf</th>
                <th style="width:40px">Editar</th>
                <th style="width:40px"><center>Gerar contrato</center></th>
                <th style="width:40px"><center>Selecionar</center><center><input type="checkbox" id="select_all" style="margin-left:15px;"></center></th>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                  $this->inicio_data = explode("-", $this->buscar_linha->inicio);
                  $this->fim_data = explode("-", $this->buscar_linha->fim);
              ?>
              <tr>
                <td><?php echo $this->buscar_linha->num_da_pasta?></td>
                <td><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></td>
                <td><?php echo utf8_encode($this->buscar_linha->nome_tipo_contrato)?></td>
                <td>
                  <?php 
                    if ($this->inicio_data[2] == "01" AND $this->inicio_data[1] == "01" AND $this->inicio_data[0] == "0000") {
                      echo "Tempo indetérminado";
                    }else{
                      echo $this->inicio_data[2]."/".$this->inicio_data[1]."/".$this->inicio_data[0]." À ".$this->fim_data[2]."/".$this->fim_data[1]."/".$this->fim_data[0];
                    }
                  ?>
                </td>
                <td>
                  <?php 
                    if ($this->buscar_linha->status == 1) {
                    ?>
                    <h5 style="color:rgba(0,173,0,0.9);">Arquivado</h5>
                    <?php
                    }else{
                    ?>
                    <h5 style="color:rgba(255,0,0,0.7);">Pendente</h5>
                    <?php
                    }
                  ?>
                </td>
                <td>
                  <?php 
                    if (strlen($this->buscar_linha->descricao)>130) {
                      echo utf8_encode(substr($this->buscar_linha->descricao,0,50))." ...";
                    }else{
                      echo utf8_encode($this->buscar_linha->descricao);
                    }
                  ?>
                </td>
                <td>
                  <?php 
                    if (strlen($this->buscar_linha->texto)>130) {
                      echo utf8_encode(substr($this->buscar_linha->texto,0,100))." ...";
                    }else{
                      echo utf8_encode($this->buscar_linha->texto);
                    }
                  ?>
                </td>
                <td>
                  <?php
                    if (!empty($this->buscar_linha->pdf_contrato)) {
                    ?>
                    <a target="_blank" href="<?php echo $this->buscar_linha->pdf_contrato?>" class="btn btn-success fa fa-eye" data-role="ver_pdf" value="<?php echo $this->buscar_linha->pdf_contrato?>">
                    </a>
                    <?php
                    }else{
                      echo "Sem pdf";
                    }
                  ?>
                </td>
                <td><a href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->buscar_linha->id_contrato?>" class="btn btn-primary fa fa-pencil"></a></td>
                <td><a href="gerar_contrato.php?id_contrato=<?php echo $this->buscar_linha->id_contrato?>" target="_blank" class="btn btn-warning fa fa-plus"></a></td>
                <td><center><input type="checkbox" name="id_empresa[]" id="empresa" style="margin-left:-6px" value="<?php echo $this->buscar_linha->id_contrato?>"></center></td> 
              </tr>
            <?php 
              } 
            ?>
            </tbody>
          </table>
        </div>
      </form>
      <script type="text/javascript">
        var hc="none";
        $(document).ready(function() {
        $("#select_all").click(function(){
          if ($("#select_all").prop('checked')) {
            $("form #empresa").prop('checked',true);
          }else{
            $("form #empresa").prop('checked',false);
          }
        });
        $("#excluir").click(function(){
          $("#modal_excluir").modal("show");
        });
        $("#excluir_true").click(function(){
          $("#excluir_contrato").submit();
        });
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0,1,2,3,4]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0,1,2,3,4],
                    },
                },
                {
                    extend: 'pdf',
                    title:'Contrato(s)',
                    exportOptions: {
                        columns: [0,1,2,3,4]
                    },
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
            },
          } );
      });
        </script>
    <?php
    }
    function cadastrar_tipo_contrato(){
      if (!empty($this->nome)) {
        $this->verificar = $this->con->prepare("SELECT * FROM tipo_contrato WHERE nome_tipo_contrato=:nome_tipo_contrato");
        $this->verificar->bindValue(":nome_tipo_contrato",utf8_decode($this->nome));
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->inserir = $this->con->prepare("INSERT INTO tipo_contrato(nome_tipo_contrato) VALUES(:nome_tipo_contrato)");
          $this->inserir->bindValue(":nome_tipo_contrato",utf8_decode($this->nome));
          $this->inserir->execute();
          if ($this->inserir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=cadastrar_tipo_contrato&aba=2"} , 1000);
              $("#retorno_ok").click(function(){
                  window.location.href="?pg=cadastrar_tipo_contrato&aba=2";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Tipo de contrato cadastrado com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=cadastrar_tipo_contrato&aba=2"} , 2000);
              $("#retorno_ok").click(function(){
                  window.location.href="?pg=cadastrar_tipo_contrato&aba=2";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao cadastrar tipo de contrato. Tente novamente mais tarde!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=cadastrar_tipo_contrato&aba=2"} , 2000);
            $("#retorno_ok").click(function(){
                window.location.href="?pg=cadastrar_tipo_contrato&aba=2";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Esse tipo de contrato já existe!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">CADASTRAR TIPO DE CONTRATO</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Tipo de contrato*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-11">
          <input id="name" type="text" name="tipo_contrato" class="form-control col-md-7 col-xs-12" 
          placeholder="Tipo de contrato" required="required" maxlength="28" autocomplete="off">
        </div>
        <a data-toggle="tooltip" title="Ex:Locação, comodato, arrendamento." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-question-circle"></i></a>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function excluir_tipo_contrato(){
      $this->verificar = $this->con->prepare("SELECT * FROM contrato WHERE tipo_de_contrato=:tipo_de_contrato");
      $this->verificar->bindValue(":tipo_de_contrato",$this->id);
      $this->verificar->execute();
      if ($this->verificar->rowCount() == 0) {
        $this->excluir = $this->con->prepare("DELETE FROM tipo_contrato WHERE id_tipo_contrato=:id_tipo_contrato");
        $this->excluir->bindValue(":id_tipo_contrato",$this->id);
        $this->excluir->execute();
        if ($this->excluir->rowCount()>0) {
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=exibir_tipo_contrato&aba=2"} , 9000);
            $("#retorno_ok").click(function(){
                window.location.href="?pg=exibir_tipo_contrato&aba=2";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Tipo de contrato excluido com sucesso!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=exibir_tipo_contrato&aba=2"} , 9000);
            $("#retorno_ok").click(function(){
                window.location.href="?pg=exibir_tipo_contrato&aba=2";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Erro ao excluir tipo de contrato. Tente novamnete mais tarde!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }else{
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=exibir_tipo_contrato&aba=2"} , 9000);
          $("#retorno_ok").click(function(){
              window.location.href="?pg=exibir_tipo_contrato&aba=2";
          });  
        });
      </script>
      <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
            </div>
            <div class="modal-body">
              <center><h2>Esse tipo de contrato está vinculado á um contrato. Exclua o contrato para depois exluir esse dado!</h2></center>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
            </div>
          </div>
        </div>
      </div>
      <?php
      }
    }
    function editar_tipo_contrato(){
      $this->buscar = $this->con->prepare("SELECT * FROM tipo_contrato WHERE id_tipo_contrato=:id_tipo_contrato");
      $this->buscar->bindValue(":id_tipo_contrato",$this->id);
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ);
      if (!empty($this->nome)) {
        $this->verificar = $this->con->prepare("SELECT * FROM tipo_contrato WHERE nome_tipo_contrato=:nome_tipo_contrato
          AND id_tipo_contrato!=:id_tipo_contrato");
        $this->verificar->bindValue(":nome_tipo_contrato",utf8_decode($this->nome));
        $this->verificar->bindValue(":id_tipo_contrato",$this->id);
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->verificar_2 = $this->con->prepare("SELECT * FROM tipo_contrato WHERE nome_tipo_contrato=:nome_tipo_contrato
          AND id_tipo_contrato=:id_tipo_contrato");
          $this->verificar_2->bindValue(":nome_tipo_contrato",utf8_decode($this->nome));
          $this->verificar_2->bindValue(":id_tipo_contrato",$this->id);
          $this->verificar_2->execute();
          if ($this->verificar_2->rowCount() == 0) {
            $this->atualizar = $this->con->prepare("UPDATE tipo_contrato SET nome_tipo_contrato=:nome_tipo_contrato
              WHERE id_tipo_contrato=:id_tipo_contrato");
            $this->atualizar->bindValue(":nome_tipo_contrato",utf8_decode($this->nome));
            $this->atualizar->bindValue(":id_tipo_contrato",$this->id);
            $this->atualizar->execute();
            if ($this->atualizar->rowCount()>0) {
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=exibir_tipo_contrato&aba=2"} , 1000);
                $("#retorno_ok").click(function(){
                    window.location.href="?pg=exibir_tipo_contrato&aba=2";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Tipo de contrato atualizado com sucesso</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=editar_tipo_contrato&aba=2&id_tipo_contrato=<?php echo $this->id?>"} , 1000);
                $("#retorno_ok").click(function(){
                    window.location.href="?pg=editar_tipo_contrato&aba=2&id_tipo_contrato=<?php echo $this->id?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Erro ao atualizar tipo de contrato. Tente novamente mais tarde!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=editar_tipo_contrato&aba=2&id_tipo_contrato=<?php echo $this->id?>"} , 2000);
              $("#retorno_ok").click(function(){
                  window.location.href="?pg=editar_tipo_contrato&aba=2&id_tipo_contrato=<?php echo $this->id?>";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Você inseriu os mesmos dados!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=editar_tipo_contrato&aba=2&id_tipo_contrato=<?php echo $this->id?>"} , 2000);
            $("#retorno_ok").click(function(){
                window.location.href="?pg=editar_tipo_contrato&aba=2&id_tipo_contrato=<?php echo $this->id?>";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Esse tipo de contrato já existe!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">EDITAR TIPO DE CONTRATO</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Tipo de contrato*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-11">
          <input id="name" type="text" name="tipo_contrato" class="form-control col-md-7 col-xs-12" 
          placeholder="Tipo de contrato" required="required" value="<?php echo utf8_encode($this->buscar_linha->nome_tipo_contrato)?>" maxlength="28" autocomplete="off">
        </div>
        <a data-toggle="tooltip" title="Ex:Locação, comodato, arrendamento." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-question-circle"></i></a>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function editar_contrato(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      $this->buscar_2 = $this->con->prepare("SELECT * FROM tipo_contrato");
      $this->buscar_2->execute();
      $this->buscar_3 = $this->con->prepare("SELECT * FROM contrato INNER JOIN tipo_contrato ON contrato.tipo_de_contrato = tipo_contrato.id_tipo_contrato INNER JOIN empresa ON contrato.nome_empresa = empresa.id_empresa WHERE id_contrato=:id_contrato");
      $this->buscar_3->bindValue(":id_contrato",$this->id);
      $this->buscar_3->execute();
      $this->buscar_3_linha = $this->buscar_3->FETCH(PDO::FETCH_OBJ);
      $this->inicio_data = explode("-", $this->buscar_3_linha->inicio);
      $this->fim_data = explode("-", $this->buscar_3_linha->fim);
      if (!empty($this->nome) AND !empty($this->fk_contrato) AND !empty($this->inicio) AND !empty($this->fim)
        AND isset($this->status)) {
        if (!empty($this->pdf_tmp)) {          
          if (mime_content_type($this->pdf_tmp) == "application/pdf") {
            if (filesize($this->pdf_tmp) <=850000) {
              $this->atualizar = $this->con->prepare("UPDATE contrato SET pdf_contrato=:pdf_contrato,num_da_pasta=:num_da_pasta,nome_empresa=:nome_empresa,tipo_de_contrato=:tipo_de_contrato,inicio=:inicio,fim=:fim,
                status=:status,descricao=:descricao,texto=:texto WHERE id_contrato=:id_contrato");
              $this->atualizar->bindValue(":pdf_contrato","ViewerJS/pdf_contrato/".$this->pdf);
              $this->atualizar->bindValue(":num_da_pasta",$this->buscar_3_linha->num_pasta);
              $this->atualizar->bindValue(":nome_empresa",$this->nome);
              $this->atualizar->bindValue(":tipo_de_contrato",$this->fk_contrato);
              $this->atualizar->bindValue(":inicio",$this->inicio);
              $this->atualizar->bindValue(":fim",$this->fim);
              $this->atualizar->bindValue(":status",$this->status);
              $this->atualizar->bindValue(":descricao",utf8_decode($this->obs));
              $this->atualizar->bindValue(":texto",utf8_decode($this->txt_contrato));
              $this->atualizar->bindValue(":id_contrato",$this->id);
              $this->atualizar->execute();
              if ($this->atualizar->rowCount()>0) {
                if (!empty($this->buscar_3_linha->pdf_contrato)) {
                  unlink($this->buscar_3_linha->pdf_contrato);
                }
                move_uploaded_file($this->pdf_tmp, "ViewerJS/pdf_contrato/".$this->pdf);
                ?>
                <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                        setTimeout(function(){location.href="?pg=listar_contrato&aba=2"} , 1000);
                      $("#retorno_ok").click(function(){
                          window.location.href="?pg=listar_contrato&aba=2";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Contrato alterado com sucesso!</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                }else{
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $("#retorno_ok").modal("show");
                    setTimeout(function(){location.href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->id?>"} , 4000);
                    $("#retorno_ok").click(function(){
                      window.location.href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->id?>";
                    });  
                  });
                </script>
                <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Erro ao alterar contrato. Tente novamente mais tarde!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                    setTimeout(function(){location.href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->id?>"} , 2000);
                  $("#retorno_ok").click(function(){
                      window.location.href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->id?>";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Envie apenas arquivos pdf de tamanho até 850 kbytes!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }              
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->id?>"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->id?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Envie apenas documentos do tipo "PDF"!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
            $this->verificar = $this->con->prepare("SELECT * FROM contrato WHERE num_da_pasta=:num_da_pasta AND nome_empresa=:nome_empresa AND tipo_de_contrato=:tipo_de_contrato AND inicio=:inicio AND fim=:fim AND
              status=:status AND descricao=:descricao AND texto=:texto AND id_contrato=:id_contrato");
            $this->verificar->bindValue(":num_da_pasta",$this->buscar_3_linha->num_pasta);
            $this->verificar->bindValue(":nome_empresa",$this->nome);
            $this->verificar->bindValue(":tipo_de_contrato",$this->fk_contrato);
            $this->verificar->bindValue(":inicio",$this->inicio);
            $this->verificar->bindValue(":fim",$this->fim);
            $this->verificar->bindValue(":status",$this->status);
            $this->verificar->bindValue(":texto",utf8_decode($this->txt_contrato));
            $this->verificar->bindValue(":descricao",utf8_decode($this->obs));
            $this->verificar->bindValue(":id_contrato",$this->id);
            $this->verificar->execute();
            if ($this->verificar->rowCount() == 0) {
              $this->atualizar = $this->con->prepare("UPDATE contrato SET num_da_pasta=:num_da_pasta,nome_empresa=:nome_empresa,tipo_de_contrato=:tipo_de_contrato,inicio=:inicio,fim=:fim,
              status=:status,descricao=:descricao,texto=:texto WHERE id_contrato=:id_contrato");
              $this->atualizar->bindValue(":num_da_pasta",$this->buscar_3_linha->num_pasta);
              $this->atualizar->bindValue(":nome_empresa",$this->nome);
              $this->atualizar->bindValue(":tipo_de_contrato",$this->fk_contrato);
              $this->atualizar->bindValue(":inicio",$this->inicio);
              $this->atualizar->bindValue(":fim",$this->fim);
              $this->atualizar->bindValue(":status",$this->status);
              $this->atualizar->bindValue(":descricao",utf8_decode($this->obs));
              $this->atualizar->bindValue(":texto",utf8_decode($this->txt_contrato));
              $this->atualizar->bindValue(":id_contrato",$this->id);
              $this->atualizar->execute();
              if ($this->atualizar->rowCount()>0) {
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=listar_contrato&aba=2"} , 2000);
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=listar_contrato&aba=2";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Contrato alterado com sucesso!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=listar_contrato&aba=2"} , 2000);
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=listar_contrato&aba=2";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Erro ao alterar contrato. Tente novamente mais tarde!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->id?>"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=editar_contrato&aba=2&id_contrato=<?php echo $this->id?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Você inseriu os mesmos dados!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#periodo').change(function() {
          var periodo = $(this).val();
            if (periodo == 1) {
              $.post("data_contrato.php",{periodo:periodo,mod:'editar'},function(e){
              $("#retorno").html(e);
              $('#myDatepicker2').datetimepicker({
                format: 'DD/MM/YYYY',
                locale: 'pt-br',
              });
              $('#myDatepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                locale: 'pt-br',
              });
              $('#myDatepicker').datetimepicker().on('dp.change', function(e) {
                $(this).parsley().validate();
              });
              $('#myDatepicker2').datetimepicker().on('dp.change', function(e) {
                $(this).parsley().validate();
              });
            });
            }else{  
              <?php
              if ($this->buscar_3_linha->inicio != "0000-01-01") {
              ?>
                $.post("data_contrato.php",{periodo:2,mod:'editar',inicio:'<?php echo $this->buscar_3_linha->inicio?>',fim:'<?php echo $this->buscar_3_linha->fim?>'},function(e){
                  $("#retorno").html(e);
                  $('#myDatepicker2').datetimepicker({
                    format: 'DD/MM/YYYY',
                    locale: 'pt-br',
                  });
                  $('#myDatepicker').datetimepicker({
                    format: 'DD/MM/YYYY',
                    locale: 'pt-br',
                  });
                  $('#myDatepicker').datetimepicker().on('dp.change', function(e) {
                    $(this).parsley().validate();
                  });
                  $('#myDatepicker2').datetimepicker().on('dp.change', function(e) {
                    $(this).parsley().validate();
                  });
                });
              <?php
              }else{
              ?>
              $.post("data_contrato.php",{periodo:periodo,mod:'editar'},function(e){
                $("#retorno").html(e);
                $('#myDatepicker2').datetimepicker({
                  format: 'DD/MM/YYYY',
                  locale: 'pt-br',
                });
                $('#myDatepicker').datetimepicker({
                  format: 'DD/MM/YYYY',
                  locale: 'pt-br',
                });
                $('#myDatepicker').datetimepicker().on('dp.change', function(e) {
                  $(this).parsley().validate();
                });
                $('#myDatepicker2').datetimepicker().on('dp.change', function(e) {
                  $(this).parsley().validate();
                });
              });
              <?php
              }
            ?>
            }
          });
        });
    </script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate>
      <center><span class="section">EDITAR CONTRATO</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome da empresa*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <select class="form-control" name="id_empresa" required="required">
            <option selected="" value="" disabled="">Escolha uma opção</option>
            <?php
              while ($this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ)) {
              ?>
              <option value="<?php echo $this->buscar_linha->id_empresa?>" <?php echo ($this->buscar_3_linha->nome_da_empresa == $this->buscar_linha->nome_da_empresa)?'selected':''?>><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
              <?php
              }
            ?>          
          </select>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Tipo de contrato*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <select class="form-control" name="tipo_contrato" required="">
            <option selected="" value="" disabled=""  required="">Escolha uma opção</option>
            <?php
              while ($this->buscar_2_linha = $this->buscar_2->fetch(PDO::FETCH_OBJ)) {
              ?>
              <option value="<?php echo $this->buscar_2_linha->id_tipo_contrato?>"<?php echo ($this->buscar_3_linha->nome_tipo_contrato == $this->buscar_2_linha->nome_tipo_contrato)?'selected':''?>><?php echo utf8_encode($this->buscar_2_linha->nome_tipo_contrato)?></option>
              <?php
              }
            ?>          
          </select>
        </div>
      </div>
      <?php
        if ($this->buscar_3_linha->inicio == "0000-01-01") {
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#periodo").val("1").prop("selected",true);
            $.post("data_contrato.php",{periodo:1,mod:'editar'},function(e){
              $("#retorno").html(e);
              $('#myDatepicker2').datetimepicker({
                format: 'DD/MM/YYYY',
                locale: 'pt-br',
              });
              $('#myDatepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                locale: 'pt-br',
              });
              $('#myDatepicker').datetimepicker().on('dp.change', function(e) {
                $(this).parsley().validate();
              });
              $('#myDatepicker2').datetimepicker().on('dp.change', function(e) {
                $(this).parsley().validate();
              });
            });
          });
      </script>
        <?php
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#periodo").val("2").prop("selected",true);
            $.post("data_contrato.php",{periodo:2,mod:'editar',inicio:'<?php echo $this->buscar_3_linha->inicio?>',fim:'<?php echo $this->buscar_3_linha->fim?>'},function(e){
              $("#retorno").html(e);
              $('#myDatepicker2').datetimepicker({
                format: 'DD/MM/YYYY',
                locale: 'pt-br',
              });
              $('#myDatepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                locale: 'pt-br',
              });
              $('#myDatepicker').datetimepicker().on('dp.change', function(e) {
                $(this).parsley().validate();
              });
              $('#myDatepicker2').datetimepicker().on('dp.change', function(e) {
                $(this).parsley().validate();
              });
            });
          });
      </script>
        <?php
        }
      ?>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Período*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <select class="form-control" name="periodo" id="periodo">
            <option value="" selected="" disabled="">Escolha uma opção</option>
            <option value="1">Tempo indeterminado</option>
            <option value="2">Tempo determinado</option>
          </select>
        </div>
      </div>
      <div id="retorno"></div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Status do contrato*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <select class="form-control" name="status">
            <option value="" selected="" disabled="">Escolha uma opção</option>
              <option value="1" <?php echo ($this->buscar_3_linha->status == 1)?'selected':'' ?>>Arquivado</option>
              <option value="0" <?php echo ($this->buscar_3_linha->status == 0)?'selected':'' ?>>Pendente</option>        
          </select>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Comentário do contrato: <span class="required"></span>
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
            <textarea class="resizable_textarea form-control" placeholder="Comentário" name="obs" 
            maxlength="140"><?php echo utf8_encode($this->buscar_3_linha->descricao)?></textarea>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Texto do contrato: <span class="required"></span>
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
            <textarea class="resizable_textarea form-control" placeholder="Texto completo do contrato" name="text_contrato" maxlength="98000"><?php echo utf8_encode($this->buscar_3_linha->texto)?></textarea>
        </div>
      </div>
      <div class="item form-group">
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Pdf do contrato:</label>
          <div class="col-md-7 col-sm-9 col-xs-12">
            <input type="button" id="btn_img" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar pdf">
            <input type="file" name="pdf" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Pdf do usuário">
          </div>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function excluir_contrato(){
      if (!empty($this->id) AND !empty($this->senha)) {
        $this->verificar = $this->con->prepare("SELECT * FROM user WHERE senha=:senha AND id_user=:id_user");
        $this->verificar->bindValue(":id_user",$_SESSION['id_user']);
        $this->verificar->bindValue(":senha",sha1($this->senha));
        $this->verificar->execute();
        if ($this->verificar->rowCount()>0) {
            $this->buscar = $this->con->prepare("SELECT * FROM contrato WHERE id_contrato=:id_contrato");
            $this->buscar->bindValue(":id_contrato",$this->id);
            $this->buscar->execute();
            $this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ);
            if (!empty($this->buscar_linha->pdf_contrato)) {
              unlink($this->buscar_linha->pdf_contrato);
            }
            $this->excluir = $this->con->prepare("DELETE FROM contrato WHERE id_contrato=:id_contrato");
            $this->excluir->bindValue(":id_contrato",$this->id);
            $this->excluir->execute();
        if ($this->excluir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_contrato&aba=2"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_contrato&aba=2";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Contrato excluido com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_contrato&aba=2"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_contrato&aba=2";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao excluir!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=excluir_contrato&aba=2&id_contrato=<?php echo $this->id?>"} , 4000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=excluir_contrato&aba=2&id_contrato=<?php echo $this->id?>";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Senha incorreta!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
      ?>
      <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" novalidate autocomplete="off">
          <center><span class="section">CONFIRMAR SENHA(Exclusão de contrato)</span></center>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">CONFIRMAR SENHA <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input id="name"  type="password" name="senha" class="form-control col-md-7 col-xs-12" 
              placeholder="Senha" required="required">
            </div>
          </div>
          <div class="form-group">
              <center><button id="send" type="submit" class="btn btn-success">Confirmar exclusão</button></center>
          </div>
        </form>
      <?php
    }
    function editar_empresa(){
      $this->verificar = $this->con->prepare("SELECT * FROM empresa WHERE (num_pasta=:num_pasta OR nome_da_empresa=:nome_da_empresa) AND id_empresa!=:id_empresa");
      $this->verificar->bindValue(":num_pasta",utf8_decode($this->num_pasta));
      $this->verificar->bindValue(":nome_da_empresa",utf8_decode($this->nome));
      $this->verificar->bindValue(":id_empresa",$this->id);
      $this->verificar->execute();
      if (!empty($this->nome) AND !empty($this->id)) {
        if ($this->verificar->rowCount() == 0) {
          $this->verificar_2 = $this->con->prepare("SELECT * FROM empresa WHERE num_pasta=:num_pasta
          AND nome_da_empresa=:nome_da_empresa AND id_empresa=:id_empresa");
          $this->verificar_2->bindValue(":num_pasta",utf8_decode($this->num_pasta));
          $this->verificar_2->bindValue(":nome_da_empresa",utf8_decode($this->nome));
          $this->verificar_2->bindValue(":id_empresa",$this->id);
          $this->verificar_2->execute();
          if ($this->verificar_2->rowCount() == 0) {
            $this->atualizar = $this->con->prepare("UPDATE empresa SET nome_da_empresa=:nome_da_empresa,num_pasta=:num_pasta WHERE id_empresa=:id_empresa");
            $this->atualizar->bindValue(":nome_da_empresa",utf8_decode($this->nome));
            $this->atualizar->bindValue(":num_pasta",utf8_decode($this->num_pasta));
            $this->atualizar->bindValue(":id_empresa",$this->id);
            $this->atualizar->execute();
            if ($this->atualizar->rowCount()>0) {
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 3000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=listar_empresas&aba=1";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Empresa atualizada com sucesso!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=editar_empresa&aba=1&id_empresa=<?php echo $this->id?>"} , 4000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=editar_empresa&aba=1&id_empresa=<?php echo $this->id?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Erro ao atualizar empresa.Tente novamente mais tarde!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=editar_empresa&aba=1&id_empresa=<?php echo $this->id?>"} , 4000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=editar_empresa&aba=1&id_empresa=<?php echo $this->id?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Você inseriu os mesmos dados!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=editar_empresa&aba=1&id_empresa=<?php echo $this->id?>"} , 4000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=editar_empresa&aba=1&id_empresa=<?php echo $this->id?>";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Já existe uma pasta com esse número ou nome cadastrada!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
      $this->buscar = $this->con->prepare("SELECT * FROM empresa WHERE id_empresa=:id_empresa");
      $this->buscar->bindValue(":id_empresa",$this->id);
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ);
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate>
      <center><span class="section">ATUALIZAR EMPRESA</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome da empresa*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <input id="name" type="text" name="nome_empresa" class="form-control col-md-7 col-xs-12" 
          placeholder="Nome da empresa" required="required" value="<?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Número da pasta*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <input id="name" type="text" name="num_pasta" class="form-control col-md-7 col-xs-12" 
          placeholder="Número da pasta" required="required" maxlength="10" autocomplete="off" value="<?php echo $this->buscar_linha->num_pasta?>">
        </div>
      </div>
      <div class="item form-group" id="retorno">
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function excluir_empresa(){
      if (!empty($this->senha) AND !empty($this->id)) {
        $this->verificar = $this->con->prepare("SELECT * FROM user WHERE senha=:senha AND id_user=:id_user");
        $this->verificar->bindValue(":id_user",$_SESSION['id_user']);
        $this->verificar->bindValue(":senha",sha1($this->senha));
        $this->verificar->execute();
        if ($this->verificar->rowCount()>0) {
          $this->buscar = $this->con->prepare("SELECT * FROM contrato WHERE nome_empresa=:nome_empresa");
          $this->buscar->bindValue(":nome_empresa",$this->id);
          $this->buscar->execute();
          if ($this->buscar->rowCount() == 0) {
            $this->buscar_2 = $this->con->prepare("SELECT * FROM gastos WHERE fk_empresa=:fk_empresa");
            $this->buscar_2->bindValue(":fk_empresa",$this->id);
            $this->buscar_2->execute();
            $this->buscar_3 = $this->con->prepare("SELECT * FROM alvara WHERE empresa=:empresa");
            $this->buscar_3->bindValue(":empresa",$this->id);
            $this->buscar_3->execute();
            $this->buscar_4 = $this->con->prepare("SELECT * FROM agenda WHERE fk_empresa=:fk_empresa");
            $this->buscar_4->bindValue(":fk_empresa",$this->id);
            $this->buscar_4->execute();
            if ($this->buscar_4->rowCount() == 0) {
              if ($this->buscar_3->rowCount() == 0) {
                if ($this->buscar_2->rowCount() == 0) {
                  $this->excluir = $this->con->prepare("DELETE FROM empresa WHERE id_empresa=:id_empresa");
                  $this->excluir->bindValue(":id_empresa",$this->id);
                  $this->excluir->execute();
                  if ($this->excluir->rowCount()>0) {
                  ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                      setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 4000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=listar_empresas&aba=1";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Empresa excluida com sucesso!</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  }else{
                  ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                      setTimeout(function(){location.href="?pg=excluir_empresa&aba=1&id_empresa=<?php echo $this->id?>"} , 4000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=excluir_empresa&aba=1&id_empresa=<?php echo $this->id?>";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Erro ao excluir empresa(s). Tente novamente mais tarde!</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  }
                }else{
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $("#retorno_ok").modal("show");
                    setTimeout(function(){location.href="?pg=excluir_empresa&aba=1&id_empresa=<?php echo $this->id?>"} , 10000);
                    $("#retorno_ok").click(function(){
                      window.location.href="?pg=excluir_empresa&aba=1&id_empresa=<?php echo $this->id?>";
                    });  
                  });
                </script>
                <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Essa(s) empresa(s) possuem vinculo á um gasto cadastrado no 
                          setor contábil(aba exibir controle de gastos). Exclua primeiro o gasto para depois excluir essa(s) empresa(s)!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }
              }else{
              ?>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=excluir_empresa&aba=1&id_empresa=<?php echo $this->id?>"} , 10000);
                  $("#retorno_ok").click(function(){
                    window.location.href="?pg=excluir_empresa&aba=1&id_empresa=<?php echo $this->id?>";
                  });  
                });
              </script>
              <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                    </div>
                    <div class="modal-body">
                      <center><h2>Há empresa(s) selecionadas vinculada(s) á um alvará cadastrado. Exclua primeiro o alvará para depois excluir essa(s) empresa(s)!</h2></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 10000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=listar_empresas&aba=1";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Há empresa(s) quem possuem evento(s) vinculado à ela(s). 
                      Exclua primeiro o(s) evento(s) na aba agenda e tente novamente!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=listar_empresas&aba=1"} , 10000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=listar_empresas&aba=1";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Há empresa(s) que possuem contrato(s) vinculado(s) à ela(s), logo não podem ser excluida(s), exclua os contratos
                    e tente novamente!</h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=excluir_empresa&aba=1&id_empresa=<?php echo $this->id?>"} , 4000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=excluir_empresa&aba=1&id_empresa=<?php echo $this->id?>";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Senha incorreta!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" novalidate>
      <center><span class="section">CONFIRMAR SENHA(Exclusão de empresa)</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Senha<span class="required">*</span>
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <input id="name" type="text" name="senha" class="form-control col-md-7 col-xs-12" 
          placeholder="Senha" required="required" autocomplete="off">
        </div>
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Confirmar exclusão</button></center>
      </div>
    </form>
    <?php
    }
    function listar_alvara(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa ORDER BY nome_da_empresa");
      $this->buscar->execute();
      if (isset($_POST['id_alvara'])) {
        $this->id = $_POST['id_alvara'];
        $i = 0;
        while (count($this->id)>$i) {
          $this->buscar_2 = $this->con->prepare("SELECT * FROM alvara WHERE id_alvara=:id_alvara");
          $this->buscar_2->bindValue(":id_alvara",$this->id[$i]);
          $this->buscar_2->execute();
          $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ);
          $this->excluir = $this->con->prepare("DELETE FROM alvara WHERE id_alvara=:id_alvara");
          $this->excluir->bindValue(":id_alvara",$this->id[$i]);
          $this->excluir->execute();
          if ($this->excluir->rowCount()>0) {
            if (!empty($this->buscar_2_linha->pdf_alva)) {
              unlink($this->buscar_2_linha->pdf_alva);
            }
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_alvara&aba=5"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_alvara&aba=5";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Alvará(s) excluido(s) com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{  
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_alvara&aba=5"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_alvara&aba=5";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao excluir alvará(s). Tente novamente mais tarde!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          $i++;
        }
       } 
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $("form #enviar").change(function(){
            var dados = $("form").serializeArray();
            if (dados) {
              $.post("listar_alvara.php",{dados:dados},function(e){
              $("#retorno_dados").html(e);
              });
            }
          });
        });
      </script>
      <form>
        <div class="item form-group"> 
          <div class="col-md-3 col-sm-4 col-xs-6">
            <select id="enviar" name="empresa" class="form-control" style="margin-left: -10px">
              <option disabled="" selected="" value="">Selecione uma opção</option>
              <?php
                while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                ?>
                <option value="<?php echo $this->buscar_linha->id_empresa?>"><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
                <?php
                }
              ?> 
              <option value="all">Mostrar tudo</option> 
            </select>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-5">
            <a data-toggle="tooltip" style="font-size: 20px;color:rgb(0,150,255)"></a> 
            <input id="enviar" type="text" name="ano" 
            class="form-control col-xs-12 col-sm-12 col-md-12 ano_alva_2" placeholder="Ano">
          </div>
        </div>
      </form>
      <div id="retorno_dados" style="margin-top:40px"></div>
      <?php
      if (!empty($_GET['id_empresa'])) {
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            var id_empresa = <?php echo $_GET['id_empresa']?>;
            $("#enviar option[value='"+id_empresa+"']").prop("selected",true);
          });
        </script>
      <?php
      }
    }
    function excluir_alva(){
      if (!empty($this->senha) AND !empty($this->id)) {
        $this->verificar = $this->con->prepare("SELECT * FROM user WHERE senha=:senha AND id_user=:id_user");
        $this->verificar->bindValue(":senha",sha1($this->senha));
        $this->verificar->bindValue(":id_user",$_SESSION['id_user']);
        $this->verificar->execute();
        if ($this->verificar->rowCount()>0) {
          $this->excluir = $this->con->prepare("DELETE FROM alvara WHERE id_alvara=:id_alvara");
          $this->excluir->bindValue(":id_alvara",$this->id);
          $this->excluir->execute();
          if ($this->excluir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_alvara&aba=5"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_alvara&aba=5";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Alvará excluido com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=excluir_alva&id_alvara=<?php echo $this->id?>&aba=5"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=excluir_alva&id_alvara=<?php echo $this->id?>&aba=5";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao excluir alvará. Tente novamente mais tarde!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=excluir_alva&id_alvara=<?php echo $this->id?>&aba=5"} , 4000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=excluir_alva&id_alvara=<?php echo $this->id?>&aba=5";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Senha incorreta!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>        
        <?php
        }
      }
    ?>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" novalidate>
      <center><span class="section">CONFIRMAR SENHA(Exclusão de alvará)</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">CONFIRMAR SENHA <span class="required">*</span>
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <input id="name"  type="password" name="senha" class="form-control col-md-7 col-xs-12" 
          placeholder="Senha" required="required">
        </div>
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Confirmar exclusão</button></center>
      </div>
    </form>
    <?php 
    }
    function editar_alva(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      $this->buscar_2 = $this->con->prepare("SELECT * FROM alvara INNER JOIN empresa ON alvara.empresa = empresa.id_empresa AND id_alvara=:id_alvara");
      $this->buscar_2->bindValue(":id_alvara",$this->id);
      $this->buscar_2->execute();
      $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ);
      if (!empty($this->id) AND !empty($this->num_insc)) {
        $this->buscar_3 = $this->con->prepare("SELECT num_pasta FROM empresa WHERE id_empresa=:id_empresa");
        $this->buscar_3->bindValue(":id_empresa",$this->fk_empresa);
        $this->buscar_3->execute();
        $this->buscar_3_linha = $this->buscar_3->FETCH(PDO::FETCH_OBJ);        
        $this->verificar_2 = $this->con->prepare("SELECT * FROM alvara WHERE empresa=:empresa AND insc=:insc 
          AND ano=:ano AND id_alvara!=:id_alvara");
        $this->verificar_2->bindValue(":empresa",$this->fk_empresa);
        $this->verificar_2->bindValue(":insc",$this->num_insc);
        $this->verificar_2->bindValue(":ano",$this->ano_alva);
        $this->verificar_2->bindValue(":id_alvara",$this->id);
        $this->verificar_2->execute();
        if ($this->verificar_2->rowCount() == 0) {
            $this->verificar = $this->con->prepare("SELECT * FROM alvara WHERE empresa=:empresa AND ano=:ano AND num_pasta=:num_pasta AND insc=:insc AND area_t=:area_t AND area_u=:area_u AND te=:te AND tp=:tp AND arq=:arq AND ent=:ent AND tp_cp=:tp_cp AND te_cp=:te_cp AND arq_cp=:arq_cp AND ent_cp=:ent_cp AND id_alvara=:id_alvara");
              $this->verificar->bindValue(":empresa",$this->fk_empresa);
              $this->verificar->bindValue(":ano",$this->ano_alva);
              $this->verificar->bindValue(":num_pasta",$this->buscar_3_linha->num_pasta);
              $this->verificar->bindValue(":insc",$this->num_insc);
              $this->verificar->bindValue(":area_t",$this->area_total);
              $this->verificar->bindValue(":area_u",$this->area_utilizada);
              $this->verificar->bindValue(":te",$this->taxa_entrega_alva);
              $this->verificar->bindValue(":tp",$this->pagamento_alva);
              $this->verificar->bindValue(":arq",$this->arq_alva);
              $this->verificar->bindValue(":ent",$this->envio_alva);
              $this->verificar->bindValue(":tp_cp",$this->pagamento_cp);
              $this->verificar->bindValue(":te_cp",$this->taxa_ent_cp);
              $this->verificar->bindValue(":arq_cp",$this->arq_cp);
              $this->verificar->bindValue(":ent_cp",$this->ent_cp);
              $this->verificar->bindValue(":id_alvara",$this->id);
              $this->verificar->execute();
                if (!empty($this->pdf_tmp)) {
                  if(mime_content_type($this->pdf_tmp) == "application/pdf"){
                    if (filesize($this->pdf_tmp)<=850000) {
                      $this->atualizar = $this->con->prepare("UPDATE alvara SET empresa=:empresa,ano=:ano,
                        num_pasta=:num_pasta,insc=:insc,area_t=:area_t,area_u=:area_u,pdf_alva=:pdf_alva,te=:te,tp=:tp,
                        arq=:arq,ent=:ent,tp_cp=:tp_cp,te_cp=:te_cp,arq_cp= :arq_cp,ent_cp=:ent_cp WHERE id_alvara=:id_alvara");
                      $this->atualizar->bindValue(":empresa",$this->fk_empresa);
                      $this->atualizar->bindValue(":ano",$this->ano_alva);
                      $this->atualizar->bindValue(":num_pasta",$this->buscar_3_linha->num_pasta);
                      $this->atualizar->bindValue(":insc",$this->num_insc);
                      $this->atualizar->bindValue(":area_t",$this->area_total);
                      $this->atualizar->bindValue(":area_u",$this->area_utilizada);
                      $this->atualizar->bindValue(":pdf_alva","ViewerJS/pdf_alvara/".$this->pdf);
                      $this->atualizar->bindValue(":te",$this->taxa_entrega_alva);
                      $this->atualizar->bindValue(":tp",$this->pagamento_alva);
                      $this->atualizar->bindValue(":arq",$this->arq_alva);
                      $this->atualizar->bindValue(":ent",$this->envio_alva);
                      $this->atualizar->bindValue(":tp_cp",$this->pagamento_cp);
                      $this->atualizar->bindValue(":te_cp",$this->taxa_ent_cp);
                      $this->atualizar->bindValue(":arq_cp",$this->arq_cp);
                      $this->atualizar->bindValue(":ent_cp",$this->ent_cp);
                      $this->atualizar->bindValue(":id_alvara",$this->id);
                      $this->atualizar->execute();
                      if ($this->atualizar->rowCount()>0) {
                        if (!empty($this->buscar_2_linha->pdf_alva)) {
                          unlink($this->buscar_2_linha->pdf_alva);
                        }
                        move_uploaded_file($this->pdf_tmp, "ViewerJS/pdf_alvara/".$this->pdf);
                        ?>
                        <script type="text/javascript">
                          $(document).ready(function(){
                            $("#retorno_ok").modal("show");
                            setTimeout(function(){location.href="?pg=listar_alvara&aba=5&id_empresa=<?php echo $this->fk_empresa ?>"} , 2000);
                            $("#retorno_ok").click(function(){
                              window.location.href="?pg=listar_alvara&aba=5&id_empresa=<?php echo $this->fk_empresa ?>";
                            });  
                          });
                        </script>
                        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                              </div>
                              <div class="modal-body">
                                <center><h2>Alvará atualizado com sucesso!</h2></center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                      }else{
                      ?>
                        <script type="text/javascript">
                          $(document).ready(function(){
                            $("#retorno_ok").modal("show");
                            setTimeout(function(){location.href="?pg=listar_alvara&aba=5"} , 2000);
                            $("#retorno_ok").click(function(){
                              window.location.href="?pg=listar_alvara&aba=5";
                            });  
                          });
                        </script>
                        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                              </div>
                              <div class="modal-body">
                                <center><h2>Erro ao atualizar alvará. Tente novamente mais tarde</h2></center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                    }else{
                    ?>
                    <script type="text/javascript">
                      $(document).ready(function(){
                        $("#retorno_ok").modal("show");
                        setTimeout(function(){location.href="?pg=listar_alvara&aba=5"} , 2000);
                        $("#retorno_ok").click(function(){
                          window.location.href="?pg=listar_alvara&aba=5";
                        });  
                      });
                    </script>
                    <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                          </div>
                          <div class="modal-body">
                            <center><h2>Envie documentos até 850 kbytes</h2></center>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    }
                  }else{
                  ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                      setTimeout(function(){location.href="?pg=listar_alvara&aba=5"} , 2000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=listar_alvara&aba=5";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Envie apenas documentos no tipo "PDF"</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  }
                }else{
                  if ($this->verificar->rowCount() == 0) {
                  $this->atualizar = $this->con->prepare("UPDATE alvara SET empresa=:empresa,ano=:ano,num_pasta=:num_pasta,insc=:insc,area_t=:area_t,area_u=:area_u,te=:te,tp=:tp,arq=:arq,ent=:ent,tp_cp=:tp_cp,te_cp=:te_cp,arq_cp= :arq_cp,ent_cp=:ent_cp WHERE id_alvara=:id_alvara");
                  $this->atualizar->bindValue(":empresa",$this->fk_empresa);
                  $this->atualizar->bindValue(":ano",$this->ano_alva);
                  $this->atualizar->bindValue(":num_pasta",$this->buscar_3_linha->num_pasta);
                  $this->atualizar->bindValue(":insc",$this->num_insc);
                  $this->atualizar->bindValue(":area_t",$this->area_total);
                  $this->atualizar->bindValue(":area_u",$this->area_utilizada);
                  $this->atualizar->bindValue(":te",$this->taxa_entrega_alva);
                  $this->atualizar->bindValue(":tp",$this->pagamento_alva);
                  $this->atualizar->bindValue(":arq",$this->arq_alva);
                  $this->atualizar->bindValue(":ent",$this->envio_alva);
                  $this->atualizar->bindValue(":tp_cp",$this->pagamento_cp);
                  $this->atualizar->bindValue(":te_cp",$this->taxa_ent_cp);
                  $this->atualizar->bindValue(":arq_cp",$this->arq_cp);
                  $this->atualizar->bindValue(":ent_cp",$this->ent_cp);
                  $this->atualizar->bindValue(":id_alvara",$this->id);
                  $this->atualizar->execute();
                  if ($this->atualizar->rowCount()>0) {
                  ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                      setTimeout(function(){location.href="?pg=listar_alvara&aba=5&id_empresa=<?php echo $this->fk_empresa ?>"} , 2000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=listar_alvara&aba=5&id_empresa=<?php echo $this->fk_empresa ?>";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <center><h2>Alvará atualizado com sucesso</h2></center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  }else{
                  ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $("#retorno_ok").modal("show");
                      setTimeout(function(){location.href="?pg=editar_alva&id_alvara=<?php echo $this->id?>&aba=5id_empresa=<?php echo $this->fk_empresa?>"} , 2000);
                      $("#retorno_ok").click(function(){
                        window.location.href="?pg=editar_alva&id_alvara=<?php echo $this->id?>&aba=5id_empresa=<?php echo $this->fk_empresa?>";
                      });  
                    });
                  </script>
                  <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                        </div>
                        <div class="modal-body">
                          <h2>Erro ao atualizar alvará. Tente novamente mais tarde!</h2>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  }
                }else{
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $("#retorno_ok").modal("show");
                    setTimeout(function(){location.href="?pg=editar_alva&id_alvara=<?php echo $this->id?>&aba=5"} , 2000);
                    $("#retorno_ok").click(function(){
                      window.location.href="?pg=editar_alva&id_alvara=<?php echo $this->id?>&aba=5";
                    });  
                  });
                </script>
                <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                      </div>
                      <div class="modal-body">
                        <center><h2>Você inseriu os mesmos dados!</h2></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }
              }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=editar_alva&id_alvara=<?php echo $this->id?>&aba=5"} , 2000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=editar_alva&id_alvara=<?php echo $this->id?>&aba=5";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>O alvará dessa empresa já está cadastrado!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">EDITAR ALVARÁ</span></center>
      <div class="item form-group">
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12">Razão social*:</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <select class="select2_single form-control" id="cor" name="fk_empresa">
                <?php
                  while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                  ?>
                  <option value="<?php echo $this->buscar_linha->id_empresa?>" <?php echo ($this->buscar_2_linha->nome_da_empresa == $this->buscar_linha->nome_da_empresa)?'selected':'' ?>><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
                  <?php
                  }
                ?>
              </select>
            </div>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">N° da insc. municipal*:
        </label>
        <div class="col-md-8 col-sm-9 col-xs-12">
          <input id="name" type="text" name="num_insc_social" class="form-control col-md-7 col-xs-12" 
          placeholder="N° da inscrição municipal" required="required" maxlength="18" value="<?php echo $this->buscar_2_linha->insc?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Ano alvará*:
        </label>
        <div class="col-md-8 col-sm-9 col-xs-12">
          <input id="ano_alva" type="text" name="ano_alva" class="form-control col-md-7 col-xs-12" 
          placeholder="Ano alvará" required="required" value="<?php echo $this->buscar_2_linha->ano?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="area_total">Área total:<span class="required"></span>
        </label>
        <div class="col-md-8 col-sm-9 col-xs-12">
          <input id="demo1" type="text" name="area_total" value="<?php if($this->buscar_2_linha->area_t !=0.00){
            echo number_format($this->buscar_2_linha->area_t,2,",",".");
          }?>" class="form-control col-md-7 col-xs-12" 
          placeholder="Área total" maxlength="12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="area_total">Área utilizada:<span class="required"></span>
        </label>
        <div class="col-md-8 col-sm-9 col-xs-12">
          <input id="demo2" type="text" name="area_utilizada"  class="form-control col-md-7 col-xs-12" 
          placeholder="Área utilizada" maxlength="12" value="<?php if($this->buscar_2_linha->area_u !=0.00){
            echo number_format($this->buscar_2_linha->area_u,2,",",".");
          }?>">
        </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Taxa de entrega alvará:</label>
          <div class="col-md-8 col-sm-9 col-xs-12">
            <select class="select2_single form-control" id="cor" name="taxa_entrega_alva">
                <option disabled="" selected="">Selecione uma opção</option>
                <option value="1" <?php echo ($this->buscar_2_linha->te == "1")?'selected':'' ?>>Ok</option>
                <option value="0" <?php echo ($this->buscar_2_linha->te == "0")?'selected':'' ?>>-</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Pagamento do alvará:</label>
          <div class="col-md-8 col-sm-9 col-xs-12">
            <select class="select2_single form-control" id="cor" name="pagamento_alva">
                <option disabled="" selected="">Selecione uma opção</option>
                <option value="1" <?php echo ($this->buscar_2_linha->tp == "1")?'selected':'' ?>>Ok</option>
                <option value="0" <?php echo ($this->buscar_2_linha->tp == "0")?'selected':'' ?>>-</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Arquivamento do alvará:</label>
          <div class="col-md-8 col-sm-9 col-xs-12">
            <select class="select2_single form-control" id="cor" name="arq_alva">
                <option disabled="" selected="">Selecione uma opção</option>
                <option value="1" <?php echo ($this->buscar_2_linha->arq == "1")?'selected':'' ?>>Ok</option>
                <option value="0" <?php echo ($this->buscar_2_linha->arq == "0")?'selected':'' ?>>-</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Envio do alvará:</label>
          <div class="col-md-8 col-sm-9 col-xs-12">
            <select class="select2_single form-control" id="cor" name="envio_alva">
                <option disabled="" selected="">Selecione uma opção</option>
                <option value="1" <?php echo ($this->buscar_2_linha->ent == "1")?'selected':'' ?>>Ok</option>
                <option value="0" <?php echo ($this->buscar_2_linha->ent == "0")?'selected':'' ?>>-</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Tx Ent. corpo bomb. :</label>
          <div class="col-md-8 col-sm-9 col-xs-12">
            <select class="select2_single form-control" id="cor" name="taxa_ent_cp">
                <option disabled="" selected="">Selecione uma opção</option>
                <option value="1" <?php echo ($this->buscar_2_linha->ent_cp == "1")?'selected':'' ?>>Ok</option>
                <option value="0" <?php echo ($this->buscar_2_linha->ent_cp == "0")?'selected':'' ?>>-</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Pag. corpo bomb. :</label>
          <div class="col-md-8 col-sm-9 col-xs-12">
            <select class="select2_single form-control" id="cor" name="pagamento_cp">
                <option disabled="" selected="">Selecione uma opção</option>
                <option value="1" <?php echo ($this->buscar_2_linha->tp_cp == "1")?'selected':'' ?>>Ok</option>
                <option value="0" <?php echo ($this->buscar_2_linha->tp_cp == "0")?'selected':'' ?>>-</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Arq. corpo bomb. :</label>
          <div class="col-md-8 col-sm-9 col-xs-12">
            <select class="select2_single form-control" id="cor" name="arq_cp">
                <option disabled="" selected="">Selecione uma opção</option>
                <option value="1" <?php echo ($this->buscar_2_linha->arq_cp == "1")?'selected':'' ?>>Ok</option>
                <option value="0" <?php echo ($this->buscar_2_linha->arq_cp == "0")?'selected':'' ?>>-</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12">Envio. corpo bomb. :</label>
          <div class="col-md-8 col-sm-9 col-xs-12">
            <select class="select2_single form-control" id="cor" name="ent_cp">
                <option disabled="" selected="">Selecione uma opção</option>
                <option value="1" <?php echo ($this->buscar_2_linha->ent_cp == "1")?'selected':'' ?>>Ok</option>
                <option value="0" <?php echo ($this->buscar_2_linha->ent_cp == "0")?'selected':'' ?>>-</option>
            </select>
          </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12">Alvará da empresa:</label>
        <div class="col-md-2 col-sm-3 col-xs-8">
          <input type="button" id="btn_img" style="display:block;width:160px; height:40px; font-size:16px;color:#000" onclick="document.getElementById('getFile').click()" class="btn btn-warning" value="Selecionar pdf">
          <input type="file" name="pdf_alva" id="getFile" style="display:none" class="material-control tooltips-general" placeholder="Alvará da empresa">
        </div>
        <div class="col-md-3 col-sm-2 col-xs-2">
          <a data-toggle="tooltip" title="Documento de alvará até 850 kbytes. Escaneie as páginas em até 150 dpi." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
        </div>  
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function cadastrar_tipo_despesa(){
      if (!empty($this->nome)) {
        $this->verificar = $this->con->prepare("SELECT * FROM despesa WHERE nome_despesa=:nome_despesa");
        $this->verificar->bindValue(":nome_despesa",utf8_decode($this->nome));
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->inserir = $this->con->prepare("INSERT INTO despesa(nome_despesa) VALUES(:nome_despesa)");
          $this->inserir->bindValue(":nome_despesa",utf8_decode($this->nome));
          $this->inserir->execute();
          if ($this->inserir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=cadastrar_tipo_despesa&aba=6"} , 2000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=cadastrar_tipo_despesa&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Despesa cadastrada com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=cadastrar_tipo_despesa&aba=6"} , 2000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=cadastrar_tipo_despesa&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao cadastrar tipo de despesa!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=cadastrar_tipo_despesa&aba=6"} , 2000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=cadastrar_tipo_despesa&aba=6";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Essa despesa já foi cadastrada anteriormente!</h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">CADASTRAR TIPO DE DESPESA</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Despesa*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-11">
          <input id="name"  type="text" name="despesa" class="form-control col-md-7 col-xs-10" 
          placeholder="Despesa" required="required" maxlength="40">
        </div>
          <a data-toggle="tooltip" title="Ex:Água, Luz, Telefone, ICMS..." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-question-circle"></i></a>
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function listar_tipo_despesas(){
      $this->buscar = $this->con->prepare("SELECT * FROM despesa");
      $this->buscar->execute();
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $("button[data-role=id_despesa]").click(function(){
          var id_despesa = $(this).val();
          $("#id_despesa").val(id_despesa);
          $("#retorno_despesa").modal("show");
        });
      });
    </script>
    <div class="modal fade" id="retorno_despesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
          </div>
          <div class="modal-body">
            <center><h2>Realmente deseja excluir essa despesa?</h2></center>
          </div>
          <div class="modal-footer">
            <form method="post" action="?pg=excluir_tipo_despesa&aba=6">
              <input type="hidden" name="id_despesa" id="id_despesa">
              <button type="submit" class="btn btn-success">Excluir</button>
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="table table-responsive"> 
      <table id="example" class="table table-striped table-bordered table-responsive">
        <thead>
          <tr>
            <th>Tipo de despesa</th> 
            <th style="width:10px">Editar</th>
            <th style="width:10px">Excluir</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
          ?>
          <tr>
            <td><?php echo utf8_encode($this->buscar_linha->nome_despesa)?></td>
            <td><a href="?pg=editar_tipo_despesas&aba=6&id_tipo_despesa=<?php echo $this->buscar_linha->id_despesa?>" class="btn btn-primary fa fa-pencil"></a></td>
            <td><button data-role="id_despesa" value="<?php echo $this->buscar_linha->id_despesa?>" class="btn btn-danger fa fa-trash"></button></td> 
          </tr>
        <?php 
          } 
        ?>
        </tbody>
      </table>
    </div>
      <script type="text/javascript">
        var hc="none";
        $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0],
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0],
                    },
                },
                {
                    extend: 'pdf',
                    title:'Tipo(s) de despesa(s)',
                    exportOptions: {
                        columns: [0],
                        pageSize: 'LEGAL'
                    },
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
    } 
    function excluir_tipo_despesa(){
      if (!empty($this->id)) {
        $this->verificar = $this->con->prepare("SELECT * FROM gastos WHERE fk_despesa=:fk_despesa");
        $this->verificar->bindValue(":fk_despesa",$this->id);
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
        $this->excluir = $this->con->prepare("DELETE FROM despesa WHERE id_despesa=:id_despesa");
        $this->excluir->bindValue(":id_despesa",$this->id);
        $this->excluir->execute();
          if ($this->excluir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_tipo_despesas&aba=6"} , 2500);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_tipo_despesas&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Tipo de despesa excluida com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_tipo_despesas&aba=6"} , 3000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_tipo_despesas&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao excluir tipo de despesa. Tente novamente mais tarde!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=listar_tipo_despesas&aba=6"} , 9000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=listar_tipo_despesas&aba=6";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <h2>Essa despesa está vinculada á um registro do controle de gastos. Exclua 1º o registro do controle de gasto, para depois excluir essa depesa</h2>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    }
    function editar_tipo_despesas(){
      $this->buscar = $this->con->prepare("SELECT * FROM despesa WHERE id_despesa=:id_despesa");
      $this->buscar->bindValue(":id_despesa",$this->id);
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ);
      if (!empty($this->nome)) {
        $this->verificar = $this->con->prepare("SELECT * FROM despesa WHERE nome_despesa=:nome_despesa");
        $this->verificar->bindValue(":nome_despesa",utf8_decode($this->nome));
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->atualizar = $this->con->prepare("UPDATE despesa SET nome_despesa=:nome_despesa WHERE id_despesa=:id_despesa");
          $this->atualizar->bindValue(":nome_despesa",utf8_decode($this->nome));
          $this->atualizar->bindValue(":id_despesa",$this->id);
          $this->atualizar->execute();
          if ($this->atualizar->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_tipo_despesas&aba=6"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_tipo_despesas&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Tipo de despesa atualizada com sucesso!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=editar_tipo_despesas&aba=6&id_tipo_despesa=<?php echo $this->id?>"} , 4000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=editar_tipo_despesas&aba=6&id_tipo_despesa=<?php echo $this->id?>";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Você inseriu os mesmos dados ou dados já cadastrados!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate>
      <center><span class="section">EDITAR TIPO DE DESPESA</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Despesa*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <input id="name"  type="text" name="despesa" class="form-control col-md-7 col-xs-12" 
          placeholder="Despesa" required="required" maxlength="40" value="<?php echo utf8_encode($this->buscar_linha->nome_despesa)?>">
        </div>
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>  
    <?php
    }
    function cadastrar_status(){
      if (!empty($this->nome)) {
          $this->verificar = $this->con->prepare("SELECT * FROM status_despesa WHERE nome_status=:nome_status");
          $this->verificar->bindValue(":nome_status",utf8_decode($this->nome));
          $this->verificar->execute();
          if ($this->verificar->rowCount() == 0) {
            $this->inserir = $this->con->prepare("INSERT INTO status_despesa(nome_status,descricao) VALUES(:nome_status,:descricao)");
            $this->inserir->bindValue(":nome_status",utf8_decode($this->nome));
            $this->inserir->bindValue(":descricao",utf8_decode($this->obs));
            $this->inserir->execute();
            if ($this->inserir->rowCount()>0) {
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=cadastrar_status&aba=6"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=cadastrar_status&aba=6";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Status de despesa cadastrado com sucesso!<h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=cadastrar_status&aba=6"} , 2000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=cadastrar_status&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Esse status de despesa já está cadastrado!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">CADASTRAR STATUS DE DESPESA</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Status*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-11">
          <input id="name"  type="text" name="status_despesa" class="form-control col-md-7 col-xs-12" 
          placeholder="Status de despesa" required="required" maxlength="4">
        </div>
        <a data-toggle="tooltip" title="Ex:Ok, pendente, devendo" style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-question-circle"></i></a>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Explicação da sigla</label>
        <div class="col-md-8 col-sm-6 col-xs-11">
          <textarea class="textarea form-control col-md-7 col-xs-10" placeholder="Comentário" name="obs" maxlength="99"></textarea>
        </div>
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function listar_status_empresa(){
      $this->buscar = $this->con->prepare("SELECT * FROM status_despesa WHERE id_status NOT IN(15)");
      $this->buscar->execute();
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $("button[data-role=id_status_despesa]").click(function(){
          var id_status_despesa = $(this).val();
          $("#id_status_despesa").val(id_status_despesa);
          $("#retorno_despesa").modal("show");
        });
      });
    </script>
    <div class="modal fade" id="retorno_despesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
          </div>
          <div class="modal-body">
            <center><h2>Realmente deseja excluir esse status de despesa?</h2></center>
          </div>
          <div class="modal-footer">
            <form method="post" action="?pg=excluir_status_despesa&aba=6">
              <input type="hidden" name="id_status_despesa" id="id_status_despesa">
              <button type="submit" class="btn btn-success">Excluir</button>
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="table table-responsive"> 
      <table id="example" class="table table-striped table-bordered table-responsive">
        <thead>
          <tr>
            <th>Status de despesa</th>
            <th>Explicação</th> 
            <th style="width: 10px">Editar</th>
            <th style="width: 10px">Excluir</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
          ?>
          <tr>
            <td><?php echo utf8_encode($this->buscar_linha->nome_status)?></td>
            <td><?php echo utf8_encode($this->buscar_linha->descricao)?></td>
            <td><a href="?pg=editar_status_despesa&aba=6&id_status_despesa=<?php echo $this->buscar_linha->id_status?>" class="btn btn-primary fa fa-pencil"></a></td>
            <td><button data-role="id_status_despesa" value="<?php echo $this->buscar_linha->id_status?>" class="btn btn-danger fa fa-trash"></button></td> 
          </tr>
        <?php 
          } 
        ?>
        </tbody>
      </table>
    </div>
      <script type="text/javascript">
        var hc = "none";
        $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0,1]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0,1]
                    },
                },
                {
                    extend: 'pdf',
                    title:'Tipos de status de despesas',
                    exportOptions: {
                        columns: [0,1]
                    },
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
    }
    function excluir_status_despesa(){
      if (!empty($this->id)) {
        $this->verificar = $this->con->prepare("SELECT * FROM gastos WHERE fk_status=:fk_status");
        $this->verificar->bindValue(":fk_status",$this->id);
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->excluir = $this->con->prepare("DELETE FROM status_despesa WHERE id_status=:id_status");
          $this->excluir->bindValue(":id_status",$this->id);
          $this->excluir->execute();
          if ($this->excluir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_status_empresa&aba=6"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_status_empresa&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Status de despesa excluido com sucesso!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_status_empresa&aba=6"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_status_empresa&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao excluir status de empresa. Tente novamente mais tarde!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_status_empresa&aba=6"} , 10000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_status_empresa&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Esse status de despesa está vinculado á um registro do controle de gastos. Exclua 1º o registro do controle de gasto, para depois excluir esse status de depesa</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
      }
    }
    function editar_status_despesa(){
      $this->buscar = $this->con->prepare("SELECT * FROM status_despesa WHERE id_status=:id_status");
      $this->buscar->bindValue(":id_status",$this->id);
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ);
      if (!empty($this->id) AND !empty($this->nome)) {
        $this->verificar = $this->con->prepare("SELECT * FROM status_despesa WHERE nome_status=:nome_status AND id_status!=:id_status");
        $this->verificar->bindValue(":nome_status",utf8_decode($this->nome));
        $this->verificar->bindValue(":id_status",$this->id); 
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->verificar_2 = $this->con->prepare("SELECT * FROM status_despesa WHERE nome_status=:nome_status AND id_status=:id_status AND descricao=:descricao");
          $this->verificar_2->bindValue(":nome_status",utf8_decode($this->nome));
          $this->verificar_2->bindValue(":descricao",utf8_decode($this->obs));
          $this->verificar_2->bindValue(":id_status",$this->id); 
          $this->verificar_2->execute();
          if ($this->verificar_2->rowCount() == 0) {
            $this->atualizar = $this->con->prepare("UPDATE status_despesa SET nome_status=:nome_status,descricao=:descricao 
              WHERE id_status=:id_status");
            $this->atualizar->bindValue(":nome_status",utf8_decode($this->nome));
            $this->atualizar->bindValue(":descricao",utf8_decode($this->obs));
            $this->atualizar->bindValue(":id_status",$this->id);
            $this->atualizar->execute();
            if ($this->atualizar->rowCount()>0) {
             ?>
             <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=listar_status_empresa&aba=6"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=listar_status_empresa&aba=6";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Status de despesa alterado com sucesso!<h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
             <?php
             }else{
             ?>
             <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=editar_status_despesa&aba=6&id_status_despesa=<?php echo $this->id?>"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=editar_status_despesa&aba=6&id_status_despesa=<?php echo $this->id?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Erro ao atualizar status de despesa. Tente novamente mais tarde!<h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
           <?php
           }
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=editar_status_despesa&aba=6&id_status_despesa=<?php echo $this->id?>"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=editar_status_despesa&aba=6&id_status_despesa=<?php echo $this->id?>";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Você inseriu os mesmos dados!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          } 
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=editar_status_despesa&aba=6&id_status_despesa=<?php echo $this->id?>"} , 4000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=editar_status_despesa&aba=6&id_status_despesa=<?php echo $this->id?>";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Esse status de despesa já está cadastrado!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate>
      <center><span class="section">EDITAR STATUS DE DESPESA</span></center>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Status*:
        </label>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <input id="name"  type="text" name="status_despesa" class="form-control col-md-7 col-xs-12" 
          placeholder="Status de despesa" required="required" maxlength="4" value="<?php echo utf8_encode($this->buscar_linha->nome_status) ?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Explicação da sigla</label>
        <div class="col-md-8 col-sm-6 col-xs-11">
          <textarea class="textarea form-control col-md-7 col-xs-10" placeholder="Comentário" name="obs" maxlength="99"
          ><?php echo utf8_encode($this->buscar_linha->descricao)?></textarea>
        </div>
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function controle_de_gastos(){
      if (!empty($this->nome) AND !empty($this->tipo_despesa) AND !empty($this->mes) AND !empty($this->ano)) {
        $this->buscar = $this->con->prepare("SELECT * FROM gastos WHERE fk_empresa=:fk_empresa AND valor=:valor AND fk_despesa=:fk_despesa AND fk_status=:fk_status AND mes=:mes AND ano=:ano");
        $this->buscar->bindValue(":fk_empresa",$this->nome);
        $this->buscar->bindValue(":fk_despesa",$this->tipo_despesa);
        $this->buscar->bindValue(":fk_status",$this->status_despesa);
        $this->buscar->bindValue(":mes",$this->mes);
        $this->buscar->bindValue(":ano",$this->ano);
        $this->buscar->bindValue(":valor",$this->valor);
        $this->buscar->execute();
        if ($this->buscar->rowCount() == 0) {
          $this->inserir = $this->con->prepare("INSERT INTO gastos(
            fk_empresa,fk_despesa,fk_status,mes,ano,valor) VALUES(:fk_empresa,:fk_despesa,:fk_status,:mes,:ano,:valor)");
          $this->inserir->bindValue(":fk_empresa",$this->nome);
          $this->inserir->bindValue(":fk_despesa",$this->tipo_despesa);
          $this->inserir->bindValue(":fk_status",$this->status_despesa);
          $this->inserir->bindValue(":mes",$this->mes);
          $this->inserir->bindValue(":ano",$this->ano);
          $this->inserir->bindValue(":valor",$this->valor);
          $this->inserir->execute();
          if ($this->inserir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=controle_de_gastos&aba=6"} , 3000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=controle_de_gastos&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Dados cadastrados com sucesso!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              //setTimeout(function(){location.href="?pg=controle_de_gastos&aba=6"} , 3000);
              $("#retorno_ok").click(function(){
               // window.location.href="?pg=controle_de_gastos&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao cadastrar dados!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=controle_de_gastos&aba=6"} , 4000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=controle_de_gastos&aba=6";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Esses dados já estão cadastrados!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      $this->buscar_2 = $this->con->prepare("SELECT * FROM despesa");
      $this->buscar_2->execute();
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          var dados = 
          $("#form #enviar").change(function(){
            var dados = $("form").serializeArray();
            var pg = "controle_de_gastos";
            if (dados) {
              $.post("controle_de_gastos.php",{dados:dados,pg:pg},function(e){
              $("#retorno_dados").html(e);
              $("#demo1").maskMoney({thousands:'.', decimal:',',precision:2});
              });
            }
          });
        });
      </script>
      <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
      <form class="form-horizontal form-label-left" method="post" id="form" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
        <center><span class="section">CADASTRAR CONTROLE DE GASTOS DE EMPRESA</span></center>
        <div class="item form-group">
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-6">
              <label>Empresa*:</label>
              <a href="?pg=cadastrar_empresa&aba=1" data-toggle="tooltip" title="Esse dado vem da opção 'cadastrar empresa', na aba empresa." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
              <select class="select2_single form-control" id="enviar" name="nome_empresa" required="" messa>
                <option selected="" disabled="" style="font-size: 15px">Empresa</option>
                <?php
                  while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                  ?>
                  <option value="<?php echo $this->buscar_linha->id_empresa?>"><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
                  <?php
                  }
                ?>
              </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
              <label>Despesa*:</label>  
              <a href="?pg=cadastrar_tipo_despesa&aba=6" data-toggle="tooltip" title="Esse dado vem da opção 'cadastrar tipo de despesa', na aba Setor contabil." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
              <select class="select2_single form-control" id="enviar" name="tipo_despesa" required="">
                <option disabled="" selected="">Despesa</option>
                  <?php
                    while ($this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ)) {
                    ?>
                    <option value="<?php echo $this->buscar_2_linha->id_despesa?>"><?php echo utf8_encode($this->buscar_2_linha->nome_despesa)?></option>
                    <?php
                    }
                  ?>
              </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
              <label>Mês*:</label> 
              <a data-toggle="tooltip" style="font-size: 20px;color:rgb(0,150,255)"></a>
              <select class="select2_single form-control" id="enviar" name="mes" required="">
                <option disabled="" selected="" style="font-size: 15px">Mês</option>
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
              </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
              <label>Ano*:</label>
              <a data-toggle="tooltip" style="font-size: 20px;color:rgb(0,150,255)"></a> 
              <input id="enviar" type="text" name="ano" class="form-control col-xs-12 col-sm-12 col-md-12 ano_alva" 
              placeholder="Ano" required="">
            </div>
          </div>
        <div id="retorno_dados" style="margin-top:5px"></div>
        </div>
        <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
        </div>
      </form>
      <?php
    }
    function listar_controle_de_gastos(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa ORDER BY nome_da_empresa");
      $this->buscar->execute();
      if (!empty($_POST['id_gasto'])) {
        $this->fk_despesa = $_POST['id_gasto'];
        $i = 0;
        while (count($this->fk_despesa)>$i) {
          $this->fk_despesa[$i];
          $this->excluir = $this->con->prepare("DELETE FROM gastos WHERE id_gasto=:id_gasto");
          $this->excluir->bindValue(":id_gasto",$this->fk_despesa[$i]);
          $this->excluir->execute();
          if ($this->excluir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_controle_de_gastos&aba=6"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_controle_de_gastos&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Despesa(s) excluida(s) com sucesso!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=listar_controle_de_gastos&aba=6"} , 4000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=listar_controle_de_gastos&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao excluir Despesa(s). Tente novamente mais tarde!</h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          $i++;
        }
      }
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $("form #enviar").change(function(){
            var dados = $("form").serializeArray();
            if (dados) {
              $.post("listar_controle_de_gastos.php",{dados:dados},function(e){
              $("#retorno_dados").html(e);
              });
            }
          });
        });
      </script>
      <form>
        <div class="item form-group"> 
          <div class="col-md-3 col-sm-4 col-xs-6">
            <select id="enviar" name="empresa" class="form-control" style="margin-left: -10px">
              <option disabled="" selected="" value="">Selecione uma opção</option>
              <?php
                while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                ?>
                <option value="<?php echo $this->buscar_linha->id_empresa?>"><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
                <?php
                }
              ?> 
            </select>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-5">
            <a data-toggle="tooltip" style="font-size: 20px;color:rgb(0,150,255)"></a> 
            <input id="enviar" type="text" name="ano"
            class="form-control col-xs-12 col-sm-12 col-md-12 ano_alva_2" placeholder="Ano">
          </div>
        </div>
      </form>
      <div id="retorno_dados" style="margin-top:40px"></div>
      <?php
      if (!empty($_GET['id_empresa'])) {
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            var id_empresa = <?php echo $_GET['id_empresa']?>;
            // alert(id_empresa);
            $("#enviar option[value='"+id_empresa+"']").prop("selected",true);
          });
        </script>
      <?php
      }
    }
    function editar_controle_de_gastos(){
      if (!empty($this->nome) AND !empty($this->tipo_despesa) AND !empty($this->mes) AND !empty($this->ano) AND !empty($this->id)) {
        $this->verificar = $this->con->prepare("SELECT * FROM gastos WHERE fk_empresa=:fk_empresa
          AND fk_despesa=:fk_despesa AND fk_status=:fk_status AND mes=:mes AND ano=:ano AND valor=:valor AND id_gasto!=:id_gasto");
        $this->verificar->bindValue(":fk_empresa",$this->nome);
        $this->verificar->bindValue(":fk_despesa",$this->tipo_despesa);
        $this->verificar->bindValue(":fk_status",$this->status_despesa);
        $this->verificar->bindValue(":mes",$this->mes);
        $this->verificar->bindValue(":ano",$this->ano);
        $this->verificar->bindValue(":valor",$this->valor);
        $this->verificar->bindValue(":id_gasto",$this->id);
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->verificar_2 = $this->con->prepare("SELECT * FROM gastos WHERE fk_empresa=:fk_empresa
          AND fk_despesa=:fk_despesa AND fk_status=:fk_status AND mes=:mes AND ano=:ano
           AND valor=:valor AND id_gasto=:id_gasto");
          $this->verificar_2->bindValue(":fk_empresa",$this->nome);
          $this->verificar_2->bindValue(":fk_despesa",$this->tipo_despesa);
          $this->verificar_2->bindValue(":fk_status",$this->status_despesa);
          $this->verificar_2->bindValue(":mes",$this->mes);
          $this->verificar_2->bindValue(":ano",$this->ano);
          $this->verificar_2->bindValue(":valor",$this->valor);
          $this->verificar_2->bindValue(":id_gasto",$this->id);
          $this->verificar_2->execute();
          if ($this->verificar_2->rowCount() == 0) {
            $this->atualizar = $this->con->prepare("UPDATE gastos SET fk_empresa=:fk_empresa,
              fk_despesa=:fk_despesa,fk_status=:fk_status,mes=:mes,ano=:ano,valor=:valor WHERE id_gasto=:id_gasto");
            $this->atualizar->bindValue(":fk_empresa",$this->nome);
            $this->atualizar->bindValue(":fk_despesa",$this->tipo_despesa);
            $this->atualizar->bindValue(":fk_status",$this->status_despesa);
            $this->atualizar->bindValue(":mes",$this->mes);
            $this->atualizar->bindValue(":ano",$this->ano);
            $this->atualizar->bindValue(":valor",$this->valor);
            $this->atualizar->bindValue(":id_gasto",$this->id);
            $this->atualizar->execute();
            if ($this->atualizar->rowCount()>0) {
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=listar_controle_de_gastos&aba=6&id_empresa=<?php echo $this->nome?>"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=listar_controle_de_gastos&aba=6&id_empresa=<?php echo $this->nome?>";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Controle de gasto editado com sucesso!<h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }else{
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                  setTimeout(function(){location.href="?pg=editar_controle_de_gastos&id_gastos=<?php echo $this->id?>&aba=6"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=editar_controle_de_gastos&id_gastos=<?php echo $this->id?>&aba=6";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Erro ao editar controle de gasto editado. Tenete novamente mais tarde!<h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=editar_controle_de_gastos&id_gastos=<?php echo $this->id?>&aba=6"} , 2000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=editar_controle_de_gastos&id_gastos=<?php echo $this->id?>&aba=6";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Você inseriu os mesmos dados!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=editar_controle_de_gastos&id_gastos=<?php echo $this->id?>&aba=6"} , 2000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=editar_controle_de_gastos&id_gastos=<?php echo $this->id?>&aba=6";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Esses dados de controle de dados já existem!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      $this->buscar_3 = $this->con->prepare("SELECT * FROM gastos INNER JOIN empresa ON gastos.fk_empresa = empresa.id_empresa INNER JOIN despesa ON gastos.fk_despesa = despesa.id_despesa WHERE id_gasto=:id_gasto");
      $this->buscar_3->bindValue(":id_gasto",$this->id);
      $this->buscar_3->execute();
      $this->buscar_3_linha = $this->buscar_3->FETCH(PDO::FETCH_OBJ);
      $this->buscar_4 = $this->con->prepare("SELECT * FROM despesa");
      $this->buscar_4->execute();
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#form #enviar").change(function(){
          var dados = $("form").serializeArray();
          var pg = "editar_controle_de_gastos";
          if (dados) {
            $.post("controle_de_gastos.php",{dados:dados,pg:pg},function(e){
            $("#retorno_dados").html(e);
            $("#demo1").maskMoney({thousands:'.', decimal:',',precision:2});
            });
          }
        });
      });
    </script>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" id="form" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">EDITAR CONTROLE DE GASTOS DE EMPRESA</span></center>
      <div class="item form-group">
        <div class="form-group">
          <div class="col-md-3 col-sm-3 col-xs-6">
            <label>Empresa* :</label>
            <select class="select2_single form-control" id="enviar" name="nome_empresa" required="">
              <option selected="" disabled="">Empresa</option>
              <?php
                while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                ?>
                <option value="<?php echo $this->buscar_linha->id_empresa?>"<?php echo(utf8_decode($this->buscar_3_linha->nome_da_empresa) == utf8_decode($this->buscar_linha->nome_da_empresa))?'selected':null?> ><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
                <?php
                }
              ?>
            </select>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
            <label>Despesa*:</label>  
            <select class="select2_single form-control" id="enviar" name="tipo_despesa" required="">
              <option disabled="" selected="">Despesa</option>
                <?php
                  while ($this->buscar_4_linha = $this->buscar_4->FETCH(PDO::FETCH_OBJ)) {
                  ?>
                  <option value="<?php echo $this->buscar_4_linha->id_despesa?>"<?php echo (utf8_decode($this->buscar_3_linha->nome_despesa) == utf8_encode($this->buscar_4_linha->nome_despesa))?'selected':null?>>
                    <?php echo utf8_encode($this->buscar_4_linha->nome_despesa) ?>
                  </option>
                  <?php
                  }
                ?>
            </select>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6"> 
            <label>Mês*:</label> 
            <select class="select2_single form-control" id="enviar" name="mes" required="">
              <option disabled="" selected="">Mês</option>
              <option value="1" <?php echo($this->buscar_3_linha->mes == 1)?'selected':null ?>>Janeiro</option>
              <option value="2" <?php echo($this->buscar_3_linha->mes == 2)?'selected':null ?>>Fevereiro</option>
              <option value="3" <?php echo($this->buscar_3_linha->mes == 3)?'selected':null ?>>Março</option>
              <option value="4" <?php echo($this->buscar_3_linha->mes == 4)?'selected':null ?>>Abril</option>
              <option value="5" <?php echo($this->buscar_3_linha->mes == 5)?'selected':null ?>>Maio</option>
              <option value="6" <?php echo($this->buscar_3_linha->mes == 6)?'selected':null ?>>Junho</option>
              <option value="7" <?php echo($this->buscar_3_linha->mes == 7)?'selected':null ?>>Julho</option>
              <option value="8" <?php echo($this->buscar_3_linha->mes == 8)?'selected':null ?>>Agosto</option>
              <option value="9" <?php echo($this->buscar_3_linha->mes == 9)?'selected':null ?>>Setembro</option>
              <option value="10" <?php echo($this->buscar_3_linha->mes == 10)?'selected':null ?>>Outubro</option>
              <option value="11" <?php echo($this->buscar_3_linha->mes == 11)?'selected':null ?>>Novembro</option>
              <option value="12" <?php echo($this->buscar_3_linha->mes == 12)?'selected':null ?>>Dezembro</option>
            </select>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
            <label>Ano*:</label>
            <input id="enviar" type="text" name="ano" class="form-control col-xs-12 col-sm-12 col-md-12 ano_alva" 
            placeholder="Ano da despesa" value="<?php echo $this->buscar_3_linha->ano?>">
          </div>
        </div>
        <input type="hidden" name="id_gasto" value="<?php echo $this->id?>">
        <div id="retorno_dados" style="margin-top:5px"></div>
      </div>
        <div class="form-group">
            <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
        </div>
      </form>
    <?php
    }
    function excluir_controle_de_gastos(){
      if (!empty($this->id)) {
        $this->excluir = $this->con->prepare("DELETE FROM gastos WHERE id_gasto=:id_gasto");
        $this->excluir->bindValue(":id_gasto",$this->id);
        $this->excluir->execute();
        if ($this->excluir->rowCount()>0) {
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=listar_controle_de_gastos&aba=6"} , 7000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=listar_controle_de_gastos&aba=6";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Controle de gasto excluido com sucesso!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=listar_controle_de_gastos&aba=6"} , 7000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=listar_controle_de_gastos&aba=6";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Erro ao exclui controle de gasto. Tente novamente mais tarde!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    }
    function listar_pdf_contrato(){
      $this->buscar = $this->con->prepare("SELECT pdf_contrato FROM contrato WHERE id_contrato=:id_contrato");
      $this->buscar->bindValue(":id_contrato",$this->id);
      $this->buscar->execute();
      $this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ);
      if (!empty($this->buscar_linha->pdf_contrato)) {
        ?>
        <center><strong style="color:#000">PDF DO CONTRATO</strong></center>
        <?php
      }else{
      ?>
      <center><h3 style="color:#000">Nenhum pdf cadastrado para esse contrato!</h3></center>
      <?php
      }
    }
    function exibir_tipo_contrato(){
    $this->buscar = $this->con->prepare("SELECT * FROM tipo_contrato");
    $this->buscar->execute();
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $("button[data-role=excluir_tipo_contrato]").click(function(){
          var id_tipo_contrato = $(this).val();
          $("#excluir_t_contrato").modal("show");
          $("#id_tipo_contrato").val(id_tipo_contrato);
        });
      });
    </script>
    <div class="modal fade" id="excluir_t_contrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
          </div>
          <div class="modal-body">
            <center><h2>Realmente deseja excluir esse tipo de contrato?</h2></center>
          </div>
          <div class="modal-footer">
            <form method="post" action="?pg=excluir_tipo_contrato&aba=2">
              <input type="hidden" name="id_tipo_contrato" id="id_tipo_contrato">
              <button type="submit" class="btn btn-success">Excluir</button>
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <center><strong style="color:#000">TIPO(S) DE CONTRATO(S) CADASTRADO(S)</strong></center>
    <div class="table table-responsive"> 
      <table id="example" class="table table-striped table-bordered table-responsive">
        <thead>
          <tr>
            <th>Tipo de contrato</th> 
            <th style="width: 50px">Editar</th>
            <th style="width: 50px">Excluir</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
          ?>
          <tr>
            <td><?php echo utf8_encode($this->buscar_linha->nome_tipo_contrato)?></td>
            <td><a href="?pg=editar_tipo_contrato&aba=2&id_tipo_contrato=<?php echo $this->buscar_linha->id_tipo_contrato?>" class="btn btn-primary fa fa-pencil"></a></td>
            <td><button data-role="excluir_tipo_contrato" class="btn btn-danger fa fa-trash" value="<?php echo $this->buscar_linha->id_tipo_contrato?>"></button></td> 
          </tr>
        <?php 
          } 
        ?>
        </tbody>
      </table>
    </div>
      <script type="text/javascript">
        var hc="none";
        $(document).ready(function() {
          $('#example').DataTable( {
              dom: 'Bfrtip',
              buttons: [
                  {
                      extend: 'print',
                      exportOptions: {
                          columns: [0]
                      }
                  },
                  {
                      extend: 'excelHtml5',
                      exportOptions: {
                          columns: [0]
                      },
                  },
                  {
                      extend: 'pdf',
                      title:'Tipo(s) de contrato',
                      exportOptions: {
                          columns: [0]
                      },
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
    }
    function listar_dashboard(){
      $this->contar_empresa = $this->con->prepare("SELECT COUNT(id_empresa) FROM empresa");
      $this->contar_empresa->execute();
      $this->contar_empresa_linha = $this->contar_empresa->FETCH(PDO::FETCH_COLUMN);
      $this->contar_contrato = $this->con->prepare("SELECT COUNT(id_contrato) FROM contrato");
      $this->contar_contrato->execute();
      $this->contar_contrato_linha = $this->contar_contrato->FETCH(PDO::FETCH_COLUMN);
      $this->contar_alvara = $this->con->prepare("SELECT COUNT(id_alvara) FROM alvara");
      $this->contar_alvara->execute();
      $this->contar_alvara_linha = $this->contar_alvara->FETCH(PDO::FETCH_COLUMN);
      $this->buscar = $this->con->prepare("SELECT * FROM agenda INNER JOIN 
          empresa ON agenda.fk_empresa=empresa.id_empresa");
      $this->buscar->execute();
      $this->buscar_2 = $this->con->prepare("SELECT COUNT(id_gasto) FROM gastos");
      $this->buscar_2->execute();
      $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_COLUMN);
    ?>
    <div class="container">
      <div class="row">
        <div class="animated flipInY col-sm-6 col-xs-12 col-md-6">
          <div class="tile-stats">
            <center><h2>ESTATÍSTICAS</h2></center>
            <canvas id="myChart" width="400" height="320px"></canvas>
          </div>
        </div>
        <?php
          if ($this->buscar->rowCount()>0) {
          ?>
          <div id="calendarModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                  <center><h2 id="modalTitle" class="modal-title"></h2></center>
                </div>
                <center><div id="modalBody" class="modal-body" style="font-size:17px"></div></center>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <div class="animated flipInY col-lg-6 col-sm-6 col-xs-12 col-md-6">
            <div class="tile-stats">
              <center><h2>LEMBRETES</h2></center>
              <div id="calendar">
              </div>
                <?php
                }else{
                ?>
                <center><h2>Nenhum evento cadastrado</h2></center>
                <?php
                }
              ?>
          </div>
        </div> 
        <!--<div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tile-stats">
            <center><strong>Quantidade de despesas gerenciadas no sistema</strong></center>
            <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <div class="count"><center><?php //echo $this->buscar_2_linha ?></center></div>
          </div>
        </div>!-->
      </div>
    </div>
    <script>
      $(function() {
        $('#calendar').fullCalendar({
            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'],
            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            buttonText: {
              today: 'Hoje',
          },
            eventClick:  function(event, jsEvent, view) {
              $('#modalTitle').html(event.title);
              $('#modalBody').html(event.description);
              $('#eventUrl').attr('href',event.url);
              $('#calendarModal').modal();
            },
            events: [
            <?php
               while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
              ?>
              {
                title  : '<?php echo utf8_encode($this->buscar_linha->nome_da_empresa) ?>',
                color  : '<?php 
                  if($this->buscar_linha->status_lembrete == 1){
                    echo "#4e879c";
                  }else{ 
                    echo "#D2691E";
                  } 
                ?>',
                start  : '<?php echo $this->buscar_linha->data ?>',
                description : '<?php echo utf8_encode($this->buscar_linha->obs) ?>',
              },
            <?php 
              }
            ?>
          ],
        });
      });
    </script>
    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Empresas", "Alvarás", "Contratos","Despesas"],
            datasets: [{
                label: 'QUANTIDADE',
                data: [<?php echo $this->contar_empresa_linha ?>, <?php echo $this->contar_alvara_linha ?>, <?php echo $this->contar_contrato_linha ?>,<?php echo $this->buscar_2_linha ?>],
                backgroundColor: [
                    'rgba(255, 0, 0, 0.7)',
                    'rgba(0, 200, 0, 0.7)',
                    'rgba(0,100,250, 0.7)',
                    'rgba(0,100,100, 0.7)',
                ],
                borderColor: [
                    'rgba(200, 100, 0, 0.8)',
                    'rgba(200, 100, 0, 0.8)',
                    'rgba(200, 100, 0, 0.8)',
                    'rgba(200, 100, 0, 0.8)',
                ],
            }]
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                    }
                }]
            }
        }
    });
    </script>
    <?php
    }
    function listar_estatistica(){
    $this->contar_empresa = $this->con->prepare("SELECT COUNT(id_empresa) FROM empresa");
    $this->contar_empresa->execute();
    $this->contar_empresa_linha = $this->contar_empresa->FETCH(PDO::FETCH_COLUMN);
    $this->contar_contrato = $this->con->prepare("SELECT COUNT(id_contrato) FROM contrato");
    $this->contar_contrato->execute();
    $this->contar_contrato_linha = $this->contar_contrato->FETCH(PDO::FETCH_COLUMN);
    $this->contar_alvara = $this->con->prepare("SELECT COUNT(id_alvara) FROM alvara");
    $this->contar_alvara->execute();
    $this->contar_alvara_linha = $this->contar_alvara->FETCH(PDO::FETCH_COLUMN);
    $this->buscar = $this->con->prepare("SELECT * FROM agenda INNER JOIN 
        empresa ON agenda.fk_empresa=empresa.id_empresa");
    $this->buscar->execute();
    $this->buscar_2 = $this->con->prepare("SELECT COUNT(id_gasto) FROM gastos");
    $this->buscar_2->execute();
    $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_COLUMN);
    ?>
    <canvas id="myChart" width="400" height="200px"></canvas>
    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Empresas", "Alvarás", "Contratos","Despesas"],
            datasets: [{
                label: 'QUANTIDADE',
                data: [<?php echo $this->contar_empresa_linha ?>, <?php echo $this->contar_alvara_linha ?>, <?php echo $this->contar_contrato_linha ?>,<?php echo $this->buscar_2_linha ?>],
                backgroundColor: [
                    'rgba(255, 0, 0, 0.7)',
                    'rgba(0, 200, 0, 0.7)',
                    'rgba(0,100,250, 0.7)',
                    'rgba(0,100,100, 0.7)',
                ],
                borderColor: [
                    'rgba(200, 100, 0, 0.8)',
                    'rgba(200, 100, 0, 0.8)',
                    'rgba(200, 100, 0, 0.8)',
                    'rgba(200, 100, 0, 0.8)',
                ],
            }]
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                    }
                }]
            }
        }
    });
    </script>
    <?php
    }
    function nova_agenda(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      if (!empty($this->data) AND !empty($this->fk_empresa)) {
        $this->verificar = $this->con->prepare("SELECT * FROM agenda WHERE fk_empresa=:fk_empresa AND data=:data");
        $this->verificar->bindValue(":fk_empresa",$this->fk_empresa);
        $this->verificar->bindValue(":data",$this->data);
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->inserir = $this->con->prepare("INSERT INTO agenda(fk_empresa,data,obs,status_lembrete) VALUES(:fk_empresa,:data,:obs,:status_lembrete)");
          $this->inserir->bindValue(":fk_empresa",$this->fk_empresa);
          $this->inserir->bindValue(":data",$this->data);
          $this->inserir->bindValue(":obs",utf8_decode($this->obs));
          $this->inserir->bindValue(":status_lembrete",0);
          $this->inserir->execute();
          if ($this->inserir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=nova_agenda&aba=8"} , 2000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=nova_agenda&aba=8";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Lembrete adicionado com sucesso!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=nova_agenda&aba=8"} , 3000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=nova_agenda&aba=8";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao adicionar lembrete. Tente novamente mais tarde!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=nova_agenda&aba=8"} , 3000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=nova_agenda&aba=8";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Esse lembrete já existe!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">CADASTRAR LEMBRETE</span></center>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nome da empresa*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-11">
          <select class="form-control" name="id_empresa" required="required">
            <option value="" selected="" disabled="">Escolha uma opção</option>
            <?php
              while ($this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ)) {
              ?>
              <option value="<?php echo $this->buscar_linha->id_empresa?>"><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
              <?php
              }
            ?>          
          </select>
        </div>
        <a href="?pg=cadastrar_empresa&aba=1" data-toggle="tooltip" title="Esse dado vem da opção 'cadastrar empresa', na aba empresa." style="font-size: 20px;color:rgb(0,150,255)"><i class="fa fa-info-circle"></i></a>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Data*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
          <input type='text' class="form-control" placeholder="data" name="data" id='myDatepicker' required="">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comentário da agenda: <span class="required"></span>
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
            <textarea class="resizable_textarea form-control" placeholder="Comentário" name="obs" maxlength="80"></textarea>
        </div>
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function ver_lembrete(){
    $this->buscar = $this->con->prepare("SELECT * FROM agenda INNER JOIN 
          empresa ON agenda.fk_empresa=empresa.id_empresa");
        $this->buscar->execute();
        if ($this->buscar->rowCount()>0) {
          ?>
           <script>
            $(function() {
              $('#calendar').fullCalendar({
                  monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                  monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                  dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'],
                  dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                  buttonText: {
                    today: 'Hoje',
                },
                  eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#calendarModal').modal();
                  },
                  events: [
                  <?php
                     while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
                    ?>
                    {
                      title  : '<?php echo utf8_encode($this->buscar_linha->nome_da_empresa) ?>',
                      color  : '<?php 
                        if($this->buscar_linha->status_lembrete == 1){
                          echo "#4e879c";
                        }else{ 
                          echo "#D2691E";
                        } 
                      ?>',
                      start  : '<?php echo $this->buscar_linha->data ?>',
                      description : '<?php echo utf8_encode($this->buscar_linha->obs) ?>',
                    },
                  <?php 
                    }
                  ?>
                ],
              });
            });
          </script>
          <div id="calendarModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                        <center><h2 id="modalTitle" class="modal-title"></h2></center>
                    </div>
                    <center><div id="modalBody" class="modal-body" style="font-size:17px"></div></center>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
            </div>
          <div id='calendar' style="margin-top:10px"></div>
        <?php
        }else{
        ?>
        <center><h2>Nenhum lembrete cadastrado!</h2></center>
        <?php
        }
    }
    function gerenciar_lembrete(){
      $this->buscar = $this->con->prepare("SELECT * FROM agenda INNER JOIN empresa ON agenda.fk_empresa = empresa.id_empresa");
      $this->buscar->execute();
      if (!empty($_POST['id_empresa'])) {
        $this->id = $_POST['id_empresa'];
        $i = 0;
        while (count($this->id)>$i) {
          $this->excluir = $this->con->prepare("DELETE FROM agenda WHERE id_agenda=:id_agenda");
          $this->excluir->bindValue(":id_agenda",$this->id[$i]);
          $this->excluir->execute();
          if ($this->excluir->rowCount()>0) {
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=gerenciar_lembrete&aba=8"} , 7000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=gerenciar_lembrete&aba=8";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Lembrete(s) excluido(s) com sucesso!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=gerenciar_lembrete&aba=8"} , 7000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=gerenciar_lembrete&aba=8";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Erro ao excluir lembrete. Tente novamente mais tarde!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          $i++;
        }
      }
    ?>
    <div class="modal fade" id="excluir_lembrete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
          </div>
          <div class="modal-body">
            <center><h2>Realmente deseja excluir esse(s) lembrete(s)?</h2></center>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="excluir_true">Excluir</button>
            <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <center><strong style="color:#000">DATA(S) DE LEMBRETE(S)</strong></center>
    <button data-toggle="tooltip" title="Exclusão de eventos selecionados na tabela" class="btn btn-danger fa fa-trash" id="excluir"></button>
    <form method="post" action="" id="excluir_agenda">
      <div class="table table-responsive"> 
        <table id="example" class="table table-striped table-bordered table-responsive">
          <thead>
            <tr>
              <th style="width: 80px">Empresa</th>
              <th>Data</th>
              <th>Observação</th>
              <th>Status</th> 
              <th style="width:40px">Editar</th>
              <th style="width:40px"><center>Selecionar</center><center><input type="checkbox" id="select_all" style="margin-left:24px;"></center></th>
            </tr>
          </thead>
          <tbody>
            <?php
              while ($this->buscar_linha = $this->buscar->FETCH(PDO::FETCH_OBJ)) {
            ?>
            <tr>
              <td><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></td>
              <td><?php echo date("d/m/Y",strtotime($this->buscar_linha->data))?></td>
              <td><?php echo utf8_encode($this->buscar_linha->obs)?></td>
              <td>
                <?php 
                  if ($this->buscar_linha->status_lembrete == 0) {
                  ?>
                  <i class="fa fa-remove fa-2x" style="color:red"></i>Pendente
                  <?php
                  }else{
                  ?>
                  <i class="fa fa-check fa-2x" style="color:green"></i>Ok
                  <?php
                  }
                ?>
              </td>
              <td><a href="?pg=editar_lembrete&aba=8&id_agenda=<?php echo $this->buscar_linha->id_agenda?>" class="btn btn-primary fa fa-pencil"></a></td>
              <td><center><input type="checkbox" value="<?php echo $this->buscar_linha->id_agenda?>" id="empresa" name="id_empresa[]"></center></td> 
            </tr>
          <?php 
            } 
          ?>
          </tbody>
        </table>
      </div>
    </form>
      <script type="text/javascript">
        var hc="none";
        $(document).ready(function() {
        $("#select_all").click(function(){
          if ($("#select_all").prop('checked')) {
            $("form #empresa").prop('checked',true);
          }else{
            $("form #empresa").prop('checked',false);
          }
        });
        $("#excluir").click(function(){
          $("#excluir_lembrete").modal("show");
        });
        $("#excluir_true").click(function(){
          $("#excluir_agenda").submit();
        });
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0,1,2,3]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0,1,2,3]
                    },
                },
                {
                    extend: 'pdf',
                    title:'Lembretes',
                    exportOptions: {
                        columns: [0,1,2,3]
                    },
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
    }
    function editar_lembrete(){
      $this->buscar = $this->con->prepare("SELECT * FROM empresa");
      $this->buscar->execute();
      $this->buscar_2 = $this->con->prepare("SELECT * FROM agenda INNER JOIN empresa ON agenda.fk_empresa = empresa.id_empresa
        WHERE id_agenda=:id_agenda");
      $this->buscar_2->bindValue(":id_agenda",$this->id);
      $this->buscar_2->execute();
      $this->buscar_2_linha = $this->buscar_2->FETCH(PDO::FETCH_OBJ);
      if (!empty($this->fk_empresa) AND !empty($this->data) AND !empty($this->id)) {
        $this->verificar = $this->con->prepare("SELECT * FROM agenda WHERE fk_empresa=:fk_empresa AND data=:data AND id_agenda!=:id_agenda");
        $this->verificar->bindValue(":fk_empresa",$this->fk_empresa);
        $this->verificar->bindValue(":data",$this->data);
        $this->verificar->bindValue(":id_agenda",$this->id);
        $this->verificar->execute();
        if ($this->verificar->rowCount() == 0) {
          $this->verificar_2 = $this->con->prepare("SELECT * FROM agenda WHERE fk_empresa=:fk_empresa AND data=:data AND status_lembrete=:status_lembrete AND obs=:obs 
            AND id_agenda=:id_agenda");
          $this->verificar_2->bindValue(":fk_empresa",$this->fk_empresa);
          $this->verificar_2->bindValue(":data",$this->data);
          $this->verificar_2->bindValue(":status_lembrete",$this->status);
          $this->verificar_2->bindValue(":obs",utf8_decode($this->obs));
          $this->verificar_2->bindValue(":id_agenda",$this->id);
          $this->verificar_2->execute();
          if ($this->verificar_2->rowCount() == 0) {
            $this->atualizar = $this->con->prepare("UPDATE agenda SET fk_empresa=:fk_empresa,data=:data,obs=:obs,status_lembrete=:status_lembrete 
              WHERE id_agenda=:id_agenda");
            $this->atualizar->bindValue(":fk_empresa",$this->fk_empresa);
            $this->atualizar->bindValue(":data",$this->data);
            $this->atualizar->bindValue(":obs",utf8_decode($this->obs));
            $this->atualizar->bindValue(":status_lembrete",$this->status);
            $this->atualizar->bindValue(":id_agenda",$this->id);
            $this->atualizar->execute();
            if ($this->atualizar->rowCount()>0) {
            ?>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#retorno_ok").modal("show");
                setTimeout(function(){location.href="?pg=gerenciar_lembrete&aba=8"} , 2000);
                $("#retorno_ok").click(function(){
                  window.location.href="?pg=gerenciar_lembrete&aba=8";
                });  
              });
            </script>
            <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                  </div>
                  <div class="modal-body">
                    <center><h2>Lembrete editado com sucesso!<h2></center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
          }else{
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $("#retorno_ok").modal("show");
              setTimeout(function(){location.href="?pg=editar_lembrete&aba=8&id_agenda=<?php echo $this->id ?>"} , 2000);
              $("#retorno_ok").click(function(){
                window.location.href="?pg=editar_lembrete&aba=8&id_agenda=<?php echo $this->id ?>";
              });  
            });
          </script>
          <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
                </div>
                <div class="modal-body">
                  <center><h2>Você inseriu os mesmos dados!<h2></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=editar_lembrete&aba=8&id_agenda=<?php echo $this->id ?>"} , 2000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=editar_lembrete&aba=8&id_agenda=<?php echo $this->id ?>";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Esse lembrete já existe!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
      <center><span class="section">EDITAR LEMBRETE</span></center>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nome da empresa*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
          <select class="form-control" name="id_empresa" required="required">
            <option value="" selected="" disabled="">Escolha uma opção</option>
            <?php
              while ($this->buscar_linha = $this->buscar->fetch(PDO::FETCH_OBJ)) {
              ?>
              <option value="<?php echo $this->buscar_linha->id_empresa?>" <?php echo($this->buscar_linha->id_empresa == $this->buscar_2_linha->fk_empresa?'selected':null) ?>><?php echo utf8_encode($this->buscar_linha->nome_da_empresa)?></option>
              <?php
              }
            ?>          
          </select>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Data*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
          <input type='text' class="form-control" id='myDatepicker' placeholder="data" name="data" required="" value="<?php echo date("d-m-Y",strtotime($this->buscar_2_linha->data))?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comentário da agenda:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
            <textarea class="resizable_textarea form-control" placeholder="Comentário" name="obs" maxlength="80"><?php echo utf8_encode($this->buscar_2_linha->obs) ?></textarea>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Status do lembrete*:
        </label>
        <div class="col-md-7 col-sm-6 col-xs-12">
          <select class="form-control" name="status_lembrete" required="required">
            <option value="" selected="" disabled="">Escolha uma opção</option> 
            <option value="1" <?php echo($this->buscar_2_linha->status_lembrete == 1)?'selected':null ?>>Ok</option>    
            <option value="0" <?php echo($this->buscar_2_linha->status_lembrete == 0)?'selected':null ?>>Pendente</option>       
          </select>
        </div>
      </div>
      <div class="form-group">
          <center><button id="send" type="submit" class="btn btn-success">Salvar</button></center>
      </div>
    </form>
    <?php
    }
    function excluir_lembrete(){
      if (!empty($this->id)) {
        $this->excluir = $this->con->prepare("DELETE FROM agenda WHERE id_agenda=:id_agenda");
        $this->excluir->bindValue(":id_agenda",$this->id);
        $this->excluir->execute();
        if ($this->excluir->rowCount()>0) {
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=gerenciar_lembrete&aba=8"} , 7000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=gerenciar_lembrete&aba=8";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Lembrete excluido com sucesso!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }else{
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#retorno_ok").modal("show");
            setTimeout(function(){location.href="?pg=gerenciar_lembrete&aba=8"} , 7000);
            $("#retorno_ok").click(function(){
              window.location.href="?pg=gerenciar_lembrete&aba=8";
            });  
          });
        </script>
        <div class="modal fade" id="retorno_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class="modal-title" id="myModalLabel">Atenção</h3></center>
              </div>
              <div class="modal-body">
                <center><h2>Erro ao excluir lembrete. Tente novamente mais tarde!<h2></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="retorno_ok">Ok</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    }
  }
?>