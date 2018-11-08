<!DOCTYPE html>
<html>
<head>
<title>Cadastro Fornecedor</title>

<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="Static/CSS/estilo_cadastro_cliente.css"  type="text/css">

</head>

<body>
<!-- 
	=================
	INICIO DO MENU
	=================
-->
   <?php include 'menu.php' ?>
	<!-- 
		=================
		FIM DO MENU
		=================
	-->
	
	
<br/>

	
<div class='x_painel'>
	<div class="row">
		<form  method="post">
			<div class="col-md-4">	
				<label for="nome" >Tipo de Fornecedor:</label><span style="color:red;" >*</span><span id="msgnome_fornecedor"  class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="Exemplo" type="text" id="nome_fornecedor"/>
			</div>
			<div class="col-md-4">	
				<label for="nome">Nome:</label><span style="color:red;">*</span><span id="msgnome_cliente" class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="Nome Completo" type="text" id="nome_cliente"/>
			</div>
			<div class=" col-md-4">	
				<label for="endereço">CPF/CNPJ:</label></label><span style="color:red;">*</span><span id="msgcpf" class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="000.000.000-0" type="text" id="cpf"/>
			</div>	
			<div class=" col-md-4">	
				<label for="endereço">Endereço:</label></label><span style="color:red;">*</span><span id="msgendereco" class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="Rua do exemplo" type="text" id="endereco"/>
			</div>	
			<div class=" col-md-4">	
				<label for="numero_casa">N°:</label></label><span style="color:red;">*</span><span id="msgnumero_casa" class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="00" type="text" id="numero_casa"/>
			</div>
			<div class=" col-md-4">	
				<label for="bairro">Bairro:</label></label><span style="color:red;">*</span><span id="msgbairro" class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="Jd. exemplo" type="text" id="bairro"/>
			</div>	
			<div class=" col-md-4">	
				<label for="cep">CEP:</label></label><span style="color:red;">*</span><span id="msgcep" class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="00000-000" type="text" id="cep"/>
			</div>	
			<div class=" col-md-4">	
				<label for="bloco">Bloco:</label>
				<input class="form-control" placeholder="00/000" type="text" id="bloco"/>
			</div>	
			<div class=" col-md-4">	
				<label for="apartamento">Apartamento:</label>
				<input class="form-control" placeholder="00/000" type="ap" id="ap"/>
			</div>
			<div class=" col-md-4">
				<label for="Estafo">Estado:</label></label><span style="color:red;">*</span><span id="msgestado" class="esconde color">&nbsp Campo Obrigatorio</span>
				<select class="form-control" name="estado"></div>
					<option value="selecione">Selecione...</option>
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espiríto Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do sul </option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do norte</option>
					<option value="RS">Rio Grande do sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
			</div>
			<div class=" col-md-4">	
				<label for="email">Email:</label></label><span style="color:red;">*</span><span id="msgemail" class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="exemplo@exemplo.com.br" type="text" id="email"/>
			</div>	
			<div class=" col-md-4">	
				<label for="telefone">Telefone:</label></label><span style="color:red;">*</span><span id="msgtelefone" class="esconde color">&nbsp Campo Obrigatorio</span>
				<input class="form-control" placeholder="(11)1111-111" type="text" id="telefone"/>
			</div>
			<div class=" col-md-4">	
				<label for="telefone_comercial" style="font-size:15px;">Telefone Comercial:</label>
				<input class="form-control" placeholder="(11)1111-1111" type="text" id="telefone_comercial"/>
			</div>
			<div class=" col-md-4">	
				<label for="celular">Celular:</label>
				<input class="form-control" placeholder="(99)9999-9999" type="text" id="celular"/>
			</div>
			<div class=" col-md-4">	
				<label for="site_cliente">Site:</label>
				<input class="form-control" placeholder="www.exemplo.com.br" type="url" id="site_cliente"/>
			</div>
			<div class="col-md-4 pull-lefth">	
				<label for="obervacoes">Observações:</label><br/>
				<textarea class="form-control" id="obervacoes"></textarea>
			</div>	
		</form>	
		<br/>
		<br/>
		<div class="col-md-12 pull-right">
			<button class="btn btn-default bot" onclick="validaCliente()">Cadastrar	</button>
		</div>
		</div>
	</div>
	<br/>
	<br/>
	<div id="msg"></div>

</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/jquery.mask.min.js"></script>
<script>
$('#celular').mask('(00) 0000-00009');
$('#celular').blur(function(event) {
   if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
      $('#celular').mask('(00) 00000-0009');
   } else {
      $('#celular').mask('(00) 0000-00009');
   }
});

$('#telefone').mask('(00) 0000-00009');
$('#telefone').blur(function(event) {
   if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
      $('#telefone').mask('(00) 00000-0009');
   } else {
      $('#telefone').mask('(00) 0000-00009');
   }
});

$('#telefone_comercial').mask('(00) 0000-00009');
$('#telefone_comercial').blur(function(event) {
   if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
      $('#telefone_comercial').mask('(00) 00000-0009');
   } else {
      $('#telefone_comercial').mask('(00) 0000-00009');
   }
});

function validaCliente(){
	$("#msg").html("<img src='img/loading.gif' />")
	$('.esconde').hide();
	var chave = 0
	if($('#nome_fornecedor').val() == ''){
		$('#msgnome_fornecedor').show();
		chave = 1;
	}
	if($('#nome_cliente').val() == ''){
		$('#msgnome_cliente').show();
		chave = 1;
	}
	if($('#rg').val() == ''){
		$('#msgrg').show();
		chave = 1;
	}
	if($('#cpf').val() == ''){
		$('#msgcpf').show();
		chave = 1;
	}
	if($('#endereco').val() == ''){
		$('#msgendereco').show();
		chave = 1;
	}
	if($('#numero_casa').val() == ''){
		$('#msgnumero_casa').show();
		chave = 1;
	}
	if($('#bairro').val() == ''){
		$('#msgbairro').show();
		chave = 1;
	}
	if($('#cep').val() == ''){
		$('#msgcep').show();
		chave = 1;
	}
	if($('#estado').val() == ''){
		$('#msgestado').show();
		chave = 1;
	}
	if($('#telefone').val() == ''){
		$('#msgtelefone').show();
		chave = 1;
	}
	if($('#email').val() == ''){
		$('#msgemail').show();
		chave = 1;
	}

	if(chave == 1){
		
		return false;
	}
	
	salvacliente();
}

function salvacliente(){
	$("#msg").html("<img src='img/loading.gif' style='margin-left:40%' />").focus();
	var _nome = $('#nome_cliente').val();
	var _rg = $('#rg').val();
	var _cpf = $('#cpf').val();
	var _end = $('#endereco').val();
	var _numero = $('#numero_casa').val();
	var _bairro = $('#bairro').val();
	var _cep = $('#cep').val();
	var _bloco =  $('#bloco').val();
	var _ap = $('#ap').val();
	var _estado = $('#estado').val();
	var _email = $('#email').val();
	var _tel = $('#telefone').val().replace(/[^\d]+/g,'');
	var _telcom = $('#telefone_comercial').val().replace(/[^\d]+/g,'');
	var _cel = $('#celular').val().replace(/[^\d]+/g,'');
	var _site = $('#site_cliente').val();
	var _obs = $('#obervacoes').val();


	$.ajax({
		type:'POST',
		url:'salvaCliente.php',
		data:{nome:_nome,rg:_rg,cpf:_cpf,end:_end,numero:_numero,bairro:_bairro,cep:_cep,bloco:_bloco,ap:_ap,estado:_estado,email:_email,
		tel:_tel,telcom:_telcom,cel:_cel,site:_site,obs:_obs},
		success: function(data){
			console.log(data);
			$('#msg').html(data).focus();;
		},
		erro:function(data){
			$('#msg').html('<div class="alert alert-danger"><strong>ERRO!</strong>'+data+'</div>').focus();;
		}
	})
	
}
</script>