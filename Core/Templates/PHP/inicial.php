<!DOCTYPE html>
<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
   // header('location:index.html');
    }
 
//$logado = $_SESSION['login'];
?>
<html>
<head>
	<title>NIKA -transpostes</title>
	<meta charset="utf-8">
  <!-- separar css do html -->
	
	<link rel="stylesheet" href="../Static/CSS/estilomenu.css" type="text/css">
  <link rel="stylesheet" href="../Static/bootstrap/dist/css/bootstrap.min.css">
  <script src="../Static/js/jquery.min.js"></script>
  <script src="../Static/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body style="background-color: grey">
				<div style="display: flex;">
					<div style="display: flex; justify-content: space-around;background-color:black; text-align: center;  width: 100%; ">
						<div>
							<img src="../img/logo2.png" alt="logo_nika"/>
							<!--<img src="imagem/logo2.png"" alt="logo_nika"/>-->
						</div>
						<div class="intcont">
							<?php
								//echo "<span class='bem' >Bem vindo! $logado</span>";
							?>
						</div>
						<div class="intcont">
							<div class="ops" >
								<a href="javascript:void(0)" >Administração<a>
							</div>
							<div class="submenu">
								<a href="javascript:void(0)">Cadastro</a>
								<a href="javascript:void(0)">Relatorios</a>
							</div>
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
        </div>'
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

		<div class="container">
		  <h2 style="font-family: Tahoma, Geneva, sans-serif">Lembretes do mês</h2>
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
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

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
	<div>
</body>
</html>