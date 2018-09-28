	
<html lang="pt-br">
	<head>
		<title> Cadastro Funcionario </title>
		<meta charset="utf-8"/>
		<meta name="description" content="Formulario">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="../Static/CSS/cssPadrao.css">
		<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
		<link rel="sortcut icon" href="imagem/logo2.png" type="image/png"/>	
	</head>

	<body>
		<div id="interface">
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
																<li><a href="cadastroFuncionario.php">Funcionarios</a></li>
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
			
			<div class="cabecalho">
				<br/>
				<h1>Cadastro de Funcionário</h1>
				<br/>
			</div>			
		
			<div class="formulario">
			<br/>
				<form method="post" id="CadFunc-contato">	
					<fieldset id="CadFunc-dadospessoais"><legend>Dados Pessoais</legend>
						<p><label for="CadFunc-name">Nome: <input type="text" name="tname" id="CadFunc-name" size="40" maxlength="40" placeholder="Nome Completo"/></label></p>
						<p><label for="CadFunc-nasc">Data de Nascimento: <input type="date" name="tnasc" id="CadFunc-nasc"/></label></p>
						<fieldset id="CadFunc-sexo"><legend>Sexo:</legend>
							<input type="radio" name="tsexo" id="CadFunc-fem"/><label for="CadFunc-fem"> Feminino </label> <br/>
							<input type="radio" name="tsexo" id="CadFunc-masc" checked/> <label for="CadFunc-masc"> Masculino </label>
						</fieldset>
						<p><label for="CadFunc-rg">RG: <input type="text" name="trg" id="CadFunc-rg" size="12" maxlength="11" placeholder="xx.xxx.xxx-x"/></label></p>				
						<p><label for="CadFunc-cpf">CPF: <input type="text" name="tcpf" id="CadFunc-cpf" size="11" maxlength="11" placeholder="xxx.xxx.xxx-xx"/></label></p>
						<p><label for="CadFunc-email">E-mail: <input type="email" name="temail" id="CadFunc-email" size="40" maxlength="40" placeholder="ex@email.com"/></label></p>
						<p><label for="CadFunc-img">Imagem de perfil:</label></p>
					</fieldset>
						
					<fieldset id="CadFunc-dadosendereco"><legend>Dados de Endereço</legend>
						<p><label for="CadFunc-rua">Logradouro: <input type="text" name="trua" id="CadFunc-rua" size="37" maxlength="40" placeholder="Rua, Av..."/></label></p>
						<p><label for="CadFunc-num">Numero: <input type="number" name="tnum" id="CadFunc-num" size="5" maxlength="5" min="0" placeholder="xxx"/></label></p>
						<p><label for="CadFunc-bairro">Bairro: <input type="text" name="tbairro" id="CadFunc-bairro" size="41" maxlength="40" placeholder="Ex: Itaim"/></label></p> 
						<p><label for="CadFunc-cidade">Cidade: <input type="text" name="tcidade" id="CadFunc-cidade" size="41" maxlength="40" placeholder="Ex: São Paulo"/></label></p>
						<p><label for="CadFunc-est">Estado:</label>
							<select name="test" id="cest">
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
						<p><label for="cest">CEP: <input type="text" name="tcep" id="ccep" size="9" maxlength="9" placeholder="xxxxx-xxx"/></label></p>
					</fieldset>
						
					<fieldset id="CadFunc-dadoscarteira"><legend>Dados da Carteira de Motorista</legend>
						<p><label for="CadFunc-reg">N do Registro: <input type="text" name="treg" id="CadFunc-reg" size="11" maxlength="11" placeholder="xxxxxxxxxx"/></label></p>
						<p><label for="CadFunc-cat">Categoria:</label>
							<select name="cat" id="CadFunc-at">
								<option value="a"> A </option> 
								<option value="b"> B </option>
								<option value="c"> C </option>
								<option value="d"> D </option> 
								<option value="e"> E </option> 
							</select>
						<p><label for="CadFunc-emis">Data de Emissao: <input type="date" name="temis" id="CadFunc-emis"/></label></p>
					</fieldset>
						
					<fieldset id="CadFunc-dadosdependentes"><legend>Dependentes:</legend>
						<p><label for="CadFunc-name1">Nome: <input type="text" name="tdname" id="CadFunc-name1" size="40" maxlength="40" placeholder="Nome Completo"/></label></p>
						<p><label for="CadFunc-nasc1">Data de Nascimento:<input type="date" name="nasc1" id="CadFunc-nasc"/></label></p>
						<p><label for="CadFunc-par1">Parentesco:<input type="text" name="tdpar" id="CadFunc-par1" size="30" maxlength="30" placeholder="Ex: Filho"/></label></p>
						<br/>
						
						<p><label for="CadFunc-name2">Nome: <input type="text" name="tdname" id="CadFunc-name2" size="40" maxlength="40" placeholder="Nome Completo"/></label></p>
						<p><label for="CadFunc-nasc2">Data de Nascimento:<input type="date" name="nasc2" id="CadFunc-nasc"/></label></p>
						<p><label for="CadFunc-par2">Parentesco:<input type="text" name="tdpar" id="CadFunc-par2" size="30" maxlength="30" placeholder="Ex: Filho"/></label></p>
						<br/>
										
						<p><label for="CadFunc-name3">Nome: <input type="text" name="tdname" id="CadFunc-name3" size="40" maxlength="40" placeholder="Nome Completo"/></label></p>
						<p><label for="CadFunc-nasc3">Data de Nascimento:<input type="date" name="tdnasc3" id="CadFunc-nasc"/></label></p>
						<p><label for="CadFunc-par3">Parentesco:<input type="text" name="tdpar" id="CadFunc-par3" size="30" maxlength="30" placeholder="Ex: Filho"/></label></p>			
					</fieldset>
					
					<br/>
					<br/>
					
					<div class="CadFunc-Botao">
						<button type="button" name="fenviar" value="enviar" class="css3button">Cadastrar</button>
						<button type="button" name="fcancelar" value="cancelar" class="css3button">cancelar</button>
					</div>
									
				</form>	
			</div>
		</div>		
	</body>
</html>