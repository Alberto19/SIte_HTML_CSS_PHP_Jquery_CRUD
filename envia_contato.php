<?php
include "funcoes.php";
$conexao = mysqli_connect("localhost","root","","tecweb_trabalho")
or die ("Não foi possivel conectar ao Banco de Dados: ".mysqli_connect_error());


iniciaPagina();
criaCabecalho();
echo "<spam id='data'>",data,"</spam>";
	criaMenu();
	
				$nome		= $_POST["nome_completo"];
				$email		= $_POST["e_mail"];
				$telefone	= $_POST["telefone"];
				$assunto	= $_POST["assunto"];
				$contato	= $_POST["retorno"];
				$mensagem 	= $_POST["mensagem"];
				
				if(count($contato)==2){
					$retorno = $contato[0].",".$contato[1];
				} else {
					$retorno = $contato[0];
				}
				
				$insert = "INSERT INTO Contato VALUES (NULL,'".$nome."','".$email."',".$telefone.",'".$assunto."','".$retorno."','".$mensagem."')";
				$resultado = mysqli_query($conexao,$insert)
				or die ("Não foi possivel executar o SQL:".mysqli_error($conexao));
	

	echo "<div id='div3'>
		<h2 id= 'h2' >Formulario de contato</h2>";
			
				echo "<fieldset>
				<legend>Contato</legend>";				
				if(count($contato)==2){
					echo $nome." seu contato foi recebido, aguarde nosso contato através do telefone ".$telefone." ou através do E-mail ".$email.".";
				} elseif($contato[0]=="E-mail"){
					echo $nome." seu contato foi recebido, aguarde nosso contato através do E-mail ".$email.".";
				}else{
					echo $nome." seu contato foi recebido, aguarde nosso contato através do telefone ".$telefone.".";
				}				
				echo "</fieldset>";
				
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