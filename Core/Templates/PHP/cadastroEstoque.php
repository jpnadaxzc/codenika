<!DOCTYPE html>
<html>
	<head>
		<title>Controle & Cadastro</title>
		<meta name="description" content="Relatorio Cliente">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="../Static/CSS/cssPadrao.css">
		<link rel="sortcut icon" href="imagem/logo2.png" type="image/png"/>	
	</head>
	<body>
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
			<h1>Cadastro de Produtos</h1>
			<br/>
		</div>
		
		<div class="formulario">
			
			<br/>
			<h2 id="subsubtit">Estoque</h2>
			
			<form method="post" id="CadEstoque-FormCadEstoque">
			
				<fieldset id="CadEstoque-FDadosEstoque">
					<p><label for="CadEstoqueCOD"> COD:   <input type="text"  name="tCOD" id="RelClient-COD" size="40" maxlength="40" /></label>
					<p><label for="CadEstoque-Marca">Marca:</label>
						<select name="test" id="cest">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="opel">Opel</option>
							<option value="audi">Audi</option>	
						</select>
					<p><label for="CadEstoqueModelo"> Modelo:   <input type="text"  name="tModelo" id="RelClient-Modelo" size="40" maxlength="40" /></label>
					<p><label for="CadEstoqueFabricante"> Fabricante: <input type="text"  name="tFabricante" id="RelClient-Fabricante" size="40" maxlength="40" /></label>
					<p><label for="CadEstoquefornecedor"> Fornecedor: <input type="text"  name="tFornecedor" id="RelClient-Fornecedor" size="40" maxlength="40" /></label>
					<p><label for="CadEstoqueValidade"> Validade: <input type="text"  name="tValidade" id="RelClient-Validade" size="40" maxlength="40" /></label>
					<p><label for="CadEstoque-Armazenamento">Local do Armazenamento:</label>
						<select>
						<option value="volvo">Estoque</option>
						<option value="saab">Garagem</option>
						<option value="opel">Casa</option>
						<option value="audi">Outros</option>
					</select>	
				</fieldset>
				
				<div class="RelClient-ultimosservicos">
					<br/>
					<h2 id="subsubtit"> Observações </h2>
					<fieldset id="RelClient-fultimosservicos">
						<br/>
						<textarea name="comentário" rows="9" cols="100">***Aqui vai ser um quadro de Observações***</textarea>
						<br/>
						<br/>
				</div>
			</form>
			
			<button type="button" name="fenviar" value="enviar" class="css3button">Salvar Alterações</button>
		</div>
	</body>
</html>