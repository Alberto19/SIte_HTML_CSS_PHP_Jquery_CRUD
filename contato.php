<?php
include "funcoes.php";
iniciaPagina();
	criaCabecalho();
	echo "<spam id='data'>",data,"</spam>";
	criaMenu();
	
		
		
?>	
				
		<!--Div 3-->
		<div id='div3'>
			<h2 id='h2'>Formulario de contato<h2>	
			<!--CONTATO-->
			<form action="envia_contato.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>Contato</legend>
					<table class="campos_cadastro" cellspacing="10" align="center" >
						<tr><td align="left"><label for="nome_completo">Nome:</label><td align="left"><input type="text" name="nome_completo" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
						<tr><td align="left"><label for="e_mail">E-mail:</label><td align="lesft"><input type="text" name="e_mail" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
						<tr><td align="left"><label for="telefone">Telefone:</label><td align="left"><input type="text" name="telefone" maxlength="9" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"/></td>
						<tr>
							<td><label for="assunto">Assunto:</label><td align="left">
								<select name="assunto">
									<option selected value="Reclamações">Reclamações</option>
									<option value="Dúvidas">Dúvidas</option>
									<option value="Sugestões">Sugestões</option>
									<option value="Outros">Outros</option>
								</select>
							</td>
						</tr>
						<tr><td align="left"><label for="retorno[]">Contato:</label></td><td align="left"><input type="checkbox" name="retorno[]" value="Telefone" multiple />Telefone  <input  value="E-mail" type="checkbox" name="retorno[]" multiple />E-mail</td></tr>
						<tr><td align="left" valign="top" ><label class="mensagem_contato" name="mensagem" >Mensagem:</label></td><td align="left"><textarea id="mensagem_contato" name="mensagem" cols="60" rows="10" onblur="mudaVoltaCampo(this)" onfocus="mudaCampo(this)"></textarea></td></tr>
					</table>
					<ul class="direcionar">
						<li><a href="contatos_enviados.php">Contatos enviados</a></li>
					</ul>
				</fieldset>
			<input class="form_botoes" type="image" src="http://2.bp.blogspot.com/-qaJxz506c1o/Tac6hDHoLfI/AAAAAAAAAko/io3KLuh84UY/s400/botaoEnviar.png"/>		
			</form>
		</div>	
			
						
			
			
<?php
finalizaPagina();

?>