<?php
  require 'entrar.php';
  $entrar = new entrar();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sisgeon </title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgre-->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login" style="margin-top:120px;background-color:rgba(0,0,0,0.2)">
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">
        <?php
          if (!empty($_POST['cod'])) {
            $cod = $_POST['cod'];
            $entrar->set_cod(trim($cod));
            $entrar->logar();
          }
          if (!empty($_GET['salvar_dispositivo'])) {
            $entrar->logar();
          }
        ?>
        <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data" data-parsley-validate autocomplete="off">
          <center><span class="section">LOGIN 2° ETAPA</span></center>
          <div class="item form-group">
            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="name">Código <span class="required"></span>
            </label>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input id="cod" type="text" class="form-control" name="cod" placeholder="Código" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <button id="send" type="submit" class="btn btn-success btn-block">Entrar</button>
              <a href="login.php" class="btn btn-warning" style="margin-top: 15px">Voltar</a>
            </div>
          </div>
          <div class="ln_solid"></div>
        </form>
      </div>
      <footer>
          <div class="pull-right">
            Gerenciamento de escritório
          </div>
          <div class="clearfix"></div>
        </footer>
    </div>
  </div>
    <script>
      $(document).ready(function () {
          $('#send').click(function() {
            if($("#cod").val()){
              var btn = $(this);
              $(btn).buttonLoader('start');
              setTimeout(function () {
                  $(btn).buttonLoader('stop');
              }, 10000);
            };
          });
      });
    </script>
    <script src="js/jquery.buttonLoader.min.js"></script> 
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
