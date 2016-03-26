<?php
include "funcoes.php";
iniciaPagina();
	criaCabecalho();
	echo "<spam id='data'>",data,"</spam>";
	criaMenu();
	$conexao = mysqli_connect("localhost","root","","tecweb_trabalho")
	or die ("Não foi possivel conectar ao Banco de Dados:".mysqli_connect_error());	
	$consult = " SELECT * FROM Contato";
	$resultado = mysqli_query($conexao,$consult);		
		
?>	
				<!--Div 3-->
		<div id='div3'>
				
			
			<?php 
				if (ISSET($_SESSION["usuario"])){
					echo"<h2 id='h2'>Contatos enviados<h2>";
					echo"<table class='Banco_Dados'>
								<tr>
									<th>ID</th><th>Nome</th><th>E-mail</th><th>Telefone</th><th>Assunto</th><th>Tipo de retorno</th><th>Mensagem</th>
								</tr>";
						while ($valor = mysqli_fetch_array($resultado)){
							echo "<tr>
									<td>".$valor["Id"]."</td><td>".$valor["Nome"]."</td><td>".$valor["E-mail"]."</td><td>".$valor["Telefone"]."</td><td>".$valor["Assunto"]."</td><td>".$valor["Preferencia de retorno do contato"]."</td><td>".$valor["Mensagem"]."</td>
									</tr>";
						}
						echo "</table>";
						
						
						mysqli_free_result($resultado);
						mysqli_close($conexao);
				} else {
					Echo "<h2 id='h2' >Acesso negado</h2>";
				}
					
			?>
			
			
		</div>		 
	
<?php
finalizaPagina();

?>