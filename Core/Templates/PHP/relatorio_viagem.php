<?php
	
	include_once 'conexao.php';
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Relatório Viagem</title>
		<link rel="stylesheet"  href="Static/CSS/Estilo_relatorio_viagens.css">
		<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/jquery.dataTables.css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.bootstrap.css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/buttons.bootstrap.min.css" >
		<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.bootstrap4.css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.foundation.min.css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.jqueryui.min.css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.semanticui.min.css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/responsive.bootstrap.min.css" >
		<link rel="stylesheet" href="Static/bootstrap/dist/css/scroller.bootstrap.min.css" >
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
					<a href="inicial.php"><img class="logo1" src="../img/logo2.png" alt="logo_nika"/></a>
				</div>
				<div class="row">
					<div class="intcont">
						<span class='bem' >Bem vindo! 
							<?php
								echo	$logado;
							?>
						</span>
					</div>
					<div class="menu-container">
						<ul class="menu clearfix">
							<li><a href="novaViagem.php">Nova viagem</a></li>
							<li><a href="#">Administração</a>
								<ul class="sub-menu clearfix">
									<li><a href="#">Cadastro</a>
									<li><a href="#">Relatorios</a>
										<ul class="sub-menu">
											<li><a href="relatorio_viagem.php">Viagem</a></li>
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
		<br/>
		<br/>
		<div class="cont">
			<div class="col-xs-12 col-md-3">
				<label for="fullname">Motorista:</label>
				<select class="select2_single js-example-basic-single form-control" name="motorista" id="motorista">
					<option></option>
					<?php 
						$select_mot = 'select * from motorista';
						$select_mot_query = mysqli_query($con,$select_mot);
						$num_row = mysqli_num_rows($select_mot_query);

						if ($num_row > 0){
						$row = mysqli_fetch_array($select_mot_query);
							echo "<option value='{$row[0]}'>{$row[1]}</option>";
						};
					?>
				</select>
			</div>
			<div class=" col-xs-1 col-md-1">
						<button class="btn btn-default bot" onclick="javascript: validabusca()" >Buscar</button>
				</div>
			</div>
			<div>
				<span style="color:red; margin-top:10px; margin-left:10px; display:none" id="alerta">Selecione o motorista!!</span>
			</div>
		</div>
		<br/>
		<br/>
		<!--Relatório viagem-->
		
		<div class="row">
			<div class="col-md-11"></div>
			<div class="col-md-10" id="table">		
				
			</div>
		</div>	
	</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script>
 


function validabusca(){
	$("#table").html("<img src='img/loading.gif' />")
	var id_mot = $('#motorista').val();
	if(id_mot == ''){
		document.getElementById('motorista').focus();
		document.getElementById('alerta').style.display = "block";
	}else{
		document.getElementById('alerta').style.display = "none";
		busca(id_mot);
	}
}

function busca(id_mot){
	
	$.ajax({
		type: "POST",
		url: "pesquisaformulario.php",
		data:{id_mot:id_mot},
		success: function(html){
			$("#table").html(html);
		},
		error:function(html){
			$("#table").html('<div class="alert alert-danger"><strong>ERRO!</strong> '+html+'</div>');

		}
		
	})
}



</script>