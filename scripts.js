//Scripts.js

//Muda a cor do menu
 function linkCor(celula){ 
   celula.style.color="red"; 
}
function linkVoltaCor(celula){ 
   celula.style.color="white"; 
} 

// muda a cor dos campos	
	function mudaCampo(campo){
		if(campo.value == ""){
			campo.style.border = "2px solid red";
			return false;
		}
	}

	function mudaVoltaCampo(campo){
		if(campo.value != ""){
			campo.style.border = "1px solid gray";
			return false;
		}
	}


document.getElementById("form1").onsubmit = function (){


		var cnome = document.getElementById("c_nome");
		var lnome = document.getElementById("l_nome");

		var Cidade = document.getElementById("c_idade");	
		var lidade = document.getElementById("l_idade");

		var ccpf = document.getElementById("c_cpf");
		var lcpf = document.getElementById("l_cpf");

		var cdata = document.getElementById("c_data");
		var ldata = document.getElementById("l_data");

		var clogin = document.getElementById("c_login");
		var llogin = document.getElementById("l_login");

		var csenha = document.getElementById("c_senha");
		var lsenha = document.getElementById("l_senha");

		var retorno = true;

			if(cnome.value == ""){
				cnome.focus();
				lnome.style.color = "red";
				retorno = false;
			}else if(Cidade.value == ""){
				Cidade.focus();
				lidade.style.color = "red";
				retorno = false;
			}else if(ccpf.value == ""){
				ccpf.focus();
				lcpf.style.color = "red";
				retorno = false;
			}else if(cdata.value == ""){
				cdata.focus();
				ldata.style.color = "red";
				retorno = false;
			}else if(clogin.value == ""){
				clogin.focus();
				llogin.style.color = "red";
				retorno = false;
			}else if(csenha.value == ""){
				csenha.focus();
				lsenha.style.color = "red";
				retorno = false;
			}

		if(retorno == false){
			alert("Campos obrigatórios não foram preenchidos");
			return false;
		}


}


/*Aumenta o tamanho da letra*/
function aumentaFonte() {
	var x = document.getElementsByTagName("p");
		for(var i=0; i < x.length;i++){
			if(x[i].style.fontSize == "16pt"){
				x[i].style.fontSize="12pt";
			}else{
				x[i].style.fontSize="16pt";
			}
		}
}



