<?php
	
	function iniciaPagina(){
		
			session_start();
		
		
		echo "<!DOCTYPE html>
						<html>
							<head>
								<title>Resort Paraiso dos Pataquis</title>
								<meta charset='UTF-8'/>
								<link type='text/css' rel='stylesheet' href='estilo.css'/>
								
							</head>
							
							<body>";
							
							
	}
	
	function criaCabecalho () {
		echo "	<!--Div 1-->	
		<div id='div1' >
		
		</div>";
	}
	
function criaMenu(){	
				$menu [0] ["Link"] = "index.php";
				$menu [0] ["Menu"] = "Página principal";
				$menu [0] ["Nivel"] = 1;
				$menu [1] ["Link"] = "pesquisaUsuario.php";
				$menu [1] ["Menu"] = "Pesquisa";
				$menu [1] ["Nivel"] = 2;
				$menu [2] ["Link"] = "cadastroUsuario.php";
				$menu [2] ["Menu"] = "Cadastro";
				$menu [2] ["Nivel"] = 2;
				$menu [3] ["Link"] = "links.php";
				$menu [3] ["Menu"] = "Links de interesse";
				$menu [3] ["Nivel"] = 1;
				$menu [4] ["Link"] = "contato.php";
				$menu [4] ["Menu"] = "Contato";
				$menu [4] ["Nivel"] = 2;
				$menu [5] ["Link"] = "sobre.php";
				$menu [5] ["Menu"] = "Sobre";
				$menu [5] ["Nivel"] = 2;
				
				foreach($menu as $i){
					foreach ($i as $otheri){
						$x = $otheri;
						
						if ($x=="index.php"){
							$index = $x;
						}
						if ($x=="Página principal"){
							$pGI = $x;
						}
						if ($x=="pesquisaUsuario.php"){
							$pU = $x;
						}
						if ($x=="Pesquisa"){
							$pesquisa = $x;
						}
						if ($x=="cadastroUsuario.php"){
							$cU = $x;
						}
						if ($x=="Cadastro"){
							$cadastro = $x;
						}
						if ($x=="links.php"){
							$url = $x;
						}
						if ($x=="Links de interesse"){
							$links = $x;
						}
						if ($x=="contato.php"){
							$contact = $x;
						}
						if ($x=="Contato"){
							$contato = $x;
						}
						if ($x=="sobre.php"){
							$about = $x;
						}
						if ($x=="Sobre"){
							$sobre = $x;
						}
					}
				}
				
				echo "<!--Div 2-->	
		<div id='div2'>";	
				
				if(ISSET($_SESSION["usuario"])){
				echo "<label>Olá, ".$_SESSION["usuario"]."</label> &nbsp;&nbsp;&nbsp; <a href='logout.php'>Logout</a>";
				} else {	
				echo  "	<form action='login.php' method='POST' enctype='multipart/form-data'>
			<fieldset class='login'>
				<legend class='login' >Login</legend>";
				if(ISSET($_COOKIE["loginout"])){
						$error = $_COOKIE["loginout"];
						echo $error."</br>";	
					}
					
					if(ISSET($_COOKIE["lembrar"])){
						$lembraUser = $_COOKIE["lembrar"];
					} else {
						$lembraUser ="";
					}	

					if(ISSET($_COOKIE["checked"])){
						$checked = $_COOKIE["checked"];
					} else {
						$checked ="";
					}	
					
				echo "<table class='login' align='center' cellspacing='2'>
					<tr>
						<td><label for='usuario'>Usuário:</label></td><td><input type='text' name='usuario' maxlength='50' value='".$lembraUser."' required/></td>
					</tr>
					<tr>
						<td><label for='senha'>Senha:</label></td><td><input type='password' name='senha' maxlength='8' required/></td>
					</tr>
						<tr><td colspan='2'><input type='checkbox' name='lembrar_usuario'".$checked." value='lembrar'/><label>Lembrar Usuário</label></td>
					<tr>
				</table></br>					
				<input type='submit' value='Entrar'/>
			</fieldset>
		</form>";
				}
		
		
			
			echo"<ul class='menu'>";
			echo "<li><h3><a href='","$index","' onmouseover='linkCor(this)' onmouseout='linkVoltaCor(this)'>","$pGI","</a></h3></li>";
			if(ISSET($_SESSION["usuario"])){
			echo"<li class='menu'><h3>","Usuários","</h3>
					<ol>
						<li ><a href='","$pU","'  onmouseover='linkCor(this)' onmouseout='linkVoltaCor(this)'>","$pesquisa","</a></li>
						<li><a href='","$cU","' onmouseover='linkCor(this)' onmouseout='linkVoltaCor(this)'>","$cadastro","</a></li>
					</ol>
				</li>";
			}				
				echo"<li><h3><a href='","$url","' onmouseover='linkCor(this)' onmouseout='linkVoltaCor(this)'>","$links","</a></h3></li>
				<li class='menu'><h3>Informações</h3>
					<ol>
						<li><a href='","$contact","' onmouseover='linkCor(this)' onmouseout='linkVoltaCor(this)'>","$contato","<a/></li>
						<li><a href='","$about","' onmouseover='linkCor(this)' onmouseout='linkVoltaCor(this)'>","$sobre","</a></li>
					</ol>
				</li>
			</ul>";
			
		echo"</div>";
			
	}
	function finalizaPagina() {
		echo "	<script src='jquery-1.11.3.min.js'></script>
				<script src='scripts.js'></script>
				</body>
				</html>";
	}
	 
	$data = date('d'.'/'.'m'.'/'.'Y');
	define("data","$data");
?>