<!DOCTYPE html>
<html>
<head>
<title>Relatório Viagem</title>
	<link rel="stylesheet"  href="../Static/CSS/Estilo_relatorio_viagens.css">
	<link rel="stylesheet" href="../Static/CSS/estilomenu.css" type="text/css">
  	<link rel="stylesheet" href="../Static/bootstrap/dist/css/bootstrap.min.css">
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
		<br/>
		
		
		<!--Relatório viagem-->
	<div class="viagem">
			<div id="ordem">Ordem</div> 
			<div id="dt_abastecimento">Data Abastecimento</div> 
			<div id="km_rodado">Km Rodado</div> 
			<div id="litros">Litros</div> 
			<div id="valor_p_litros">Valor por Litros</div> 
			<div id="valor_total">Valor total</div>  		
			<div id="dt_pgto_nika">Data Pgto Nika</div>  
			<div id="data">Data</div>  
			<div id="romaneio">Romaneio</div>  
			<div id="cte_nika">CTE emitido nika</div>  
			<div id="cte_cliente">CTE emitido cliente</div>  			
			<div id="frete_c_pedagio">Frete c/ pedágio</div>  
			<div id="frete_s_pedagio">Frete s/ pedágio motorista</div>  
			<div id="comissao">Comissão 8%</div>  
			<div id="pgtos_efetuados">Pgtos efetuados</div>     			
			<div id="data_pgtos">Data pgtos</div>	
			<div id="percurso">Percuso</div> <!--Criar um link que abre uma caixa de texto-->
	</div>










</body>
</html>