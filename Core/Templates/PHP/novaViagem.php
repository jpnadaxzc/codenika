<!DOCTYPE html>
<html>
<head>
	<title>NIKA -transpostes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
	<link rel="stylesheet" href="Static/CSS/estilo_novaViagem.css" type="text/css">
  <link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
  <link href="Static/bootstrap/dist/css/select2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap-datepicker.css">
 
</head>
<body >
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
	
	<div class='x_painel'>
		<div class="row">
			<div class="col-md-2 col-sm-2 col-xs-2" style="margin-top:15px; font-weight: bolder; margin-left:-15px;">
				Numero da viagem : <?php echo $numvaiagem; ?>
			</div>
			<div class="col-xs-12 col-md-3">
				<label for="fullname">Cliente:</label>
				<select class="select2_single js-example-basic-single form-control" name="motorista" id="motorista">
					<option>asdasdasdasdasdas</option>
					
				</select>
			</div>
		</div>
		<br/>
		<div class="row">
			<form  method="post">
				<div class="row">
					<div class=" col-md-4">	
						<label for="endereço">Motorista:</label></label><span style="color:red;">*</span><span id="msgcpf" class="esconde color">&nbsp Campo Obrigatorio</span>
						<select class="select2_single js-example-basic-single form-control" name="motorista" id="caminhao">
							<option>asdasdasdasdasdas</option>
						</select>
					</div>
					<div class=" col-md-4">	
						<label for="endereço">Caminhão:</label></label><span style="color:red;">*</span><span id="msgcpf" class="esconde color">&nbsp Campo Obrigatorio</span>
						<select class="select2_single js-example-basic-single form-control" name="motorista" id="caminhao">
							<option>asdasdasdasdasdas</option>
						</select>
					</div>	
					<div class="col-md-4">	
						<label for="rg">Destino:</label></label><span style="color:red;">*</span><span id="msgrg" class="esconde color"> &nbsp Campo Obrigatorio</span>
						<input class="form-control" type="text" id="Destino"/>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">	
						<label for="nome">Data saida:</label><span style="color:red;">*</span><span id="msgnome_cliente" class="esconde color">&nbsp Campo Obrigatorio</span>
						<div class="input-group date col-md-12 col-sm-12 col-xs-12" data-provide="datepicker">
							<input type="text" class="form-control">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		
		
	</div>
	
</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/select2.min.js"></script>
<script src="Static/js/bootstrap-datepicker.min.js"></script>
<script>
    $('.js-example-basic-single').select2({ width: '100%' ,height: 35px});
	$(function () {
		$('.datepicker').datepicker({
                 format: 'DD/MM/YYYY'
           });
	});
               
</script>