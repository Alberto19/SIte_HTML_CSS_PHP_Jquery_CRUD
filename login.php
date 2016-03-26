<?php
	$conexao = mysqli_connect ("localhost","root","","tecweb_trabalho")
			or die ("Não foi possivel conectar ao Banco de Dados: ".mysqli_connect_error());

			$consult ="SELECT * FROM Usuario";
			$resultado = mysqli_query($conexao,$consult)
			or die ("Não foi possivel executar o SQL: ".mysqli_connect_error($conexao));
			
			$usuario = $_POST["usuario"];
			$senha = $_POST["senha"];
			$lembrar = $_POST["lembrar_usuario"];
			
			
				while ($valor = mysqli_fetch_array($resultado)){
								if($usuario==$valor["Login"]){
									if($senha==$valor["Senha"]){
										$existe = true;
									}
								}
							}
							
							if($existe){
								session_start();
								$_SESSION["usuario"] = $usuario;
								if(ISSET($_POST["lembrar_usuario"])){
								setcookie("lembrar",$usuario,time()+ (365*24*3600));
								setcookie("checked","checked",time()+ (365*24*3600));
								} else {
									setcookie("lembrar","",time()- (365*24*3600));
								setcookie("checked","",time()- (365*24*3600));
								}
								header("location:index.php");
							} else {
								setcookie("loginout","Usuário ou senha incorretos", time()+2);
								header("location:index.php");
							}

?>