	
<html lang="pt-br">
	<head>
		<title> Cadastro Funcionario </title>
		<meta charset="utf-8"/>
		<meta name="description" content="Formulario">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="Static/CSS/cssPadrao.css">
		<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
		<link rel="sortcut icon" href="imagem/logo2.png" type="image/png"/>	
		<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="Static/CSS/estilo_cadastro_cliente.css"  type="text/css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap-datepicker.css">
	</head>

	<body>
		<div id="">
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
			<div class="x_title">
				<div class="row">
					<div class="col-md-12">
						<h1>Cadastro de Funcionário</h1>
					</div>
				</div>			
			</div>
			<form method="post" id="CadFunc-contato">	
				<div class="x_title">
					<div class="row">
						<div class="col-md-12">
							<h2><legend>Dados Pessoais</legend></h2>
						</div>
					</div>
				</div>
				<div class="x_painel">
					<div class="row">
						<div class="col-md-4">
							<label for="CadFunc-name">Nome:</label><br>
							<input type="text" name="tname" id="tname"  class="form-control" placeholder="Nome Completo"/>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-nasc">Data de Nascimento: </label><br>
							<div class="input-group date col-md-12 col-sm-12 col-xs-12" data-provide="datepicker">
								<input type="text" id="data"class="form-control">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<label>Sexo:</label><br>
							<label class="radio-inline"><input type="radio"  name="tsexo" id="tsexofem" >Feminino</label>
							<label class="radio-inline"><input type="radio"  name="tsexo" id="tsexomasc" checked>Masculino</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="CadFunc-rg">RG: </label><br>
							<input type="text"  class="form-control" name="trg" id="trg" size="8" maxlength="8" placeholder="xx.xxx.xxx-x"/>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-cpf">CPF:</label><br>
							<input type="text" class="form-control"  name="tcpf" id="tcpf" size="11" maxlength="11" placeholder="xxx.xxx.xxx-xx"/>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-email">E-mail:</label><br>
							<input type="email" class="form-control"  name="temail" id="temail" size="40" maxlength="40" placeholder="ex@email.com"/>
						</div>
					</div>
				</div>
				<div class="x_title">
					<div class="row">
						<div class="col-md-12">
							<h2>Dados de Endereço</h2>
						</div>
					</div>			
				</div>
				<div class="x_painel">
					<div class="row">
						<div class="col-md-4">
							<label for="cest">CEP:</label><br>
							<input type="text" class="form-control" name="tcep" id="tcep" size="9" maxlength="9" placeholder="xxxxx-xxx"/>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-rua">Logradouro:</label><br>
							<input type="text" class="form-control" name="trua" id="trua" size="37" maxlength="40" placeholder="Rua, Av..."/>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-num">Numero:</label><br>
							<input type="text" class="form-control" name="tnum" id="tnum" size="5" maxlength="5" min="0" placeholder="xxx"/>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="CadFunc-complemnto">Complemnto:</label><br>
							<input type="text" class="form-control" name="tcomplemnto" id="tcomplemnto" size="41" maxlength="40" placeholder="Ex: Fundos"/>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-bairro">Bairro:</label><br>
							<input type="text" class="form-control" name="tbairro" id="tbairro" size="41" maxlength="40" placeholder="Ex: Itaim"/>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-cidade">Cidade: </label><br>
							<input type="text" class="form-control" name="tcidade" id="tcidade" size="41" maxlength="40" placeholder="Ex: São Paulo"/>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="CadFunc-est">Estado:</label><br>
							<select class="form-control" name="test" id="test">
								<option value="ac">Acre</option> 
								<option value="al">Alagoas</option> 
								<option value="am">Amazonas</option> 
								<option value="ap">Amapa</option> 
								<option value="ba">Bahia</option> 
								<option value="ce">Ceara</option> 
								<option value="df">Distrito Federal</option> 
								<option value="es">Espirito Santo</option> 
								<option value="go">Goias</option> 
								<option value="ma">Maranhao</option> 
								<option value="mt">Mato Grosso</option> 
								<option value="ms">Mato Grosso do Sul</option> 
								<option value="mg">Minas Gerais</option> 
								<option value="pa">Para</option> 
								<option value="pb">Paraiba</option> 
								<option value="pr">Parana</option> 
								<option value="pe">Pernambuco</option> 
								<option value="pi">Piaui</option> 
								<option value="rj">Rio de Janeiro</option> 
								<option value="rn">Rio Grande do Norte</option> 
								<option value="ro">Rondonia</option> 
								<option value="rs">Rio Grande do Sul</option> 
								<option value="rr">Roraima</option> 
								<option value="sc">Santa Catarina</option> 
								<option value="se">Sergipe</option> 
								<option selected value="sp">Sao Paulo</option> 
								<option value="to">Tocantins</option> 
							</select>
						</div>
					</div>
				</div>
				<!-- <div class="x_title">
					<div class="row">
						<div class="col-md-12">
							<h2>Dados da Carteira de Motorista</h2>
						</div>
					</div>	
				</div>	 -->
				<!-- <div class="x_painel">
					<div class="row">
						<div class="col-md-4">
							<label for="CadFunc-reg">N do Registro:</label><br>
							<input type="text" class="form-control" name="treg" id="treg" size="11" maxlength="11" placeholder="xxxxxxxxxx"/>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-cat">Categoria:</label>
							<select class="form-control" name="cat" id="cat">
								<option value="a"> A </option> 
								<option value="b"> B </option>
								<option value="c"> C </option>
								<option value="d"> D </option> 
								<option value="e"> E </option> 
							</select>
						</div>
						<div class="col-md-4">
							<label for="CadFunc-emis">Data de Emissao: </label><br>
							<input type="date" class="form-control" name="temis" id="temis"/></label>
						</div>
					</div>
				</div> -->
				<div class="x_painel">
					<div class="row">
						<div class="col-md-4">
							<label>Acesso ao sistema Nika:</label><br>
							<label class="radio-inline"><input type="radio" onclick="mostra()" name="tacesso" id="acessim" >Sim</label>
							<label class="radio-inline"><input type="radio" onclick="esconde()" name="tacesso" id="acesnao" checked>Não</label>
						</div>
						<div class="col-md-4" id="login" style="display:none;">
						<label for="CadFunc-cidade">Login: </label><br>
							<input type="text" class="form-control" name="tlogin" id="tlogin"/>
						</div>
						<div class="col-md-4" id="senha" style="display:none;">
						<label for="CadFunc-cidade">Senha: </label><br>
							<input type="password" class="form-control" name="tsenha" id="tsenha"/>
						</div>
					</div>	
				</div>
			</form>	
			<div class="x_painel">
			<div id="msg"></div>
				<div class="CadFunc-Botao">
					<button type="button" name="fenviar" value="enviar" class="btn btn-default bot" onclick="gravar()" >Cadastrar</button>
					<button type="button" name="fcancelar" value="cancelar" class="btn btn-default bot3" onclick="limpa()" >limpar</button>
				</div>
				
			</div>
		</div>		
	</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/jquery.mask.min.js"></script>
<script src="Static/js/bootstrap-datepicker.min.js"></script>
<script>
	function mostra(){
		$('#login').show();
		$('#senha').show();
	}
	function esconde(){
		$('#login').hide();
		$('#senha').hide();
		$('#tlogin').val("");
		$('#tsenha').val("");
	}
	function limpa(){
		location.reload();
	}

	function gravar(){
		$('#msg').html('')
		var nome = $('#tname').val();
		var data_nascimento = $('#tnasc').val();
		if($("#tsexomasc").prop("checked")){
			var sexo = "M";
		}else{
			var sexo = "F";
		}
		
		
		var rg = $('#trg').val();
		var email = $('#temail').val();
		var end = $('#trua').val();
		var numero = $('#tnum').val();
		var comple = $('#tcomplemnto').val();
		var bairro = $('#tbairro').val();
		var cidade = $('#tcidade').val();
		var estado = $('#test').val();
		var cep = $('#tcep').val();
		
		var cpf = $('#tcpf').val();
		var login = $('#tlogin').val();
		var senha = $('#tsenha').val();
		var data = {
					nome:nome
					,data_nascimento:data_nascimento
					,sexo:sexo
					,rg:rg
					,email:email
					,end:end
					,numero:numero
					,comple:comple
					,bairro:bairro
					,cidade:cidade
					,estado:estado
					,cep:cep
					,cpf:cpf
					,login:login
					,senha:senha
					
		};
		$.ajax({
			type: "POST",
			url: "salvaUsuario.php",
			data: data,
			success: function (html) {
				$('#msg').html(html);
			},
			error: function(){
				alert("erro")
			}
		});
	}
	$( "#tcep" ).change(function() {
		var caracteresDigitados = parseInt($(this).val().length);
		
		if (caracteresDigitados == 8){
			cep()
		}else{

		}
	})
	function cep(){ 
		
		var cep = $('#tcep').val();
		
		$.ajax({
			
			url: 'http://api.postmon.com.br/v1/cep/'+cep,
			dataType: 'jsonp',
			crossDomain: true,
			contentType: "application/json",
			statusCode: {
				200: function(data) { 
					//console.log(data);
					$('#trua').val(data['logradouro'])
					$('#trua').prop("disabled", true);
					$('#tbairro').val(data['bairro'])
					$('#tbairro').prop("disabled", true);
					$('#test').val(data['estado'].toLowerCase())
					$('#test').prop("disabled", true);
					$('#tcidade').val(data['cidade'])
					$('#tcidade').prop("disabled", true);
				} 
				,400: function(msg) { console.log(msg);  } // Bad Request
				,404: function(msg) { console.log("CEP não encontrado"); } // Not Found
			}
		});
	}

	jQuery(function($) {
		$(document).on('keypress', '#tnum', function(e) {
		var square = document.getElementById("#tnum");
			var key = (window.event)?event.keyCode:e.which;
			if((key > 47 && key < 58)) {
				
				return true;
				
			} else {
				
				return (key == 8 || key == 0)?true:false;
				
			}
		});
	});

	$(function () {
		$('.datepicker').datepicker({
                 format: 'DD/MM/YYYY'
				 , locale: 'pt-br'
           });
	});

	
</script>