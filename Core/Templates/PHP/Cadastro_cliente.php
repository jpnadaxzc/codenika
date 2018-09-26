<!DOCTYPE html>
<html>
<head>
<title>Cadastro cliente</title>
<link rel="stylesheet" type="text/css" href="estilo_cadastro_cliente.css">
<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">

</head>

<body class="tudo">
<!-- 
		=================
		INICIO DO MENU
		=================
	-->
	<div style="display: flex;">
		<div style="display: flex; background-color:black; text-align: center;  width: 100%; ">
			<div>
			<a href="inicial.php"><img class="logo1" src="img/logo2.png" alt="logo_nika"/></a>
				<!--<img src="imagem/logo2.png"" alt="logo_nika"/>-->
			</div>
			<div class="row">
				<div class="intcont">
					<?php
						echo "<span class='bem' >Bem vindo! Vinicius";
						$logado;
						echo "</span>";
					?>
				</div>
				<div class="menu-container">
						<ul class="menu clearfix">
							<li><a href="novaViagem.php">Nova viagem</a></li>
								<li><a href="#">Administração</a>
										<ul class="sub-menu clearfix">
												<li><a href="#">Cadastro</a>
													<ul class="sub-menu">
														<li><a href="Cadastro_cliente.php">Clientes</a></li>
													</ul>
												<li><a href="#">Relatorios</a>
													<ul class="sub-menu">
														<li><a href="relatorio_viagem.php">Viagem</a></li>
														<li><a href="relatorioMotorista.php">Motorista</a></li>
														<li><a href="relatorioCliente.php">Cliente</a></li>
													</ul>
										</ul><!-- submenu -->
								</li>
								<li><a href="#">Financeiro</a>
								<li><a href="#">Entregas</a>
								<li><a href="#">Gestão</a>
						</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- 
		=================
		FIM DO MENU
		=================
	-->
	
	
<br/>
<div class="cont-pai">
<div class="container">
	<form action="Novo cliente" method="post">
		<div>	<label for="nome">Nome:</label></div>
				<div class="inputs"><input class="campo" type="text" id="nome_cliente"/></div>	
				
		<div>	<label for="rg">RG:</label></div>
				<div class="inputs"><input class="campo" type="number" id="rg"/></div>
		
		<div>	<label for="endereço">Endereço:</label></div>
				<div class="inputs"><input class="campo" type="text" id="endereco"/></div>	
		
		<div>	<label for="numero_casa">N°:</label></div>
				<div class="inputs"><input class="campo" type="number" id="numero_casa"/></div>	
			
		<div>	<label for="bairro">Bairro:</label></div>
				<div class="inputs"><input class="campo" type="text" id="bairro"/></div>	
			
		<div>	<label for="cep">CEP:</label></div>
				<div class="inputs"><input class="campo" type="text" id="cep"/></div>	
			
		<div>	<label for="bloco">Bloco:</label></div>
				<div class="inputs"><input class="campo" type="text" id="bloco"/></div>	
			
		<div>	<label for="apartamento">Apartamento:</label></div>
				<div class="inputs"><input class="campo" type="number" id="ap"/></div>
	
				Estado:
				<div class="inputs"><select class="campo" name="estado"></div>
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
				</select></div>
		
		<div>	<label for="email">Email:</label></div>
				<div class="inputs"><input class="campo" type="email" id="email"/></div>	
		
		<div>	<label for="telefone">Telefone:</label></div>
				<div class="inputs"><input class="campo" type="number" id="telefone"/></div>
			
		<div>	<label for="telefone_comercial" style="font-size:15px;">Telefone Comercial:</label>
				<div class="inputs"><input class="campo" type="number" id="telefone_comercial"/></div>
			
		<div>	<label for="celular">Celular:</label></div>
				<div class="inputs"><input class="campo" type="number" id="celular"/></div>
		
		<div>	<label for="site_cliente">Site:</label></div>
			<div class="inputs"><input class="campo" type="url" id="site_cliente"/></div>
				
		<div>	<label for="obervacoes">Observações</label></div>
			<div>	<textarea class="textarea" id="obervacoes"></textarea></div>	
		<div class="botoes">
			<div ><input class="botao" type="button" name="botao-Cadastrar" value="Cadastrar"></div>	
			<div ><input class="botao" type="button" name="botao-Cancelar" value="Cancelar"></div>				
		</div>
	</form>	
	</div>
	</div>
</body>
</html>