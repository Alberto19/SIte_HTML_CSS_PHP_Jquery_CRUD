<?php
include "funcoes.php";
iniciaPagina();
	criaCabecalho();
	echo "<spam id='data'>",data,"</spam>";
	criaMenu();
	
		
		
?>				
		<!--Div 3-->
		<div id='div3'>
			<h2 id= 'h2' >Cadastro Usuario</h2>
			
			<form action="cadastra_usuario.php" method="POST" enctype="multipart/form-data" id="form1">
				
			<!-- CADASTRO USUÁRIO-->
				<fieldset>	
				<legend>Dados Pessoais</legend>
				<table class="campos_cadastro" cellspacing="10" align="center" >
						<tr>
							<td align="left" ><label for="foto_perfil" >Imagem de perfil:</label></td><td align="left"><input type="file" name="foto_perfil" /></td>
						</tr>
						
						<tr>
							<td align="left"><label for="nome_completo" id="l_nome">Nome completo:</label></td><td align="left"><input id="c_nome" type="text" size="35" name="nome_completo" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
							<td align="left"><label for="idade" id="l_idade">Idade:</label><td align="left"><input id="c_idade" type="text" maxlength="3" size="5" name="idade" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>	
						</br>
						</tr>
						<tr>
							<td align="left"><label for="cpf" id="l_cpf">CPF:</label></td><td align="left"><input id="c_cpf" type="text" maxlength="11" size="15" placeholder="___.___.___-__" name="cpf" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
							<td align="left"><label for="data_nascimento" id = "l_data">Data de nascimento:</label><td><input id="c_data" type="text" maxlength="10" size="10" placeholder="aaaa-mm-dd" name="data_nascimento" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
						</tr>
						<tr>
							<td align="rigth"><label for="sexo">Sexo:</label></td><td align="left"><input type="radio" name="sexo" value="Masculino" required /> Maculino
							<input type="radio" name="sexo" value="Feminino" />Feminino</td>	
												
							<td><label for="estado_civil">Estado  civíl:</label><td align="left"><select name="estado_civil" required >
							<option selected value="Solteiro" >Solteiro</option>
							<option value="Casado" >Casado</option>
							<option value="Separado" >Separado</option>
							<option value="Divorciado" >Divorciado</option>
							<option value="Viúvo" >Viúvo</option>
							</select></td>
						</tr>
							<tr>
							<td align="left "colspan="2" ></td>
						</tr>
						<tr>
							<td align="left "colspan="2" ><label for="login">Crie seu login e senha</label></td>
						</tr>
						<tr>
							<td align="left"><label for="login" id="l_login">Usuário:</label></td><td align="left"><input id="c_login" type="text" maxlength="50" name="login"  onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
						</tr>
						<tr>
							<td align="left"><label for="senha" id="l_senha">Senha:</label></td><td align="left"><input id="c_senha" type="password" name="senha" maxlength="8" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)" /></td>
						</tr>
					</table>
					<?php
					if (ISSET($_COOKIE["aviso"])){
						$existeUsuario = $_COOKIE["aviso"];
						echo $existeUsuario;
					}
					?>
				</fieldset>
				<input class="form_botoes" type="submit" value="Finalizar cadastro"/>	
				<input align="centter" class="form_botoes" type="reset" value="Limpar dados"/>
			</form>
			
			
		</div>
<?php
finalizaPagina();

?>
