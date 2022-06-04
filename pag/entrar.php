<?php
	require "conexao.php"; 
	include 'PHPMailer/PHPMailer.php';
	include 'PHPMailer/SMTP.php';
	include 'PHPMailer/Exception.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	class entrar extends conexao{
		private $email;
		private $senha;
		private $cod;
		public $entrar;
		public $entrar_2;
		public $entrar_2_linha;
		public $buscar_linha;
		public $verificar;
		public $hash;
		public $atualizar;
		public $buscar_3;
		public $inserir;
		public $ip;
		function get_email(){
			return $this->email;
		}
		function set_email($email){
			$this->email = $email;
		}
		function get_cod(){
			return $this->cod;
		}
		function set_cod($cod){
			$this->cod = $cod;
		}
		function get_senha(){
			return $this->senha;
		}
		function set_senha($senha){
			$this->senha = $senha;
		}
		function logar(){
			session_start();
			if (!isset($_POST['cod']) AND empty($_GET['salvar_dispositivo'])) {
				$this->entrar = $this->con->prepare("SELECT email_user,senha,id_user,gmail,status FROM user WHERE email_user=:email_user AND senha=:senha");
				$this->entrar->bindValue(":email_user",$this->email);
				$this->entrar->bindValue(":senha",$this->senha);
				$this->entrar->execute();
				$this->buscar_linha = $this->entrar->fetch(PDO::FETCH_OBJ);
				if ($this->entrar->rowCount()>0) {
					if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
					    $this->ip = $_SERVER['HTTP_CLIENT_IP'];
					}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
					    $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					}else{
					    $this->ip = $_SERVER['REMOTE_ADDR'];
					}
					$this->buscar_3 = $this->con->prepare("SELECT * FROM dispositivo WHERE 
						cod_dispositivo=:cod_dispositivo AND fk_user=:fk_user");
					$this->buscar_3->bindValue(":cod_dispositivo",$this->ip);
					$this->buscar_3->bindValue(":fk_user",$this->buscar_linha->id_user);
					$this->buscar_3->execute();
					if ($this->buscar_3->rowCount()>0) {
						$this->hash = uniqid().substr((sha1("8")),0,6).strtotime(date("d-Y-d"));
						$_SESSION['email'] = $this->email;
						$_SESSION['senha'] = $this->senha;
						$_SESSION['cod'] = $this->hash;
						$_SESSION['id_user'] = $this->buscar_linha->id_user;
						$_SESSION['nivel_user'] = $this->buscar_linha->status;
						header("location:index.php?pg=listar_dashboard&aba=7");
					}else{
						$this->hash = uniqid().substr((sha1("8")),0,6).strtotime(date("d-Y-d"));
						$mail = new PHPMailer();
						$email = "sisgeonprofissional@gmail.com";
						$nome = "Sisgeon";
						$mail->IsSMTP();
						$mail->SMTPDebug = 0;
						$mail->SMTPAuth = true;
						$mail->Host = 'smtp.gmail.com';
						$mail->Port = 587;//587 tls
						$mail->SMTPSecure = 'tls';
						$mail->SMTPAutoTLS = true;
						$mail->Username = "sisgeonprofissional@gmail.com";
						$mail->Password = 'sisgeon2018gl';
						$mail->SMTPOptions = array(
						    'ssl' => array(
						        'verify_peer' => false,
						        'verify_peer_name' => false,
						        'allow_self_signed' => true
						    )
						);
						//Enviador da Mensagem;
						$mail->From =  $email;
						$mail->FromName = $nome;
						//Destinatario
						$mail->AddAddress($this->buscar_linha->gmail);
						//Define os dadso tecnicos da Mensagem
						$mail->IsHTML(true);
						$mail->CharSet = 'UTF-8';
						//Define a Mensagem
						$mail->Subject = "Suporte";
						$mail->Body = "
						<h3>Código de autenticação de login:".$this->hash."</h3>Sisgeon<br>";
						//Envia email
						$enviado = $mail->send();
						//Limpeza de Destinatarios e anexos
						$mail->ClearAllRecipients();
						// $mail->CleatAttachments();
						if ($enviado) {
							// echo "Ok";
						}else{
							// echo "Erro";
						}
						$_SESSION['email'] = $this->email;
						$_SESSION['senha'] = $this->senha;
						$_SESSION['id_user'] = $this->buscar_linha->id_user;
						$_SESSION['nivel_user'] = $this->buscar_linha->status;
						$this->atualizar = $this->con->prepare("UPDATE user SET cod=:cod 
							WHERE id_user=:id_user");
						$this->atualizar->bindValue(":cod",$this->hash);
						$this->atualizar->bindValue(":id_user",$this->buscar_linha->id_user);
						$this->atualizar->execute();
						header("location:login_2_etapa.php");
					}
				}else{
				?>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#myModal").modal("show");
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
				        <center><h2>Email e/ou senha incorreto(a)</h2></center>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">Entendi</button>
				      </div>
				    </div>
				  </div>
				</div>
				<?php
				}
			}else{
				$this->buscar_2 = $this->con->prepare("SELECT * FROM user WHERE cod=:cod 
				AND id_user=:id_user");
				$this->buscar_2->bindValue(":cod",$this->cod);
				$this->buscar_2->bindValue(":id_user",$_SESSION['id_user']);
				$this->buscar_2->execute();
				if (!empty($_GET['salvar_dispositivo'])) {
					if ($_GET['salvar_dispositivo'] == "true") {
						if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
						    $this->ip = $_SERVER['HTTP_CLIENT_IP'];
						}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
						    $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
						}else{
						    $this->ip = $_SERVER['REMOTE_ADDR'];
						}
						$this->verificar = $this->con->prepare("SELECT * FROM 
							dispositivo WHERE cod_dispositivo=:cod_dispositivo AND fk_user=:fk_user");
						$this->verificar->bindValue(":cod_dispositivo",$this->ip);
						$this->verificar->bindValue(":fk_user",$_SESSION['id_user']);
						$this->verificar->execute();
						if ($this->verificar->rowCount() == 0) {
							$this->inserir = $this->con->prepare("INSERT INTO dispositivo
							(cod_dispositivo,fk_user)VALUES(:cod_dispositivo,:fk_user)");
							$this->inserir->bindValue(":cod_dispositivo",$this->ip);
							$this->inserir->bindValue(":fk_user",$_SESSION['id_user']);
							$this->inserir->execute();	
							header("location:index.php?pg=listar_dashboard&aba=7");
						}else{
							header("location:index.php?pg=listar_dashboard&aba=7");
						}
					}else{
						header("location:index.php?pg=listar_dashboard&aba=7");
					}
				}
				if ($this->buscar_2->rowCount()>0) {
					$_SESSION['cod'] = $this->cod;
					?>
					<script type="text/javascript">
						$(document).ready(function(){
							$("#myModal").modal("show");
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
					        <center><h2>Deseja salvar esse usuário nessa rede?</h2></center>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-primary" id="1">Sim</button>
					        <button type="button" class="btn btn-danger" id="0">Não</button>
					      </div>
					    </div>
					  </div>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){
							$("button#1").click(function(){
								window.location.href='login_2_etapa.php?salvar_dispositivo=true';
							});
							$("button#0").click(function(){
								window.location.href='login_2_etapa.php?salvar_dispositivo=false';
							});
						});
					</script>
					<?php
				}else{
				?>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#myModal").modal("show");
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
				        <center><h2>Código incorreto. Verifique o código e tente novamente!</h2></center>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">Entendi</button>
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
