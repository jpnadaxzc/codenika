function buscarContratos(){
	//var itemsOfCart = localStorage.getItem('simpleCart_items');
	//alert(itemsOfCart);
  var retorno = document.getElementById("inputCEP").value;
  var cepDes = retorno.replace('-', '');
 
  
	$.ajax({
		method: 'post',
		url: 'php/consulta.frete.php',
		data:{consultarFrete: 'sim', cepDestino:  cepDes},
		dataType: 'json',
		async: true,
		beforeSend: function(){
		  //document.getElementById("gif-load").innerHTML = '<center><img src="images/_animacao/loadinfo.net.gif"></center>';
       
		},
		success: function(valor){
        
			//document.getElementById("gif-load").innerHTML = '';
      console.log('ajax retornou'); 
			if(valor.booleanErro == 'sim'){
				
        //document.getElementById("gif-load").innerHTML = '';
			
				//document.getElementById("resposta-login-nome").innerHTML = '<p><strong>Jesus '+ valor.descricaoMensagem +'</strong> </p>';
				/*
				document.getElementById('cidade').setAttribute('value', valor.cidade);
				document.getElementById('bairro').setAttribute('value', valor.bairro);
				document.getElementById('endereco').setAttribute('value', valor.endereco);
				document.getElementById(valor.uf).setAttribute('selected', '');
				document.getElementById('selectUf').setAttribute('readonly', 'readonly');
				document.getElementById('selectUf').setAttribute('tabindex', '-1');
				document.getElementById('cidade').setAttribute('readonly', '');
				*/
			}else{
        /*
        document.getElementById("gif-load").innerHTML = ''; 
        document.getElementById('inputRua').setAttribute('value', valor.endereco);
        document.getElementById('inputBairro').setAttribute('value', valor.bairro);
        document.getElementById('inputCidade').setAttribute('value', valor.cidade);
        document.getElementById(valor.uf).setAttribute('selected', '');
        */
        
        document.getElementById("frete").innerHTML = 'R$' + valor.ValorSemAdicionais[0]; 
        
      }
      
      

		}
					
	});
  
}

