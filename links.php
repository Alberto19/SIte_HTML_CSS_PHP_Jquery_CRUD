<?php
include "funcoes.php";
iniciaPagina();
	criaCabecalho();
	echo "<spam id='data'>",data,"</spam>";
	criaMenu();
	
		
		
?>
	<!--Div 3-->
		<div id='div3'>
			<?php
			
			$links [0]["Link"] = "<li><a href='http://www.decolar.com/'>";
			$links [0]["Nome"] = "Decolar.com</a></li>";
			$links [1]["Link"] = "<li><a href='http://www.peixeurbano.com.br/'>";
			$links [1]["Nome"] = "Peixe Urbano</a></li>";
			$links [2]["Link"] = "<li><a href='http://www.groupon.com.br/'>";
			$links [2]["Nome"] = "Groupon</a></li>";
			
		echo "<ul>";
		foreach($links as $i){
				if (is_array($i)){
					foreach($i as $otheri){
						echo $otheri;
						
					}
				}else{
					echo $i,"";
					
				}	
			}
			echo "</ul>"
			?>
				
		</div>
		
<?php
finalizaPagina();

?>