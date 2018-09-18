<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title> Relatorio Cliente </title>
			<meta name="description" content="Relatorio Cliente">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<link rel="stylesheet" type="text/css" href="../Static/CSS/cssPadrao.css">
			<link rel="sortcut icon" href="imagem/logo2.png" type="image/png"/>	
		</head>
		<body>
			<div class="interface">
				<header>
					<div class = "Menu">
						<div style="display: flex; justify-content: space-around;background-color:black; text-align: center;  width: 100%; ">
							<div>
								<img src="https://github.com/isasmartins/logo/blob/master/logo2.png?raw=true"></img>
							</div>
							<div  style=" width: 100px; height: 30px; text-align: center;margin-top: 40px;">
								<a href="javascript:void(0)" style="color:white; text-decoration: none; font-family: Tahoma, Geneva, sans-serif;">Administração<a>
							</div>
							<div style="background-color:black; width: 100px; height: 30px; text-align: center;margin-top: 40px;">
								<a href="javascript:void(0)"style="color:white; text-decoration: none; font-family: Tahoma, Geneva, sans-serif;">Financeiro<a>
							</div>
							<div style="background-color:black; width: 100px; height: 30px; text-align: center;margin-top: 40px;">
								<a href="javascript:void(0)"style="color:white; text-decoration: none; font-family: Tahoma, Geneva, sans-serif;">Entregas<a>
							</div>
							<div style="background-color:black; width: 100px; height: 30px; text-align: center;margin-top: 40px;">
								<a href="javascript:void(0)"style="color:white; text-decoration: none; font-family: Tahoma, Geneva, sans-serif;">Gestão<a>
							</div>
						</div>
					</div>
				</header>
				
				<div class="cabecalho">
					<br/>
					<h1>Relatório Cliente</h1>
					<br/>
				</div>
				
				<div class="formulario">
					<br/>
					<h2 id="subsubtit">Dados Clientes</h2>
					<form method="post" id="RelClient-FormDadosClientes">
						<fieldset id="RelClient-FDadosClientes">
							<p><label for="RelClientnome"> Nome:   <input type="text"  name="tname" id="RelClient-name" size="40" maxlength="40" /></label>
							<label for="RelClient-cod"> Codigo Cliente:   <input type="text"  name="tcod" id="RelClient-cod" size="10" maxlength="10" /></label>
							<p><label for="RelClient-cpf/cnpj"> CPF/CNPJ:  <input type="text"  name="tcpf" id="RelClient-cpf/cnpj" size="20" maxlength="15" /></label></p>
							<p><label for="RelClient-telefone1"> Telefone: <input type="text"  name="ttel1" id="RelClient-tel1" size="15" maxlength="12" /></label>
							<label for="RelClient-telefone2"> Ramal:  <input type="text"  name="ttel2" id="RelClient-tel2" size="10" maxlength="8" /></label>
							<label for="RelClient-telefone3"> Celular: <input type="text"  name="ttel3" id="RelClient-tel3" size="15" maxlength="12" /></label></p>
							<p><label for="RelClient-email"> Email: <input type="email"  name="temail" id="RelClient-email" size="40" maxlength="15" /></label></p>
							<p><label for="RelClient*site"> Site: <input type="esite"  name="tsite" id="RelClient-site" size="40" maxlength="15" /></label></p>		
						</fieldset>
						<br/>
					</form>
				</div>
				
				<div class="RelClient-pendencias">
					<br/>
					<h2 id="subsubtit">Pendencias aparecerão aqui </h2>
					<h3>Não ha pendencias </h3>
					<p><input type="checkbox" name="RelClient-divi" value="Divida" checked /> O Cliente quitou sua divida </p>
					<br/>
					<br/>
					
				</div>
				
				<div class="RelClient-ultimosservicos">
					<br/>
					<h2 id="subsubtit"> Ultimos Serviços</h2>
					<fieldset id="RelClient-fultimosservicos">
										
						<p><input type="text" name="atext1" id="RelClient-text1" size="40" maxlength="40" value="Entrega realizada em Manaus 12/05/2018"/> <input type="submit" value="Veja Mais"></p>
						<p><input type="text" name="atext2" id="RelClient-text2" size="40" maxlength="40" value="Entrega realizada em Osasco 11/05/2018"/> <input type="submit" value="Veja Mais"></p>
						<p><input type="text" name="atext3" id="RelClient-text3" size="40" maxlength="40" value="Entrega realizada em Vitoria 12/05/2018"/> <input type="submit" value="Veja Mais"></p>

					</fieldset>	
					<br/>
				</div>
			</div>
		</body>
	</html>