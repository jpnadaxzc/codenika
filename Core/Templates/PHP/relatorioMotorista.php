<html>
	<head>
		<title> Cadastro Motorista </title>
		<meta name="description" content="Formulario">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="../Static/CSS/cssPadrao.css">
		<link rel="stylesheet" href="../Static/CSS/estilomenu.css" type="text/css">
  		<link rel="stylesheet" href="../Static/bootstrap/dist/css/bootstrap.min.css">	
	</head>

	<body>
		<!-- 
		=================
		INICIO DO MENU
		=================
		-->
		<div style="display: flex;">
			<div style="display: flex; background-color:black; text-align: center;  width: 100%; ">
				<div>
					<img class="logo1" src="../img/logo2.png" alt="logo_nika"/>
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
							<li><a href="#">Administração</a>
								<ul class="sub-menu clearfix">
									<li><a href="#">Cadastro</a>
									<li><a href="#">Relatorios</a>
										<ul class="sub-menu">
											<li><a href="relatorioViagem.php">Viagem</a></li>
											<li><a href="relatorioMotorista.php">Motorista</a></li>
											<li><a href="relatorioCliente.php">Cliente</a></li>
										</ul>
									</li>
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
		<div class="row">
			<div class="x_panel col-md-12">
				<div class="alert alert-success alert-dismissible ">
					<h2 class=""> Relatório Motorista</h2>    
				</div>
			</div>
		</div>	
		<div style="margin-left:5%;">
			<form action="Script_do_Formulario.php" method="post">
				<!-- relatorio motorista-->
				<div class="row">
					<div class="col-xs-12 col-md-3">
						<label>Nome:</label><br/>
						<input type="text" name="tname" id="cname" size="40" maxlength="40" placeholder="Nome Completo"/>
					</div>
					<div class="col-xs-12 col-md-3">
						<label>CPF:</label><br/>
						<input type="text" name="tcpf" id="ccpf" size="11" maxlength="11" placeholder="CPF Completo"/>
					</div>
					<div class="col-xs-6 col-md-3">
						<label>Idade:</label><br/>
						<input type="text" name="tidade" id="cid" size="8" maxlength="3" min="0" max="200" placeholder="Sua Idade"/>
					</div>
				</div>
				<br/>
				<div class="row">
					
					<div class="col-xs-6 col-md-3">
						<label>Telefone:</label><br/>
						<input type="text" name="ttel1" id="ctel1" size="15" maxlength="10" placeholder="(xx)xxxx-xxxx"/>
					</div>
					<div class="col-xs-6 col-md-3">
						<label>Telefone:</label><br/>
						<input type="text" name="ttel1" id="ctel1" size="15" maxlength="10" placeholder="(xx)xxxx-xxxx"/>
					</div>
					<div class="col-xs-6 col-md-3">
						<label>Celular:</label><br/>
						<input type="text" name="tcel" id="ccel" size="15" maxlength="11" placeholder="(xx)xxxxx-xxxx"/>
					</div>
				</div>
				<br/>
			</form>	
		</div>
			<form >
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="x_panel col-md-12">
							<div class="alert alert-success alert-dismissible ">
								<h2 class=""> Pendências</h2>    
							</div>
						</div>
						<br/>	
						<div class="p">	
							<textarea name="comentário" rows="9" cols="100">***Aqui vai ser um quadro de pendências***</textarea> 
						</div>
						<br/>	
					</div>
				</div>	
				<div class="row">
					<br/>
					<div class="row">	
						<div class="col-xs-12 col-md-12">
							<legend><b>Últimos valores em comissão</b></legend>
						</div>
						<div class="col-xs-3 col-md-3">
							<input type="text" name="Celular" >
						</div> 
						<div class="col-xs-9 col-md-9">
							<button type="button" class="btn">Veja mais</button>	
						</div>	
						<div class="col-xs-3 col-md-3">
							<input type="text" name="Celular" > 
						</div>
						<div class="col-xs-9 col-md-9">
							<button type="button" class="btn">Veja mais</button>
						</div>		
						<div class="col-xs-3 col-md-3">
							<input type="text" name="Celular" > 
						</div>
						<div class="col-xs-9 col-md-9">
							<button type="button" class="btn">Veja mais</button>
						</div>
					</div>
				</div>	
			</form>
		</div>
		<br/>
		<br/>
		<button type="button" name="fenviar" value="enviar" class="btn pull-right">Salvar Alterações</button>
	</body>
</html>
