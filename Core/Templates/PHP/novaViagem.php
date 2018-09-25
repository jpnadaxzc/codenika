<!DOCTYPE html>
<html>
<head>
	<title>NIKA -transpostes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../Static/CSS/estilomenu.css" type="text/css">
  <link rel="stylesheet" href="../Static/bootstrap/dist/css/bootstrap.min.css">
  <link href="../Static/bootstrap/dist/CSS/select2.min.css" rel="stylesheet">
	
</head>
<body style="background-color: grey">
	<!-- 
		=================
		INICIO DO MENU
		=================
	-->
	<div style="display: flex;">
		<div style="display: flex; background-color:black; text-align: center;  width: 100%; ">
			<div>
			<a href="inicial.php"><img class="logo1" src="../img/logo2.png" alt="logo_nika"/></a>
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
							<li><a href="#">Nova viagem</a></li>
								<li><a href="#">Administração</a>
										<ul class="sub-menu clearfix">
												<li><a href="#">Cadastro</a>
												<li><a href="#">Relatorios</a>
													<ul class="sub-menu">
														<li><a href="relatorioViagem.php">Viagem</a></li>
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
    <form class="form-horizontal form-label-left container" style="width : 100%" method="post">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <label for="fullname">Cliente:</label>
                <select class="select2_single js-example-basic-single form-control" tabindex="-1" name="contrato" id="getCliente">
                    <option>Teste</option>
                </select>
            </div>
        </div>
    </form>
</body>
</html>
<script src="../Static/js/jquery.min.js"></script>
<script src="../Static/js/select2.min.js"></script>
<script>
    $('.js-example-basic-single').select2({ width: '500%' });
    
               
</script>