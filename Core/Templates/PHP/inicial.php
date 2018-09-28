
<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.html');
    }
 
$logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>NIKA -transpostes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
  <link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
	
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
	<div style="display: flex;" >
		<?php 
			//SESSION_START();
		/*if ($_session['poder'] ==1) {	*/
		?>
	<div style="display: flex;" >
		<div style="background-color: #0072bc;width:300px;height:300px;margin-top: 10px;">
				
		</div>
	<?php
	/*	};*/
	?>

		<!-- <div class="container">
		  <h2 style="font-family: Tahoma, Geneva, sans-serif">Lembretes do mês</h2>
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		   
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		   
		    <div class="carousel-inner">

		      <div class="item active">
		        <img src="../img/lembrete.png" alt="Los Angeles" style="width:20%;">
		        <div class="carousel-caption">
		          <h3>Renovar Habilitação:</h3>
		          <p>Nome do motorista</p>
		        </div>
		      </div>

		      <div class="item">
		        <img src="../img/lembrete.png" alt="Los Angeles" style="width:20%;">
		        <div class="carousel-caption">
		          <h3>Pagar parcela da carreta</h3>
		          <p>DXP - 3025</p>
		        </div>
		      </div>
		    
		      <div class="item">
		        <img src="../img/lembrete.png" alt="Los Angeles" style="width:20%;">
		        <div class="carousel-caption">
		          <h3></h3>
		          <p></p>
		        </div>
		      </div>
		  
		    </div>

		    
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div> -->
	<div>
</body>
</html>

<script src="Static/js/jquery.min.js"></script>
<script src="Static/bootstrap/dist/js/bootstrap.min.js"></script>