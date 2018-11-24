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
		<link rel="stylesheet" href="Static/CSS/estilo_novaViagem.css" type="text/css">
		<link rel="stylesheet" href="Static/CSS/cssPadrao.css" type="text/css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/daterangepicker.css">
	</head>
	<body class="tudo">
		<!-- 
			=================
			INICIO DO MENU
			=================
		-->
		<?php include 'menu.php' ?>
		<!-- 
			=================
			FIM DO MENU
			=================
		-->
		<br/>
		<br/>
		<br/>
		<div class="x_painel">
			<div class="col-md-3">
				<label for="fullname">Motorista:</label>
				<select class="select2_single js-example-basic-single form-control" name="motorista" id="motorista">
					<option value="">TODOS</option>
					<?php 
						$select_mot = 'select * from motorista';
						$select_mot_query = mysqli_query($con,$select_mot);
						$num_row = mysqli_num_rows($select_mot_query);

						if ($num_row > 0){
							for($i3 = 0;$num_row > $i3; $i3++){
								$row = mysqli_fetch_array($select_mot_query);
								echo "<option value='{$row[0]}'>{$row[1]}</option>";
							}
						};
					?>
				</select>
			</div>
			<div class="col-md-3">
				<label for="fullname">Placa:</label>
				<select class="select2_single js-example-basic-single form-control" name="veiculo" id="veiculo">
					<option value="">TODOS</option>
					<?php 
						$select_vei = 'select * from nika.veiculo';
						$select_vei_query = mysqli_query($con,$select_vei);
						$num_row_vei = mysqli_num_rows($select_vei_query);

						if ($num_row_vei > 0){
							for($i2 = 0;$num_row_vei > $i2; $i2++){
								$row_vei = mysqli_fetch_array($select_vei_query);
								echo "<option value='{$row_vei['placa']}'>{$row_vei['placa']}</option>";
							}
						};
					?>
				</select>
			</div>
			<div class="col-md-4">
				<label>Cliente</label>
				<select id="clinte" class="select2_single js-example-basic-single form-control">
					<option value="">TODOS</option>
					<?php 
						$select_cliente = 'select * from nika.clientes order by nome';
						$select_cliente_query = mysqli_query($con,$select_cliente);
						$num_row_cliente = mysqli_num_rows($select_cliente_query);

						if ($num_row_cliente > 0){
							for($i = 0;$num_row_cliente > $i; $i++){
								$row_cliente = mysqli_fetch_array($select_cliente_query);
								echo "<option value='{$row_cliente[0]}'>{$row_cliente[1]}</option>";
							}
						};
					?>
				</select>
			</div>
			<div class='col-md-2' >
				<label for="fullname">Periodo:</label>
                <div class="form-group">
						<div class='input-group date' id='datetimepicker5'>
						<input class="form-control" type="text" value="" name="periodo" id="periodo"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
			<div class="col-md-3">
						<button class="btn btn-default bot" onclick="javascript: validabusca()" >Buscar</button>
						<button class="btn btn-default bot3" onclick="javascript: limpar()" >Limpar</button>
				</div>
			</div>
			<div>
				<span style="color:red; margin-top:10px; margin-left:10px; display:none" id="alerta">Selecione o motorista!!</span>
			</div>
		</div>
		<br/>
		<br/>
		<!--Relatório viagem-->
		<div class="x_painel">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-12" id="table">		
					
				</div>
			</div>	
		</div>
	</body>
</html>
<script src="Static/js/jquery.min.js"></script>

<script type="text/javascript" src="Static/js/moment-with-locales.js"></script>
<script type="text/javascript" src="Static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Static/js/daterangepicker.min.js"></script>

<script>
function validabusca(){
	$("#table").html("<img src='img/loading.gif' style='margin-left:40%' />")
	var id_mot = $('#motorista').val();
	var placa = $('#veiculo').val();
	var periodo = $('#periodo').val();
	var cliente = $('#clinte').val();
	
	if(id_mot == '' && placa == "" && periodo == "" && cliente == ''){
		$("#table").html("<div class='alert alert-warning'><strong>OPS!</strong>Selecione algum filtro</div>");
		return;
	}else{
		document.getElementById('alerta').style.display = "none";
		busca(id_mot,placa,periodo,cliente);
	}
}

function busca(id_mot,placa,periodo,cliente){
	
	
	$.ajax({
		type: "POST",
		url: "pesquisaformulario.php",
		data:{id_mot:id_mot,placa:placa,periodo:periodo,cliente:cliente},
		success: function(html){
			
			$("#table").html(html);
		},
		error:function(html){
			
			$("#table").html('<div class="alert alert-danger"><strong>ERRO!</strong> '+html.statusText+'</div>');

		}
		
		
	})
}

function limpar(){
	location.reload();
}

$(function () {
	$('#periodo').daterangepicker({
		"locale": {
    "format": "DD/MM/YYYY",
    "separator": " - ",
    "applyLabel": "Aplicar",
    "cancelLabel": "Cancelar",
    "fromLabel": "De",
    "toLabel": "Até",
    "customRangeLabel": "Custom",
    "daysOfWeek": [
        "Dom",
        "Seg",
        "Ter",
        "Qua",
        "Qui",
        "Sex",
        "Sáb"
    ],
    "monthNames": [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    ],
    "firstDay": 0
}
		
	});
});


</script>