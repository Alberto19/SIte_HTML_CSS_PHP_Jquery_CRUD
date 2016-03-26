<?php
include "funcoes.php";
$existePOST= isset($_POST["nome_completo"]);
$existePOST =isset($_POST["cpf"]);
$existePOST = isset($_POST["data_nascimento"]);
$conexao = mysqli_connect ("localhost","root","","tecweb_trabalho")
or die ("Não foi possivel se conectar ao Banco de Dados: ".mysqli_connect_error());
$consult = "SELECT * FROM Usuario";
$resultado = mysqli_query($conexao,$consult);

iniciaPagina();
	criaCabecalho();
	echo "<spam id='data'>",data,"</spam>";
	criaMenu();
	
		
		
?>	
			
		<!--Div 3-->
		<div id='div3'>
			<h2 id= 'h2' >Pesquisa de Usuarios</h2>
			<form action="pesquisaUsuario.php" method="POST" enctype="multipart/form-data" >
				
			<!-- PESQUISA USUÁRIO-->
				<fieldset>	
				<legend>Dados de Pesquisa</legend>
				<table class="campos_cadastro" cellspacing="10" align="center" >
							
						<tr>
							<td align="left"><label for="nome_completo">Nome completo:</label></td><td align="left"><input type="text" size="35" name="nome_completo" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"  /></td>
							
						</br>
						</tr>
						<tr>
							<td align="left"><label for="cpf">CPF:</label></td><td align="left"><input type="text" maxlength="11" size="15" placeholder="___.___.___-__" name="cpf" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
						</tr>
						<tr>
							<td align="left"><label for="data_nascimento">Data de nascimento:</label><td><input type="text" maxlength="10" size="10" placeholder="dd/mm/aaaa" name="data_nascimento"  onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
						</tr>
						<tr>
							<td><?php
							if($existePOST==1){	
									echo "Nenhum usuário encontrado";
							}
							?>
							</td>
						</tr>
				</table>
				</fieldset>
				<input class="form_botoes" type="submit" value="Pesquisar" id="botao"/>
				<input align="centter" class="form_botoes" type="reset" value="Limpar dados"/>
				<?php
				
					echo"<table class='Banco_Dados'>
							<tr>
								<th>ID</th><th>Nome</th><th>Idade</th><th>Sexo</th><th>Estado civil</th><th>CPF</th><th>Data de nascimento</th>
							</tr>";
					while ($valor = mysqli_fetch_array($resultado)){
						echo "<tr>
								<td>".$valor["ID"]."</td><td>".$valor["Nome"]."</td><td>".$valor["Idade"]."</td><td>".$valor["Sexo"]."</td><td>".$valor["Estado Civil"]."</td><td>".$valor["CPF"]."</td><td>".$valor["Data de nascimento"]."</td>
								</tr>";
					}
					echo "</table>";
					
					
					mysqli_free_result($resultado);
					mysqli_close($conexao);
				?>
				
				
		</div>
		

<?php
finalizaPagina();

?>
