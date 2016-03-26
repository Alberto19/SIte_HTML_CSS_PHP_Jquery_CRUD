<?php
include "funcoes.php";
iniciaPagina();
criaCabecalho();
echo "<spam id='data'>",data,"</spam>";
	criaMenu();
	?>

	<div id='div3'>
		<h2 id= 'h2' >Usuário cadastrado com sucesso!!</h2>
			<?php
			$conexao = mysqli_connect ("localhost","root","","tecweb_trabalho")
			or die ("Não foi possivel conectar: ".mysqli_connect_error());
			
				$fotoPerfil     = $_FILES["foto_perfil"]["name"];
				$tipoArquivo	= $_FILES["foto_perfil"]["type"];
				$tamArquivo		= $_FILES["foto_perfil"]["size"];
				$tmpArquivo		= $_FILES["foto_perfil"]["tmp_name"];
				$nomeCompleto	= $_POST["nome_completo"];
				$idade 			= $_POST["idade"];
				$cpf 			= $_POST["cpf"];
				$dataNascimento	= $_POST["data_nascimento"];
				$sexo			= $_POST["sexo"];
				$estadoCivil	= $_POST["estado_civil"];
				$login			= $_POST["login"];
				$senha			= $_POST["senha"];
				
				$consult = "SELECT * FROM Usuario";
				$resultado = mysqli_query($conexao,$consult)
				or die ("Não foi possivel executar o SQL:".mysql_error($conexao));	
				
				while ($valor = mysqli_fetch_array($resultado)){
					if ($valor["CPF"]==$cpf){
						setcookie ("aviso","Já existe este Usuário!",time()+5);
						mysqli_free_result($resultado);
						mysqli_close($conexao);
						header("location:cadastroUsuario.php");
					}
					
				}
				
												
				$insert = "INSERT INTO usuario VALUES (NULL,'".$nomeCompleto."',".$idade.",'".$sexo."','".$estadoCivil."',".$cpf.",'".$dataNascimento."','".$fotoPerfil."','".$login."','".$senha."')";
				$resultado = mysqli_query($conexao,$insert)
				or die ("Não foi possivel executar o SQl: ".mysqli_error($conexao));
				
				echo "<fieldset>
				<legend>Dados do usuário</legend>
				<table class='campos_cadastro' cellspancing='50	'>";
				echo "<tr><td align='left'><strong>Nome completo: </strong>".$nomeCompleto."</td></tr>	";
				echo "<tr><td align='left'><strong>Idade: </strong>".$idade."</td></tr>";
				echo "<tr><td align='left'><strong>CPF: </strong>".$cpf."</td></tr>";
				echo "<tr><td align='left'><strong>Data de Nascimento: </strong>".$dataNascimento."</td></tr>";
				echo "<tr><td align='left'><strong>Sexo: </strong>".$sexo."</td></tr>";
				echo "<td align='left'><strong>Estado civíl: </strong>".$estadoCivil."</td></tr>";
				echo "</table>
				</fieldset>";
				
				echo "<ul class='direcionar'>
						<li><a href='index.php'>Voltar para Página Inicial</a></li>
						</ul>";
						
						mysqli_free_result($resultado);
						mysqli_close($conexao);
			?>
	</div>





<?php
finalizaPagina();
?>