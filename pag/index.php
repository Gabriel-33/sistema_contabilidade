<?php
  require "seguranca.php";
  require 'modulos.php';
  $modulos = new modulos();
  $seguranca = new seguranca();
  $modulos->buscar_dados_sistema();
  $seguranca->verificar();
  $modulos->buscar_user();
  $nome_dash = $modulos->buscar_linha->nome_dash;
  $nome_user = $modulos->buscar_2_linha->nome_user;
  $nivel_user = $_SESSION['nivel_user'];
  if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == "sair") {
      $seguranca->sair();
    }
  }
  if (isset($_GET['pg']) AND isset($_GET['aba'])) {
    $link = $_GET['pg'];
    $aba = $_GET['aba'];
  }else{
    $link = null;
    $aba = null;
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php
        if (empty($_GET['pg'])) {
          echo $modulos->buscar_linha->nome_dash;
        }else{
          echo str_replace("_", " ",$_GET['pg'])."-".date("d-m-Y");
        }
      ?></title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="../vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
  </head>
  <body class="nav-md" style="background-color:#fff">
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <style type="text/css">
      input[type="search"]{
        width: 90px!important;
        font-size: 15px;
      }
      #example tr{
        color:#000;
        font-size: 12px;
        border-color:#000!important;
      }
      @media print {
        .printBorder {
          border-width:1px;
          border-style:solid;
          border-color:black;
        }
      }
    </style>
    <?php
      if (isset($_GET['pg']) AND isset($_GET['aba'])) {
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#<?php echo $aba?> #<?php echo $aba?>").css("display","block");
          $("ul li #<?php echo $link?>").css("color","yellow");
          $("ul li .<?php echo $link?>").css("color","yellow");
          $("ul li a[data-role=<?php echo $link?>]").css("color","yellow");
          $("#<?php echo $aba?>").addClass("active");
        });
      </script>
      <?php
      }
    ?>  
    <script type="text/javascript">
      $(document).ready(function(){
        $("#sair").click(function(){
          $("#myModal").modal("show");
        });
      });
    </script>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h4 class="modal-title" id="myModalLabel">Atenção</h4></center>
          </div>
          <div class="modal-body">
            <center><h2>Realmente deseja sair?</h2></center>
          </div>
          <div class="modal-footer">
            <a href="?acao=sair" class="btn btn-success">Sim,desejo</a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container body">
      <?php
        if (!empty($modulos->buscar_2_linha->color_dash)) {
        ?>
        <div class="main_container" style="background-color:<?php echo $modulos->buscar_2_linha->color_dash?>">
        <?php
        }else{
        ?>
        <div class="main_container" style="background-color:#2A3F54">
        <?php
        }
      ?>
        <div class="col-md-3 left_col" style="background-color:<?php echo $modulos->buscar_2_linha->color_dash?>"> 
          <div class="left_col scroll" style="background-color:<?php echo $modulos->buscar_2_linha->color_dash?>">
            <div class="navbar nav_title" style="border: 0;background-color:<?php echo $modulos->buscar_2_linha->color_dash?>">
              <div class="profile clearfix" style="background-color:<?php echo $modulos->buscar_2_linha->color_dash?>">
                <div class="profile_pic">
                  <img src="<?php echo $modulos->buscar_linha->img_dash?>" alt="..." class="img-circle profile_img" style="height:85px;width:85px;">
                </div>
                <div class="profile_info">
                  <h2 style="margin-top: 31px;margin-left:10px"><?php echo utf8_encode($modulos->buscar_linha->nome_dash)?></h2>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <?php
              if ($nivel_user == "2") {
            ?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_men" style="margin-top: 50px">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li id="1"><a><i class="fa fa-building"></i> Empresa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="1">
                      <li><a href="?pg=cadastrar_empresa&aba=1" data-role="cadastrar_empresa_csv" id="cadastrar_empresa">Cadastrar empresa</a></li>
                      <li><a href="?pg=listar_empresas&aba=1" id="listar_empresas" class="editar_empresa" data-role="excluir_empresa">Exibir empresas</a></li>
                    </ul>
                  </li>  
                  <li id="6"><a><i class="fa fa-usd"></i> Setor contábil <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="6">
                      <li><a href="?pg=cadastrar_tipo_despesa&aba=6" id="cadastrar_tipo_despesa">Cadastrar tipo de despesa</a></li>
                      <li><a href="?pg=listar_tipo_despesas&aba=6" id="listar_tipo_despesas" class="editar_tipo_despesas">Exibir tipo de despesas cadastradas</a></li>
                      <li><a href="?pg=cadastrar_status&aba=6" id="cadastrar_status">Cadastrar status de despesas</a></li>
                      <li><a href="?pg=listar_status_empresa&aba=6" id="listar_status_empresa" class="editar_status_despesa">Exibir status de despesas cadastradas</a></li>
                      <li><a href="?pg=controle_de_gastos&aba=6" id="controle_de_gastos">Controle de gastos</a></li>
                      <li><a href="?pg=listar_controle_de_gastos&aba=6" id="listar_controle_de_gastos" class="editar_controle_de_gastos">Exibir controle de gastos</a></li>
                    </ul>
                  </li>
                  <li id="5"><a><i class="fa fa-file-o"></i> Alvará <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="5">
                      <li><a href="?pg=cadastrar_alvara&aba=5" id="cadastrar_alvara">Cadastrar alvará</a></li>
                      <li><a href="?pg=listar_alvara&aba=5" id="listar_alvara" class="editar_alva" data-role="excluir_alva">Exibir alvará</a></li>
                    </ul>
                  </li>
                  <li id="2"><a><i class="fa fa-file-text"></i> Contratos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="2">
                      <li><a href="?pg=cadastrar_tipo_contrato&aba=2" id="cadastrar_tipo_contrato">Cadastrar tipo de contrato</a></li>
                      <li><a href="?pg=exibir_tipo_contrato&aba=2" id="exibir_tipo_contrato" class="editar_tipo_contrato">Exibir tipos de contratos cadastrados</a></li>
                      <li><a href="?pg=cadastrar_contrato&aba=2" id="cadastrar_contrato">Cadastrar contrato</a></li>
                      <li><a href="?pg=listar_contrato&aba=2" id="listar_contrato" class="editar_contrato" data-role="excluir_contrato">Exibir contratos</a></li>
                    </ul>
                  </li>
                  <li id="3"><a><i class="fa fa-user"></i> Usuário <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="3">
                      <li><a href="?pg=cadastrar_admins&aba=3" id="cadastrar_admins">Cadastrar administradores</a></li>
                      <li><a href="?pg=listar_admins&aba=3" id="listar_admins" data-role="editar_admin">Listar administrador</a></li>
                      <li><a href="?pg=personalizar_user&aba=3" id="personalizar_user">Personalizar usuário</a></li>
                      <li><a href="?pg=personalizar_senha&aba=3" id="personalizar_senha">Alterar senha</a></li>
                    </ul>
                  </li>
                  <li id="8"><a><i class="fa fa-calendar"></i> Agenda <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="8">
                      <li><a href="?pg=nova_agenda&aba=8" id="nova_agenda">Nova agenda</a></li>
                      <li><a href="?pg=gerenciar_lembrete&aba=8" id="gerenciar_lembrete" data-role="editar_lembrete">Gerenciar lembretes</a></li>
                      <li><a href="?pg=ver_lembrete&aba=8" id="ver_lembrete">Ver lembretes</a></li>
                    </ul>
                  </li>
                  <li id="7"><a><i class="fa fa-plus"></i> Mais <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="7">
                      <li><a href="?pg=listar_dashboard&aba=7" id="listar_dashboard">Exibir dashboard</a></li>
                      <li><a href="?pg=listar_estatistica&aba=7" id="listar_estatistica">Exibir estatísticas</a></li>
                      <li><a href="?pg=personalizar_sistema&aba=7&id_user=<?php echo $_SESSION['id_user'] ?>" id="personalizar_sistema">Personalizar sistema</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <?php 
              }else{
            ?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_men" style="margin-top: 50px">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li id="1"><a><i class="fa fa-building"></i> Empresa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="1">
                      <li><a href="?pg=cadastrar_empresa&aba=1" data-role="cadastrar_empresa_csv" id="cadastrar_empresa">Cadastrar empresa</a></li>
                      <li><a href="?pg=listar_empresas&aba=1" id="listar_empresas" class="editar_empresa" data-role="excluir_empresa">Exibir empresas</a></li>
                    </ul>
                  </li>  
                  <li id="6"><a><i class="fa fa-usd"></i> Setor contábil <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="6">
                      <li><a href="?pg=cadastrar_tipo_despesa&aba=6" id="cadastrar_tipo_despesa">Cadastrar tipo de despesa</a></li>
                      <li><a href="?pg=listar_tipo_despesas&aba=6" id="listar_tipo_despesas" class="editar_tipo_despesas">Exibir tipo de despesas cadastradas</a></li>
                      <li><a href="?pg=cadastrar_status&aba=6" id="cadastrar_status">Cadastrar status de despesas</a></li>
                      <li><a href="?pg=listar_status_empresa&aba=6" id="listar_status_empresa" class="editar_status_despesa">Exibir status de despesas cadastradas</a></li>
                      <li><a href="?pg=controle_de_gastos&aba=6" id="controle_de_gastos">Controle de gastos</a></li>
                      <li><a href="?pg=listar_controle_de_gastos&aba=6" id="listar_controle_de_gastos" class="editar_controle_de_gastos">Exibir controle de gastos</a></li>
                    </ul>
                  </li>
                  <li id="5"><a><i class="fa fa-file-o"></i> Alvará <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="5">
                      <li><a href="?pg=cadastrar_alvara&aba=5" id="cadastrar_alvara">Cadastrar alvará</a></li>
                      <li><a href="?pg=listar_alvara&aba=5" id="listar_alvara" class="editar_alva" data-role="excluir_alva">Exibir alvará</a></li>
                    </ul>
                  </li>
                  <li id="2"><a><i class="fa fa-file-text"></i> Contratos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="2">
                      <li><a href="?pg=cadastrar_tipo_contrato&aba=2" id="cadastrar_tipo_contrato">Cadastrar tipo de contrato</a></li>
                      <li><a href="?pg=exibir_tipo_contrato&aba=2" id="exibir_tipo_contrato" class="editar_tipo_contrato">Exibir tipos de contratos cadastrados</a></li>
                      <li><a href="?pg=cadastrar_contrato&aba=2" id="cadastrar_contrato">Cadastrar contrato</a></li>
                      <li><a href="?pg=listar_contrato&aba=2" id="listar_contrato" class="editar_contrato" data-role="excluir_contrato">Exibir contratos</a></li>
                    </ul>
                  </li>
                  <li id="3"><a><i class="fa fa-user"></i> Usuário <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="3">
                      <li><a href="?pg=cadastrar_admins&aba=3" id="cadastrar_admins">Cadastrar administradores</a></li>
                      <li><a href="?pg=listar_admins&aba=3" id="listar_admins">Listar administrador</a></li>
                      <li><a href="?pg=personalizar_user&aba=3" id="personalizar_user">Personalizar usuário</a></li>
                      <li><a href="?pg=personalizar_senha&aba=3" id="personalizar_senha">Alterar senha</a></li>
                    </ul>
                  </li>
                  <li id="8"><a><i class="fa fa-calendar"></i> Agenda <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="8">
                      <li><a href="?pg=nova_agenda&aba=8" id="nova_agenda">Nova agenda</a></li>
                      <li><a href="?pg=gerenciar_lembrete&aba=8" id="gerenciar_lembrete" data-role="editar_lembrete">Gerenciar lembretes</a></li>
                      <li><a href="?pg=ver_lembrete&aba=8" id="ver_lembrete">Ver lembretes</a></li>
                    </ul>
                  </li>
                  <li id="7"><a><i class="fa fa-plus"></i> Mais <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" id="7">
                      <li><a href="?pg=listar_dashboard&aba=7" id="listar_dashboard">Exibir dashboard</a></li>
                      <li><a href="?pg=listar_estatistica&aba=7" id="listar_estatistica">Exibir estatísticas</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <?php } ?>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $modulos->buscar_2_linha->img?>" alt="" style="width: 50px;height: 50px"><?php echo utf8_encode(strtoupper($modulos->buscar_2_linha->nome_user))?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="?pg=listar_dashboard&aba=7"><i class="fa fa-eye pull-right"></i>Dashboard</a></li>
                    <li><a href="#" id="sair"><i class="fa fa-sign-out pull-right"></i>Sair</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main" style="background-color:rgba(255,255,255,0.9);min-height:750px">
          <div class="" style="min-height:700px">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <?php
                      if (isset($_GET['pg'])) {
                        $pg = $_GET['pg'];
                           if ($nivel_user == "2") {
                            if ($pg == "personalizar_sistema") {
                              $nome_dash = isset($_POST['nome_dash'])?$_POST['nome_dash']:null;
                              $cor_opc = isset($_POST['cor'])?$_POST['cor']:null;
                              $nova_cor = isset($_POST['nova_cor'])?$_POST['nova_cor']:null;
                              $img = isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
                              $img_tmp = isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:null;
                              $modulos->img_erro = isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
                              if ($cor_opc == 1) {
                                $cor = $modulos->buscar_2_linha->color_dash; 
                              }elseif($cor_opc == 2){
                                $cor = $nova_cor;
                              }else{
                                $cor = "";
                              }
                              if (!empty($img_tmp)) {
                                  $ext = pathinfo($img,PATHINFO_EXTENSION);
                                  $modulos->set_img(uniqid().".".$ext);
                              }
                              $modulos->set_nome(htmlspecialchars($nome_dash));
                              $modulos->set_cor($cor);
                              $modulos->set_img_tmp($img_tmp);
                              $modulos->$pg();
                           }elseif ($pg == "personalizar_user") {
                             $nome = isset($_POST['nome_user'])?$_POST['nome_user']:null;
                             $email = isset($_POST['email_user'])?$_POST['email_user']:null;
                             $gmail = isset($_POST['gmail'])?$_POST['gmail']:null;
                             $img = isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
                             $img_tmp = isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:null;
                             $img_error = isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
                             $modulos->set_nome(htmlspecialchars($nome));
                             $modulos->set_email($email);
                             $modulos->set_gmail($gmail);
                             $modulos->img_erro = $img_error;
                             if (!empty($img)) {
                               $ext = pathinfo($img,PATHINFO_EXTENSION);
                               $modulos->set_img(uniqid().".".$ext);
                             }
                             $modulos->set_img_tmp($img_tmp);
                             $modulos->$pg();
                           }elseif ($pg == "personalizar_senha") {
                             $senha = isset($_POST['senha'])?$_POST['senha']:null;
                             $nova_senha = isset($_POST['nova_senha'])?$_POST['nova_senha']:null;
                             $confirmar_nova_senha = isset($_POST['confirmar_nova_senha'])?$_POST['confirmar_nova_senha']:null;
                             $modulos->set_senha($senha);
                             $modulos->set_novaSenha($nova_senha);
                             $modulos->set_cfSenha($confirmar_nova_senha);
                             $modulos->$pg();
                           }elseif ($pg == "cadastrar_admins") {
                             $nome = isset($_POST['nome_user'])?$_POST['nome_user']:null;
                             $nivel_user = isset($_POST['nivel_user'])?$_POST['nivel_user']:null;
                             $senha = isset($_POST['senha'])?$_POST['senha']:null;
                             $email = isset($_POST['email_user'])?$_POST['email_user']:null;
                             $gmail = isset($_POST['gmail_user'])?$_POST['gmail_user']:null;
                             $img = isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
                             $img_tmp = isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:null;
                             $img_error = isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
                             $modulos->set_nome(htmlspecialchars($nome));
                             $modulos->set_senha($senha);
                             $modulos->set_email($email);
                             $modulos->set_gmail($gmail);
                             $modulos->nivel = $nivel_user;
                             $modulos->img_erro = $img_error;
                             if (!empty($img)) {
                               $ext = pathinfo($img,PATHINFO_EXTENSION);
                               $modulos->set_img(uniqid().".".$ext);
                             }
                             $modulos->set_img_tmp($img_tmp);
                             $modulos->cadastrar_admin_root();
                           }elseif ($pg == "listar_admins") {
                            $modulos->listar_admin_root();
                           }elseif ($pg == "editar_admin") {
                            $modulos->id = $_GET['id_admin'];                            
                            $nome = isset($_POST['nome_user'])?$_POST['nome_user']:null;
                            $nivel_user = isset($_POST['nivel_user'])?$_POST['nivel_user']:null;
                            $senha = isset($_POST['senha'])?$_POST['senha']:null;
                            $email = isset($_POST['email_user'])?$_POST['email_user']:null;
                            $gmail = isset($_POST['gmail'])?$_POST['gmail']:null;
                            $img = isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
                            $img_tmp = isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:null;
                            $img_error = isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
                            $modulos->set_nome(htmlspecialchars($nome));
                            $modulos->set_senha($senha);
                            $modulos->set_email($email);
                            $modulos->set_gmail($gmail);
                            $modulos->nivel = $nivel_user;
                            $modulos->img_erro = $img_error;
                            if (!empty($img)) {
                              $ext = pathinfo($img,PATHINFO_EXTENSION);
                              $modulos->set_img(uniqid().".".$ext);
                            }
                            $modulos->set_img_tmp($img_tmp);
                            $modulos->$pg();
                           }
                           elseif ($pg == "cadastrar_empresa") {
                            $nome = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                            $num_pasta = isset($_POST['num_pasta'])?$_POST['num_pasta']:null;
                            $modulos->set_nome($nome);
                            $modulos->set_num_pasta($num_pasta);
                            $modulos->$pg();
                           }elseif($pg == "cadastrar_empresa_csv"){
                            $arquivo = isset($_FILES['csv']['name'])?$_FILES['csv']['name']:null;
                            $arquivo_tmp = isset($_FILES['csv']['tmp_name'])?$_FILES['csv']['tmp_name']:null;
                            $modulos->set_nome($arquivo);
                            $modulos->set_csv($arquivo_tmp);
                            $modulos->$pg(); 
                           }
                           elseif ($pg == "listar_empresas") {
                             $modulos->$pg();
                           }elseif ($pg == "cadastrar_contrato") {
                            // number_format("1354000",0,',','.');
                             $num_pasta = isset($_POST['num_pasta'])?$_POST['num_pasta']:null;
                             $inicio = isset($_POST['inicio'])?$_POST['inicio']:null;
                             $termino = isset($_POST['termino'])?$_POST['termino']:null;
                             $nome_empresa = isset($_POST['id_empresa'])?$_POST['id_empresa']:null;
                             $obs = isset($_POST['obs'])?$_POST['obs']:null;
                             $text_contrato = isset($_POST['text_contrato'])?$_POST['text_contrato']:null;
                             $status = isset($_POST['status'])?$_POST['status']:null;
                             $fk_contrato = isset($_POST['tipo_contrato'])?$_POST['tipo_contrato']:null;
                             $pdf = isset($_FILES['pdf']['name'])?$_FILES['pdf']['name']:null;
                             $pdf_tmp = isset($_FILES['pdf']['tmp_name'])?$_FILES['pdf']['tmp_name']:null;
                             $modulos->set_fk_contrato($fk_contrato);
                             $modulos->set_txt_contrato($text_contrato);
                             $modulos->set_nome($nome_empresa);
                             $modulos->set_num_pasta($num_pasta);
                             if (!empty($inicio) AND !empty($termino)) {
                               $inicio_br = explode("/", $inicio);
                               $termino_br = explode("/", $termino);
                               $modulos->set_inicio($inicio_br[2]."/".$inicio_br[1]."/".$inicio_br[0]);
                               $modulos->set_fim($termino_br[2]."/".$termino_br[1]."/".$termino_br[0]);
                             }
                             $modulos->set_status($status);
                             if (!empty($pdf_tmp)) {
                              $ext = pathinfo($pdf,PATHINFO_EXTENSION);
                              $modulos->set_pdf(uniqid().".".$ext);
                             }
                             $modulos->set_obs(htmlspecialchars($obs));
                             $modulos->set_pdf_tmp($pdf_tmp);
                             $modulos->$pg();
                           }elseif ($pg == "listar_contrato") {
                             $modulos->$pg();
                           }elseif ($pg == "editar_contrato") {
                            $modulos->id = isset($_GET['id_contrato'])?$_GET['id_contrato']:null;
                            $inicio = isset($_POST['inicio'])?$_POST['inicio']:null;
                            $termino = isset($_POST['termino'])?$_POST['termino']:null;
                            $nome_empresa = isset($_POST['id_empresa'])?$_POST['id_empresa']:null;
                            $obs = isset($_POST['obs'])?$_POST['obs']:null;
                            $status = isset($_POST['status'])?$_POST['status']:null;
                            $fk_contrato = isset($_POST['tipo_contrato'])?$_POST['tipo_contrato']:null;
                            $pdf = isset($_FILES['pdf']['name'])?$_FILES['pdf']['name']:null;
                            $pdf_tmp = isset($_FILES['pdf']['tmp_name'])?$_FILES['pdf']['tmp_name']:null;
                            $text_contrato = isset($_POST['text_contrato'])?$_POST['text_contrato']:null;
                            $modulos->set_fk_contrato($fk_contrato);
                            $modulos->set_nome($nome_empresa);
                            $modulos->set_txt_contrato($text_contrato);
                             if (!empty($inicio) AND !empty($termino)) {
                               $inicio_br = explode("/", $inicio);
                               $termino_br = explode("/", $termino);
                               $modulos->set_inicio($inicio_br[2]."/".$inicio_br[1]."/".$inicio_br[0]);
                               $modulos->set_fim($termino_br[2]."/".$termino_br[1]."/".$termino_br[0]);
                             }
                             $modulos->set_status($status);
                             if (!empty($pdf_tmp)) {
                              $ext = pathinfo($pdf,PATHINFO_EXTENSION);
                              $modulos->set_pdf(uniqid().".".$ext);
                             }
                             $modulos->set_obs($obs);
                             $modulos->set_pdf_tmp($pdf_tmp);
                             $modulos->$pg();
                           }elseif ($pg == "excluir_contrato") {
                             $senha = isset($_POST['senha'])?$_POST['senha']:null; 
                             $modulos->id = isset($_GET['id_contrato'])?$_GET['id_contrato']:null;
                             $modulos->set_senha($senha);
                             $modulos->$pg();
                           }elseif ($pg == "editar_empresa") {
                             $modulos->id = isset($_GET['id_empresa'])?$_GET['id_empresa']:null;
                             $nome_empresa = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                             $num_pasta = isset($_POST['num_pasta'])?$_POST['num_pasta']:null; 
                             $modulos->set_nome($nome_empresa);
                             $modulos->set_num_pasta($num_pasta);
                             $modulos->$pg();
                           }elseif ($pg == "excluir_empresa") {
                             $modulos->id = isset($_GET['id_empresa'])?$_GET['id_empresa']:null;
                             $senha = isset($_POST['senha'])?$_POST['senha']:null;
                             $modulos->set_senha($senha); 
                             $modulos->$pg();
                           }elseif ($pg == "cadastrar_alvara") {
                            $ano_alva = isset($_POST['ano_alva'])?$_POST['ano_alva']:null;
                            $area_total = isset($_POST['area_total'])?$_POST['area_total']:null;
                            $area_total_2 = str_replace(".","",$area_total);
                            $area_total_formatada = str_replace(",", ".", $area_total_2);
                            $area_utilizada = isset($_POST['area_utilizada'])?$_POST['area_utilizada']:null;
                            $area_utilizada_2 = str_replace(".", "", $area_utilizada);
                            $area_utilizada_form = str_replace(",", ".", $area_utilizada_2);
                            $fk_empresa = isset($_POST['fk_empresa'])?$_POST['fk_empresa']:null;
                            $num_insc_social = isset($_POST['num_insc_social'])?$_POST['num_insc_social']:null;
                            $taxa_entrega_alva = isset($_POST['taxa_entrega_alva'])?$_POST['taxa_entrega_alva']:0;
                            $pagamento_alva = isset($_POST['pagamento_alva'])?$_POST['pagamento_alva']:0;
                            $arq_alva = isset($_POST['arq_alva'])?$_POST['arq_alva']:0;
                            $envio_alva = isset($_POST['envio_alva'])?$_POST['envio_alva']:0;
                            $taxa_ent_cp = isset($_POST['taxa_ent_cp'])?$_POST['taxa_ent_cp']:0;
                            $pagamento_cp = isset($_POST['pagamento_cp'])?$_POST['pagamento_cp']:0;
                            $arq_cp = isset($_POST['arq_cp'])?$_POST['arq_cp']:0;
                            $ent_cp = isset($_POST['ent_cp'])?$_POST['ent_cp']:0;
                            $pdf_alva = isset($_FILES['pdf_alva']['name'])?$_FILES['pdf_alva']['name']:null;
                            $pdf_alva_tmp = isset($_FILES['pdf_alva']['tmp_name'])?$_FILES['pdf_alva']['tmp_name']:null;
                            if (!empty($pdf_alva_tmp)) {
                              $ext = pathinfo($pdf_alva,PATHINFO_EXTENSION);
                              $modulos->set_pdf(uniqid().".".$ext);
                             }
                             $modulos->set_pdf_tmp($pdf_alva_tmp);
                            if (!empty($area_total_formatada)) {
                              $modulos->set_areaTotal($area_total_formatada);
                            }else{
                              $modulos->set_areaTotal(0.00);
                            }
                            if (!empty($area_utilizada_form)) {
                              $modulos->set_areaUtil($area_utilizada_form);
                            }else{
                              $modulos->set_areaUtil(0.00);
                            }
                            $modulos->id = $fk_empresa;
                            $modulos->set_numInsc($num_insc_social);
                            $modulos->set_txEntrega_alva($taxa_entrega_alva);
                            $modulos->set_pagamentoAlva($pagamento_alva);
                            $modulos->set_arqAlva($arq_alva);
                            $modulos->set_envioAlva($envio_alva);
                            $modulos->set_taxa_entCp($taxa_ent_cp);
                            $modulos->set_pagamentoCp($pagamento_cp);
                            $modulos->set_arqCp($arq_cp);
                            $modulos->set_entCp($ent_cp);
                            if ($ano_alva<0 OR !is_numeric($ano_alva)) {
                              $modulos->set_ano(2000);
                            }else{
                              $modulos->set_anoAlva($ano_alva);
                            }
                            $modulos->$pg();
                           }elseif ($pg == "listar_alvara") {
                            ?>
                            <script src="js/xlsx.full.min.js"></script>
                            <script src="js/FileSaver.min.js"></script>
                            <?php
                             $modulos->$pg();
                           }elseif ($pg == "excluir_alva") {
                            $senha = isset($_POST['senha'])?$_POST['senha']:null;
                            $id_alvara = isset($_GET['id_alvara'])?$_GET['id_alvara']:null;
                            $modulos->set_senha($senha);
                            $modulos->id = $id_alvara;
                            $modulos->$pg();
                           }elseif ($pg == "editar_alva") {
                            $id_alvara = isset($_GET['id_alvara'])?$_GET['id_alvara']:null;
                            $ano_alva = isset($_POST['ano_alva'])?$_POST['ano_alva']:null;
                            $area_total = isset($_POST['area_total'])?$_POST['area_total']:null;
                            $area_total_2 = str_replace(".","",$area_total);
                            $area_total_formatada = str_replace(",", ".", $area_total_2);
                            $area_utilizada = isset($_POST['area_utilizada'])?$_POST['area_utilizada']:null;
                            $area_utilizada_2 = str_replace(".", "", $area_utilizada);
                            $area_utilizada_form = str_replace(",", ".", $area_utilizada_2);
                            $fk_empresa = isset($_POST['fk_empresa'])?$_POST['fk_empresa']:null;
                            $num_insc_social = isset($_POST['num_insc_social'])?$_POST['num_insc_social']:0;
                            $taxa_entrega_alva = isset($_POST['taxa_entrega_alva'])?$_POST['taxa_entrega_alva']:0;
                            $pagamento_alva = isset($_POST['pagamento_alva'])?$_POST['pagamento_alva']:0;
                            $arq_alva = isset($_POST['arq_alva'])?$_POST['arq_alva']:0;
                            $envio_alva = isset($_POST['envio_alva'])?$_POST['envio_alva']:0;
                            $taxa_ent_cp = isset($_POST['taxa_ent_cp'])?$_POST['taxa_ent_cp']:0;
                            $pagamento_cp = isset($_POST['pagamento_cp'])?$_POST['pagamento_cp']:0;
                            $arq_cp = isset($_POST['arq_cp'])?$_POST['arq_cp']:0;
                            $ent_cp = isset($_POST['ent_cp'])?$_POST['ent_cp']:0;
                            $modulos->id = $id_alvara;
                            $pdf_alva = isset($_FILES['pdf_alva']['name'])?$_FILES['pdf_alva']['name']:null;
                            $pdf_alva_tmp = isset($_FILES['pdf_alva']['tmp_name'])?$_FILES['pdf_alva']['tmp_name']:null;
                            if (!empty($pdf_alva_tmp)) {
                              $ext = pathinfo($pdf_alva,PATHINFO_EXTENSION);
                              $modulos->set_pdf(uniqid().".".$ext);
                             }
                             $modulos->set_pdf_tmp($pdf_alva_tmp);
                            if (!empty($area_total_formatada)) {
                              $modulos->set_areaTotal($area_total_formatada);
                            }else{
                              $modulos->set_areaTotal(0.00);
                            }
                            if (!empty($area_utilizada_form)) {
                              $modulos->set_areaUtil($area_utilizada_form);
                            }else{
                              $modulos->set_areaUtil(0.00);
                            }
                            $modulos->fk_empresa = $fk_empresa;
                            $modulos->set_numInsc($num_insc_social);
                            $modulos->set_txEntrega_alva($taxa_entrega_alva);
                            $modulos->set_pagamentoAlva($pagamento_alva);
                            $modulos->set_arqAlva($arq_alva);
                            $modulos->set_envioAlva($envio_alva);
                            $modulos->set_taxa_entCp($taxa_ent_cp);
                            $modulos->set_pagamentoCp($pagamento_cp);
                            $modulos->set_arqCp($arq_cp);
                            $modulos->set_entCp($ent_cp);
                            if ($ano_alva<0 OR !is_numeric($ano_alva)) {
                              $modulos->set_ano(2000);
                            }else{
                              $modulos->set_anoAlva($ano_alva);
                            }
                            $modulos->$pg();
                           }elseif ($pg == "cadastrar_tipo_despesa") {
                            $despesa = isset($_POST['despesa'])?$_POST['despesa']:null;
                            $modulos->set_nome($despesa);
                            $modulos->$pg();
                           }elseif ($pg == "listar_tipo_despesas") {
                            $modulos->$pg();  
                           }elseif ($pg == "excluir_tipo_despesa") {
                            $id_despesa = isset($_POST['id_despesa'])?$_POST['id_despesa']:null;
                            $modulos->id = $id_despesa;
                            $modulos->$pg();
                           }elseif ($pg == "editar_tipo_despesas") {
                            $id_tipo_despesa = isset($_GET['id_tipo_despesa'])?$_GET['id_tipo_despesa']:null;
                            $tipo_despesa = isset($_POST['despesa'])?$_POST['despesa']:null;
                            $modulos->set_nome($tipo_despesa);
                            $modulos->id = $id_tipo_despesa;
                            $modulos->$pg();
                           }elseif ($pg == "cadastrar_status") {
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $obs = isset($_POST['obs'])?$_POST['obs']:null;
                            $modulos->set_obs(htmlspecialchars($obs));
                            $modulos->set_nome(htmlspecialchars($status_despesa));
                            $modulos->$pg();
                           }elseif ($pg == "listar_status_empresa") {
                             $modulos->$pg();
                           }elseif ($pg == "excluir_status_despesa") {
                            $id_status_despesa = isset($_POST['id_status_despesa'])?$_POST['id_status_despesa']:null;
                            $modulos->id = $id_status_despesa;
                            $modulos->$pg();
                           }elseif ($pg == "editar_status_despesa") {
                            $id_status_despesa = isset($_GET['id_status_despesa'])?$_GET['id_status_despesa']:null;
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $obs = isset($_POST['obs'])?$_POST['obs']:null;
                            $modulos->set_nome(htmlspecialchars($status_despesa));
                            $modulos->set_obs(htmlspecialchars($obs));
                            $modulos->id = $id_status_despesa;
                            $modulos->$pg();
                           }elseif ($pg == "controle_de_gastos") {
                            $nome_empresa = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                            $tipo_despesa = isset($_POST['tipo_despesa'])?$_POST['tipo_despesa']:null;
                            $mes = isset($_POST['mes'])?$_POST['mes']:null;
                            $ano = isset($_POST['ano'])?$_POST['ano']:null;
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $valor_1 = isset($_POST['valor'])?$_POST['valor']:null;
                            $valor = str_replace(".","",$valor_1);
                            $valor_formatado = str_replace(",", ".", $valor);
                            if (!empty($valor_formatado)) {
                              $modulos->set_valor($valor_formatado);
                            }else{
                              $modulos->set_valor("0.00");
                            }
                            $modulos->set_nome($nome_empresa);
                            $modulos->set_tipoDespesa($tipo_despesa);
                            $modulos->set_mes($mes);
                            if ($ano<0 OR !is_numeric($ano)) {
                              $modulos->set_ano(2000);
                            }else{
                              $modulos->set_ano($ano);
                            }
                            if (!empty($status_despesa)) {
                              $modulos->set_statusDespesa($status_despesa);
                            }else{
                              //id com valores nulos. Necessário no inner join da edição
                              $modulos->set_statusDespesa(15);
                            }
                            $modulos->$pg();
                           }elseif ($pg == "listar_controle_de_gastos") {
                            ?>
                            <script src="js/xlsx.full.min.js"></script>
                            <script src="js/FileSaver.min.js"></script>
                            <?php
                            $modulos->$pg();
                           }elseif ($pg == "editar_controle_de_gastos") {
                            $nome_empresa = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                            $tipo_despesa = isset($_POST['tipo_despesa'])?$_POST['tipo_despesa']:null;
                            $mes = isset($_POST['mes'])?$_POST['mes']:null;
                            $ano = isset($_POST['ano'])?$_POST['ano']:null;
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $id_gastos = isset($_GET['id_gastos'])?$_GET['id_gastos']:null;
                            $valor_1 = isset($_POST['valor'])?$_POST['valor']:null;
                            $valor = str_replace(".","",$valor_1);
                            $valor_formatado = str_replace(",",".", $valor);
                            if ($valor_formatado != "0.00") {
                              $modulos->set_valor($valor_formatado);
                            }else{
                              $modulos->set_valor("0.00");
                            }
                            $modulos->id = $id_gastos;
                            $modulos->set_nome($nome_empresa);
                            $modulos->set_tipoDespesa($tipo_despesa);
                            $modulos->set_mes($mes);
                            if ($ano<0 OR !is_numeric($ano)) {
                              $modulos->set_ano(2000);
                            }else{
                              $modulos->set_ano($ano);
                            }
                            if (!empty($status_despesa)) {
                              $modulos->set_statusDespesa($status_despesa);
                            }else{
                              //id com valores nulos. Necessário no inner join da edição
                              $modulos->set_statusDespesa(15);
                            }
                            $modulos->$pg();
                           }elseif ($pg == "listar_pdf_contrato") {
                            $modulos->id = isset($_GET['id_contrato'])?$_GET['id_contrato']:null;
                            $modulos->$pg();
                           }elseif ($pg == "cadastrar_tipo_contrato") {
                            $tipo_contrato = isset($_POST['tipo_contrato'])?$_POST['tipo_contrato']:null;
                            $modulos->set_nome(htmlspecialchars($tipo_contrato));
                            $modulos->$pg();
                           }elseif ($pg == "exibir_tipo_contrato") {
                            $modulos->$pg();
                           }elseif ($pg == "excluir_tipo_contrato") {
                            $id_tipo_contrato = isset($_POST['id_tipo_contrato'])?$_POST['id_tipo_contrato']:null;
                            $modulos->id = $id_tipo_contrato;
                            $modulos->$pg();
                           }elseif ($pg == "editar_tipo_contrato") {
                            $id_tipo_contrato = isset($_GET['id_tipo_contrato'])?$_GET['id_tipo_contrato']:null;
                            $tipo_contrato = isset($_POST['tipo_contrato'])?$_POST['tipo_contrato']:null;
                            $modulos->set_nome(htmlspecialchars($tipo_contrato));
                            $modulos->id = $id_tipo_contrato;
                            $modulos->$pg();
                           }elseif ($pg == "editar_controle_de_gastos") {
                            $id_gastos = isset($_GET['id_gastos'])?$_GET['id_gastos']:null;
                            $nome_empresa = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                            $tipo_despesa = isset($_POST['tipo_despesa'])?$_POST['tipo_despesa']:null;
                            $mes = isset($_POST['mes'])?$_POST['mes']:null;
                            $ano = isset($_POST['ano'])?$_POST['ano']:null;
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $valor_1 = isset($_POST['valor'])?$_POST['valor']:null;
                            $valor = str_replace(".","",$valor_1);
                            $valor_formatado = str_replace(",", ".", $valor);
                            if (!empty($valor_formatado)) {
                              $modulos->set_valor($valor_formatado);
                            }else{
                              $modulos->set_valor("0.00");
                            }
                            $modulos->set_nome($nome_empresa);
                            $modulos->set_tipoDespesa($tipo_despesa);
                            $modulos->set_mes($mes);
                            $modulos->set_ano($ano);
                            if (!empty($status_despesa)) {
                              $modulos->set_statusDespesa($status_despesa);
                            }else{
                              $modulos->set_statusDespesa(15);
                            }
                            $modulos->id = $id_gastos;
                            $modulos->$pg();
                           }elseif ($pg == "excluir_controle_de_gastos") {
                            $id_controle_de_gastos = isset($_POST['id_controle_de_gastos'])?$_POST['id_controle_de_gastos']:null;
                            $modulos->id = $id_controle_de_gastos;
                            $modulos->$pg();
                           }elseif ($pg == "listar_dashboard") {
                            ?>
                            <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
                            <?php
                            $modulos->listar_dashboard();
                            }elseif ($pg == "listar_estatistica") {
                            ?>
                            <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
                            <?php
                              $modulos->$pg();
                            }
                            elseif ($pg == "nova_agenda") {
                              $id_empresa = isset($_POST['id_empresa'])?$_POST['id_empresa']:null;
                              $data = isset($_POST['data'])?$_POST['data']:null;
                              $obs = isset($_POST['obs'])?$_POST['obs']:null;
                              $modulos->fk_empresa = $id_empresa;
                              $modulos->set_obs($obs);
                              if (!empty($data)) {
                               $data_br = explode("/", $data);
                               $modulos->set_data($data_br[2]."/".$data_br[1]."/".$data_br[0]);
                             }
                              $modulos->$pg();
                            }elseif ($pg == "ver_lembrete") {
                              $modulos->$pg();
                            }elseif ($pg == "gerenciar_lembrete") {
                              $modulos->$pg();
                            }elseif ($pg == "editar_lembrete") {
                              $id_empresa = isset($_POST['id_empresa'])?$_POST['id_empresa']:null;
                              $status_lembrete = isset($_POST['status_lembrete'])?$_POST['status_lembrete']:null;
                              $data = isset($_POST['data'])?$_POST['data']:null;
                              $obs = isset($_POST['obs'])?$_POST['obs']:null;
                              $modulos->fk_empresa = $id_empresa;
                              $modulos->id = $_GET['id_agenda'];
                              $modulos->set_obs($obs);
                              $modulos->set_status($status_lembrete);
                              if (!empty($data)) {
                               $data_br = explode("/", $data);
                               $modulos->set_data($data_br[2]."-".$data_br[1]."-".$data_br[0]);
                             }
                              $modulos->$pg();
                            }elseif ($pg == "excluir_lembrete") {
                              $id_agenda = isset($_POST['id_agenda'])?$_POST['id_agenda']:null;
                              $modulos->id = $id_agenda;
                              $modulos->$pg();
                            }
                           }else{
                            //Usuário com nível 1
                            if ($pg == "personalizar_user") {
                             $nome = isset($_POST['nome_user'])?$_POST['nome_user']:null;
                             $email = isset($_POST['email_user'])?$_POST['email_user']:null;
                             $gmail = isset($_POST['gmail'])?$_POST['gmail']:null;
                             $img = isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
                             $img_tmp = isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:null;
                             $img_error = isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
                             $modulos->set_nome(htmlspecialchars($nome));
                             $modulos->set_email($email);
                             $modulos->set_gmail($gmail);
                             $modulos->img_erro = $img_error;
                             if (!empty($img)) {
                               $ext = pathinfo($img,PATHINFO_EXTENSION);
                               $modulos->set_img(uniqid().".".$ext);
                             }
                             $modulos->set_img_tmp($img_tmp);
                             $modulos->$pg();
                           }elseif ($pg == "personalizar_senha") {
                             $senha = isset($_POST['senha'])?$_POST['senha']:null;
                             $nova_senha = isset($_POST['nova_senha'])?$_POST['nova_senha']:null;
                             $confirmar_nova_senha = isset($_POST['confirmar_nova_senha'])?$_POST['confirmar_nova_senha']:null;
                             $modulos->set_senha($senha);
                             $modulos->set_novaSenha($nova_senha);
                             $modulos->set_cfSenha($confirmar_nova_senha);
                             $modulos->$pg();
                           }elseif ($pg == "cadastrar_admins") {
                             $nome = isset($_POST['nome_user'])?$_POST['nome_user']:null;
                             $senha = isset($_POST['senha'])?$_POST['senha']:null;
                             $email = isset($_POST['email_user'])?$_POST['email_user']:null;
                             $gmail = isset($_POST['gmail_user'])?$_POST['gmail_user']:null;
                             $img = isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
                             $img_tmp = isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:null;
                             $img_error = isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
                             $modulos->set_nome(htmlspecialchars($nome));
                             $modulos->set_senha($senha);
                             $modulos->set_email($email);
                             $modulos->set_gmail($gmail);
                             $modulos->img_erro = $img_error;
                             if (!empty($img)) {
                               $ext = pathinfo($img,PATHINFO_EXTENSION);
                               $modulos->set_img(uniqid().".".$ext);
                             }
                             $modulos->set_img_tmp($img_tmp);
                             $modulos->$pg();
                           }elseif ($pg == "listar_admins") {
                             $modulos->$pg();
                           }elseif ($pg == "cadastrar_empresa") {
                            $nome = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                            $num_pasta = isset($_POST['num_pasta'])?$_POST['num_pasta']:null;
                            $modulos->set_nome($nome);
                            $modulos->set_num_pasta($num_pasta);
                            $modulos->$pg();
                           }elseif($pg == "cadastrar_empresa_csv"){
                            $arquivo = isset($_FILES['csv']['name'])?$_FILES['csv']['name']:null;
                            $arquivo_tmp = isset($_FILES['csv']['tmp_name'])?$_FILES['csv']['tmp_name']:null;
                            $modulos->set_nome($arquivo);
                            $modulos->set_csv($arquivo_tmp);
                            $modulos->$pg(); 
                           }
                           elseif ($pg == "listar_empresas") {
                             $modulos->$pg();
                           }elseif ($pg == "cadastrar_contrato") {
                            // number_format("1354000",0,',','.');
                             $num_pasta = isset($_POST['num_pasta'])?$_POST['num_pasta']:null;
                             $inicio = isset($_POST['inicio'])?$_POST['inicio']:null;
                             $termino = isset($_POST['termino'])?$_POST['termino']:null;
                             $nome_empresa = isset($_POST['id_empresa'])?$_POST['id_empresa']:null;
                             $obs = isset($_POST['obs'])?$_POST['obs']:null;
                             $status = isset($_POST['status'])?$_POST['status']:null;
                             $fk_contrato = isset($_POST['tipo_contrato'])?$_POST['tipo_contrato']:null;
                             $pdf = isset($_FILES['pdf']['name'])?$_FILES['pdf']['name']:null;
                             $pdf_tmp = isset($_FILES['pdf']['tmp_name'])?$_FILES['pdf']['tmp_name']:null;
                             $modulos->set_fk_contrato($fk_contrato);
                             $modulos->set_nome($nome_empresa);
                             $modulos->set_num_pasta($num_pasta);
                             if (!empty($inicio) AND !empty($termino)) {
                               $inicio_br = explode("/", $inicio);
                               $termino_br = explode("/", $termino);
                               $modulos->set_inicio($inicio_br[2]."/".$inicio_br[1]."/".$inicio_br[0]);
                               $modulos->set_fim($termino_br[2]."/".$termino_br[1]."/".$termino_br[0]);
                             }
                             $modulos->set_status($status);
                             if (!empty($pdf_tmp)) {
                              $ext = pathinfo($pdf,PATHINFO_EXTENSION);
                              $modulos->set_pdf(uniqid().".".$ext);
                             }
                             $modulos->set_obs(htmlspecialchars($obs));
                             $modulos->set_pdf_tmp($pdf_tmp);
                             $modulos->$pg();
                           }elseif ($pg == "listar_contrato") {
                             $modulos->$pg();
                           }elseif ($pg == "editar_contrato") {
                             $modulos->id = isset($_GET['id_contrato'])?$_GET['id_contrato']:null;
                             $inicio = isset($_POST['inicio'])?$_POST['inicio']:null;
                             $termino = isset($_POST['termino'])?$_POST['termino']:null;
                             $nome_empresa = isset($_POST['id_empresa'])?$_POST['id_empresa']:null;
                             $obs = isset($_POST['obs'])?$_POST['obs']:null;
                             $status = isset($_POST['status'])?$_POST['status']:null;
                             $fk_contrato = isset($_POST['tipo_contrato'])?$_POST['tipo_contrato']:null;
                             $pdf = isset($_FILES['pdf']['name'])?$_FILES['pdf']['name']:null;
                             $pdf_tmp = isset($_FILES['pdf']['tmp_name'])?$_FILES['pdf']['tmp_name']:null;
                             $modulos->set_fk_contrato($fk_contrato);
                             $modulos->set_nome($nome_empresa);
                             if (!empty($inicio) AND !empty($termino)) {
                               $inicio_br = explode("/", $inicio);
                               $termino_br = explode("/", $termino);
                               $modulos->set_inicio($inicio_br[2]."/".$inicio_br[1]."/".$inicio_br[0]);
                               $modulos->set_fim($termino_br[2]."/".$termino_br[1]."/".$termino_br[0]);
                             }
                             $modulos->set_status($status);
                             if (!empty($pdf_tmp)) {
                              $ext = pathinfo($pdf,PATHINFO_EXTENSION);
                              $modulos->set_pdf(uniqid().".".$ext);
                             }
                             $modulos->set_obs($obs);
                             $modulos->set_pdf_tmp($pdf_tmp);
                             $modulos->$pg();
                           }elseif ($pg == "excluir_contrato") {
                             $senha = isset($_POST['senha'])?$_POST['senha']:null; 
                             $modulos->id = isset($_GET['id_contrato'])?$_GET['id_contrato']:null;
                             $modulos->set_senha($senha);
                             $modulos->$pg();
                           }elseif ($pg == "editar_empresa") {
                             $modulos->id = isset($_GET['id_empresa'])?$_GET['id_empresa']:null;
                             $nome_empresa = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                             $num_pasta = isset($_POST['num_pasta'])?$_POST['num_pasta']:null; 
                             $modulos->set_nome($nome_empresa);
                             $modulos->set_num_pasta($num_pasta);
                             $modulos->$pg();
                           }elseif ($pg == "excluir_empresa") {
                             $modulos->id = isset($_GET['id_empresa'])?$_GET['id_empresa']:null;
                             $senha = isset($_POST['senha'])?$_POST['senha']:null;
                             $modulos->set_senha($senha); 
                             $modulos->$pg();
                           }elseif ($pg == "cadastrar_alvara") {
                            $ano_alva = isset($_POST['ano_alva'])?$_POST['ano_alva']:null;
                            $area_total = isset($_POST['area_total'])?$_POST['area_total']:null;
                            $area_total_2 = str_replace(".","",$area_total);
                            $area_total_formatada = str_replace(",", ".", $area_total_2);
                            $area_utilizada = isset($_POST['area_utilizada'])?$_POST['area_utilizada']:null;
                            $area_utilizada_2 = str_replace(".", "", $area_utilizada);
                            $area_utilizada_form = str_replace(",", ".", $area_utilizada_2);
                            $fk_empresa = isset($_POST['fk_empresa'])?$_POST['fk_empresa']:null;
                            $num_insc_social = isset($_POST['num_insc_social'])?$_POST['num_insc_social']:null;
                            $taxa_entrega_alva = isset($_POST['taxa_entrega_alva'])?$_POST['taxa_entrega_alva']:0;
                            $pagamento_alva = isset($_POST['pagamento_alva'])?$_POST['pagamento_alva']:0;
                            $arq_alva = isset($_POST['arq_alva'])?$_POST['arq_alva']:0;
                            $envio_alva = isset($_POST['envio_alva'])?$_POST['envio_alva']:0;
                            $taxa_ent_cp = isset($_POST['taxa_ent_cp'])?$_POST['taxa_ent_cp']:0;
                            $pagamento_cp = isset($_POST['pagamento_cp'])?$_POST['pagamento_cp']:0;
                            $arq_cp = isset($_POST['arq_cp'])?$_POST['arq_cp']:0;
                            $ent_cp = isset($_POST['ent_cp'])?$_POST['ent_cp']:0;
                            $pdf_alva = isset($_FILES['pdf_alva']['name'])?$_FILES['pdf_alva']['name']:null;
                            $pdf_alva_tmp = isset($_FILES['pdf_alva']['tmp_name'])?$_FILES['pdf_alva']['tmp_name']:null;
                            if (!empty($pdf_alva_tmp)) {
                              $ext = pathinfo($pdf_alva,PATHINFO_EXTENSION);
                              $modulos->set_pdf(uniqid().".".$ext);
                             }
                             $modulos->set_pdf_tmp($pdf_alva_tmp);
                            if (!empty($area_total_formatada)) {
                              $modulos->set_areaTotal($area_total_formatada);
                            }else{
                              $modulos->set_areaTotal(0.00);
                            }
                            if (!empty($area_utilizada_form)) {
                              $modulos->set_areaUtil($area_utilizada_form);
                            }else{
                              $modulos->set_areaUtil(0.00);
                            }
                            $modulos->id = $fk_empresa;
                            $modulos->set_numInsc($num_insc_social);
                            $modulos->set_txEntrega_alva($taxa_entrega_alva);
                            $modulos->set_pagamentoAlva($pagamento_alva);
                            $modulos->set_arqAlva($arq_alva);
                            $modulos->set_envioAlva($envio_alva);
                            $modulos->set_taxa_entCp($taxa_ent_cp);
                            $modulos->set_pagamentoCp($pagamento_cp);
                            $modulos->set_arqCp($arq_cp);
                            $modulos->set_entCp($ent_cp);
                            if ($ano_alva<0 OR !is_numeric($ano_alva)) {
                              $modulos->set_ano(2000);
                            }else{
                              $modulos->set_anoAlva($ano_alva);
                            }
                            $modulos->$pg();
                           }elseif ($pg == "listar_alvara") {
                            ?>
                            <script src="js/xlsx.full.min.js"></script>
                            <script src="js/FileSaver.min.js"></script>
                            <?php
                             $modulos->$pg();
                           }elseif ($pg == "excluir_alva") {
                            $senha = isset($_POST['senha'])?$_POST['senha']:null;
                            $id_alvara = isset($_GET['id_alvara'])?$_GET['id_alvara']:null;
                            $modulos->set_senha($senha);
                            $modulos->id = $id_alvara;
                            $modulos->$pg();
                           }elseif ($pg == "editar_alva") {
                            $id_alvara = isset($_GET['id_alvara'])?$_GET['id_alvara']:null;
                            $ano_alva = isset($_POST['ano_alva'])?$_POST['ano_alva']:null;
                            $area_total = isset($_POST['area_total'])?$_POST['area_total']:null;
                            $area_total_2 = str_replace(".","",$area_total);
                            $area_total_formatada = str_replace(",", ".", $area_total_2);
                            $area_utilizada = isset($_POST['area_utilizada'])?$_POST['area_utilizada']:null;
                            $area_utilizada_2 = str_replace(".", "", $area_utilizada);
                            $area_utilizada_form = str_replace(",", ".", $area_utilizada_2);
                            $fk_empresa = isset($_POST['fk_empresa'])?$_POST['fk_empresa']:null;
                            $num_insc_social = isset($_POST['num_insc_social'])?$_POST['num_insc_social']:0;
                            $taxa_entrega_alva = isset($_POST['taxa_entrega_alva'])?$_POST['taxa_entrega_alva']:0;
                            $pagamento_alva = isset($_POST['pagamento_alva'])?$_POST['pagamento_alva']:0;
                            $arq_alva = isset($_POST['arq_alva'])?$_POST['arq_alva']:0;
                            $envio_alva = isset($_POST['envio_alva'])?$_POST['envio_alva']:0;
                            $taxa_ent_cp = isset($_POST['taxa_ent_cp'])?$_POST['taxa_ent_cp']:0;
                            $pagamento_cp = isset($_POST['pagamento_cp'])?$_POST['pagamento_cp']:0;
                            $arq_cp = isset($_POST['arq_cp'])?$_POST['arq_cp']:0;
                            $ent_cp = isset($_POST['ent_cp'])?$_POST['ent_cp']:0;
                            $modulos->id = $id_alvara;
                            $pdf_alva = isset($_FILES['pdf_alva']['name'])?$_FILES['pdf_alva']['name']:null;
                            $pdf_alva_tmp = isset($_FILES['pdf_alva']['tmp_name'])?$_FILES['pdf_alva']['tmp_name']:null;
                            if (!empty($pdf_alva_tmp)) {
                              $ext = pathinfo($pdf_alva,PATHINFO_EXTENSION);
                              $modulos->set_pdf(uniqid().".".$ext);
                             }
                             $modulos->set_pdf_tmp($pdf_alva_tmp);
                            if (!empty($area_total_formatada)) {
                              $modulos->set_areaTotal($area_total_formatada);
                            }else{
                              $modulos->set_areaTotal(0.00);
                            }
                            if (!empty($area_utilizada_form)) {
                              $modulos->set_areaUtil($area_utilizada_form);
                            }else{
                              $modulos->set_areaUtil(0.00);
                            }
                            $modulos->fk_empresa = $fk_empresa;
                            $modulos->set_numInsc($num_insc_social);
                            $modulos->set_txEntrega_alva($taxa_entrega_alva);
                            $modulos->set_pagamentoAlva($pagamento_alva);
                            $modulos->set_arqAlva($arq_alva);
                            $modulos->set_envioAlva($envio_alva);
                            $modulos->set_taxa_entCp($taxa_ent_cp);
                            $modulos->set_pagamentoCp($pagamento_cp);
                            $modulos->set_arqCp($arq_cp);
                            $modulos->set_entCp($ent_cp);
                            if ($ano_alva<0 OR !is_numeric($ano_alva)) {
                              $modulos->set_ano(2000);
                            }else{
                              $modulos->set_anoAlva($ano_alva);
                            }
                            $modulos->$pg();
                           }elseif ($pg == "cadastrar_tipo_despesa") {
                            $despesa = isset($_POST['despesa'])?$_POST['despesa']:null;
                            $modulos->set_nome($despesa);
                            $modulos->$pg();
                           }elseif ($pg == "listar_tipo_despesas") {
                            $modulos->$pg();  
                           }elseif ($pg == "excluir_tipo_despesa") {
                            $id_despesa = isset($_POST['id_despesa'])?$_POST['id_despesa']:null;
                            $modulos->id = $id_despesa;
                            $modulos->$pg();
                           }elseif ($pg == "editar_tipo_despesas") {
                            $id_tipo_despesa = isset($_GET['id_tipo_despesa'])?$_GET['id_tipo_despesa']:null;
                            $tipo_despesa = isset($_POST['despesa'])?$_POST['despesa']:null;
                            $modulos->set_nome($tipo_despesa);
                            $modulos->id = $id_tipo_despesa;
                            $modulos->$pg();
                           }elseif ($pg == "cadastrar_status") {
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $obs = isset($_POST['obs'])?$_POST['obs']:null;
                            $modulos->set_obs(htmlspecialchars($obs));
                            $modulos->set_nome(htmlspecialchars($status_despesa));
                            $modulos->$pg();
                           }elseif ($pg == "listar_status_empresa") {
                             $modulos->$pg();
                           }elseif ($pg == "excluir_status_despesa") {
                            $id_status_despesa = isset($_POST['id_status_despesa'])?$_POST['id_status_despesa']:null;
                            $modulos->id = $id_status_despesa;
                            $modulos->$pg();
                           }elseif ($pg == "editar_status_despesa") {
                            $id_status_despesa = isset($_GET['id_status_despesa'])?$_GET['id_status_despesa']:null;
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $obs = isset($_POST['obs'])?$_POST['obs']:null;
                            $modulos->set_nome(htmlspecialchars($status_despesa));
                            $modulos->set_obs(htmlspecialchars($obs));
                            $modulos->id = $id_status_despesa;
                            $modulos->$pg();
                           }elseif ($pg == "controle_de_gastos") {
                            $nome_empresa = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                            $tipo_despesa = isset($_POST['tipo_despesa'])?$_POST['tipo_despesa']:null;
                            $mes = isset($_POST['mes'])?$_POST['mes']:null;
                            $ano = isset($_POST['ano'])?$_POST['ano']:null;
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $valor_1 = isset($_POST['valor'])?$_POST['valor']:null;
                            $valor = str_replace(".","",$valor_1);
                            $valor_formatado = str_replace(",", ".", $valor);
                            if (!empty($valor_formatado)) {
                              $modulos->set_valor($valor_formatado);
                            }else{
                              $modulos->set_valor("0.00");
                            }
                            $modulos->set_nome($nome_empresa);
                            $modulos->set_tipoDespesa($tipo_despesa);
                            $modulos->set_mes($mes);
                            if ($ano<0 OR !is_numeric($ano)) {
                              $modulos->set_ano(2000);
                            }else{
                              $modulos->set_ano($ano);
                            }
                            if (!empty($status_despesa)) {
                              $modulos->set_statusDespesa($status_despesa);
                            }else{
                              $modulos->set_statusDespesa(15);
                            }
                            $modulos->$pg();
                           }elseif ($pg == "listar_controle_de_gastos") {
                            ?>
                            <script src="js/xlsx.full.min.js"></script>
                            <script src="js/FileSaver.min.js"></script>
                            <?php
                            $modulos->$pg();
                           }elseif ($pg == "editar_controle_de_gastos") {
                            $nome_empresa = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                            $tipo_despesa = isset($_POST['tipo_despesa'])?$_POST['tipo_despesa']:null;
                            $mes = isset($_POST['mes'])?$_POST['mes']:null;
                            $ano = isset($_POST['ano'])?$_POST['ano']:null;
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $id_gastos = isset($_GET['id_gastos'])?$_GET['id_gastos']:null;
                            $valor_1 = isset($_POST['valor'])?$_POST['valor']:null;
                            $valor = str_replace(".","",$valor_1);
                            $valor_formatado = str_replace(",", ".", $valor);
                            if (!empty($valor_formatado)) {
                              $modulos->set_valor($valor_formatado);
                            }else{
                              $modulos->set_valor("0.00");
                            }
                            $modulos->id = $id_gastos;
                            $modulos->set_nome($nome_empresa);
                            $modulos->set_tipoDespesa($tipo_despesa);
                            $modulos->set_mes($mes);
                            if ($ano<0 OR !is_numeric($ano)) {
                              $modulos->set_ano(2000);
                            }else{
                              $modulos->set_ano($ano);
                            }
                            if (!empty($status_despesa)) {
                              $modulos->set_statusDespesa($status_despesa);
                            }else{
                              $modulos->set_statusDespesa(15);
                            }
                            $modulos->$pg();
                           }elseif ($pg == "listar_pdf_contrato") {
                            $modulos->id = isset($_GET['id_contrato'])?$_GET['id_contrato']:null;
                            $modulos->$pg();
                           }elseif ($pg == "cadastrar_tipo_contrato") {
                            $tipo_contrato = isset($_POST['tipo_contrato'])?$_POST['tipo_contrato']:null;
                            $modulos->set_nome(htmlspecialchars($tipo_contrato));
                            $modulos->$pg();
                           }elseif ($pg == "exibir_tipo_contrato") {
                            $modulos->$pg();
                           }elseif ($pg == "excluir_tipo_contrato") {
                            $id_tipo_contrato = isset($_POST['id_tipo_contrato'])?$_POST['id_tipo_contrato']:null;
                            $modulos->id = $id_tipo_contrato;
                            $modulos->$pg();
                           }elseif ($pg == "editar_tipo_contrato") {
                            $id_tipo_contrato = isset($_GET['id_tipo_contrato'])?$_GET['id_tipo_contrato']:null;
                            $tipo_contrato = isset($_POST['tipo_contrato'])?$_POST['tipo_contrato']:null;
                            $modulos->set_nome(htmlspecialchars($tipo_contrato));
                            $modulos->id = $id_tipo_contrato;
                            $modulos->$pg();
                           }elseif ($pg == "editar_controle_de_gastos") {
                            $id_gastos = isset($_GET['id_gastos'])?$_GET['id_gastos']:null;
                            $nome_empresa = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:null;
                            $tipo_despesa = isset($_POST['tipo_despesa'])?$_POST['tipo_despesa']:null;
                            $mes = isset($_POST['mes'])?$_POST['mes']:null;
                            $ano = isset($_POST['ano'])?$_POST['ano']:null;
                            $status_despesa = isset($_POST['status_despesa'])?$_POST['status_despesa']:null;
                            $valor_1 = isset($_POST['valor'])?$_POST['valor']:null;
                            $valor = str_replace(".","",$valor_1);
                            $valor_formatado = str_replace(",", ".", $valor);
                            if (!empty($valor_formatado)) {
                              $modulos->set_valor($valor_formatado);
                            }else{
                              $modulos->set_valor("0.00");
                            }
                            $modulos->set_nome($nome_empresa);
                            $modulos->set_tipoDespesa($tipo_despesa);
                            $modulos->set_mes($mes);
                            $modulos->set_ano($ano);
                            if (!empty($status_despesa)) {
                              $modulos->set_statusDespesa($status_despesa);
                            }else{
                              $modulos->set_statusDespesa(15);
                            }
                            $modulos->id = $id_gastos;
                            $modulos->$pg();
                           }elseif ($pg == "excluir_controle_de_gastos") {
                            $id_controle_de_gastos = isset($_POST['id_controle_de_gastos'])?$_POST['id_controle_de_gastos']:null;
                            $modulos->id = $id_controle_de_gastos;
                            $modulos->$pg();
                           }elseif ($pg == "listar_dashboard") {
                            ?>
                            <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
                            <?php
                            $modulos->listar_dashboard();
                            }elseif ($pg == "listar_estatistica") {
                            ?>
                            <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
                            <?php
                              $modulos->$pg();
                            }
                            elseif ($pg == "nova_agenda") {
                              $id_empresa = isset($_POST['id_empresa'])?$_POST['id_empresa']:null;
                              $data = isset($_POST['data'])?$_POST['data']:null;
                              $obs = isset($_POST['obs'])?$_POST['obs']:null;
                              $modulos->fk_empresa = $id_empresa;
                              $modulos->set_obs($obs);
                              if (!empty($data)) {
                               $data_br = explode("/", $data);
                               $modulos->set_data($data_br[2]."/".$data_br[1]."/".$data_br[0]);
                             }
                              $modulos->$pg();
                            }elseif ($pg == "ver_lembrete") {
                              $modulos->$pg();
                            }elseif ($pg == "gerenciar_lembrete") {
                              $modulos->$pg();
                            }elseif ($pg == "editar_lembrete") {
                              $id_empresa = isset($_POST['id_empresa'])?$_POST['id_empresa']:null;
                              $status_lembrete = isset($_POST['status_lembrete'])?$_POST['status_lembrete']:null;
                              $data = isset($_POST['data'])?$_POST['data']:null;
                              $obs = isset($_POST['obs'])?$_POST['obs']:null;
                              $modulos->fk_empresa = $id_empresa;
                              $modulos->id = $_GET['id_agenda'];
                              $modulos->set_obs($obs);
                              $modulos->set_status($status_lembrete);
                              if (!empty($data)) {
                               $data_br = explode("/", $data);
                               $modulos->set_data($data_br[2]."-".$data_br[1]."-".$data_br[0]);
                             }
                              $modulos->$pg();
                            }elseif ($pg == "excluir_lembrete") {
                              $id_agenda = isset($_POST['id_agenda'])?$_POST['id_agenda']:null;
                              $modulos->id = $id_agenda;
                              $modulos->$pg();
                            }
                           }  
                        }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer class="navbar-default" style="height:52px">
          <div class="pull-right">
            SISGEON -Todos os direitos reservados
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <!-- Bootstrap -->
    <script src="js/jquery.maskMoney.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <!-- validator -->
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- arquivos datatables!-->
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/moment/min/locales.min.js"></script>
    <script src="../vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
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
    </script>
    <script type="text/javascript">
      $("#demo1").maskMoney({thousands:'.', decimal:',',precision:2});
      $("#demo2").maskMoney({thousands:'.', decimal:',',precision:2});
      $(document).ready(function(){
        $('#ano_alva').datepicker({
          format: "yyyy",
          viewMode: "years", 
          minViewMode: "years",
          ignoreReadonly: true,
          allowInputToggle: true,
       });
        $('.ano_alva').datepicker({
          minViewMode: 2,
          format: 'yyyy',
          ignoreReadonly: true,
          allowInputToggle: true,
       });
        $('.ano_alva_2').datepicker({
          minViewMode: 2,
          format: 'yyyy',
          ignoreReadonly: true,
          allowInputToggle: true,
       });
        $('.ano_alva').datepicker().on('changeDate', function(e) {
          $(this).parsley().validate();
        });
        $('#ano_alva').datepicker().on('changeDate', function(e) {
          $(this).parsley().validate();
        });
      });
    </script>
  </body>
</html>