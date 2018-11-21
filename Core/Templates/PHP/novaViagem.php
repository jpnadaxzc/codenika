<?php include_once 'conexao.php'; 
$Query_num_viagem = "select id from nika.viagem order by id desc limit 1";
$res_query_vaigem = mysqli_query($con,$Query_num_viagem);
$num_rowViagens = mysqli_num_rows($res_query_vaigem);

if ($num_rowViagens > 0){
$row_vaigem = mysqli_fetch_array($res_query_vaigem);
 $numvaiagem = $row_vaigem[0]+1;
}else{
	$numvaiagem = 1;
}

?>
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
			<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:15px; font-weight: bolder; margin-left:-15px;">
				Numero da viagem : <?php  echo $numvaiagem; ?>
			</div>
			
		</div>
		<br/>
		<div class="row">
			<form  method="post">
				<div class="row">
					<div class="col-md-4">
						<label for="fullname">Cliente:</label><span style="color:red;">*</span><span id="msgcliente" class="esconde color">&nbsp Campo Obrigatorio</span>
						<select class="select2_single js-example-basic-single form-control" name="cliente" id="cliente">
							<option></option>
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
					<div class=" col-md-4">	
						<label for="endereço">Motorista:</label></label><span style="color:red;">*</span><span id="msgmotorista" class="esconde color">&nbsp Campo Obrigatorio</span>
						<select class="select2_single js-example-basic-single form-control" name="motorista" id="motorista">
							<option></option>
							<?php 
								$select_mot = 'select * from motorista order by nome';
								$select_mot_query = mysqli_query($con,$select_mot);
								$num_row = mysqli_num_rows($select_mot_query);

								if ($num_row > 0){
									for($i2 = 0;$num_row > $i2; $i2++){
										$row = mysqli_fetch_array($select_mot_query);
										echo "<option value='{$row[0]}'>{$row[1]}</option>";
									}
								};
							?>
						</select>
					</div>
					<div class=" col-md-4">	
						<label for="endereço">Caminhão:</label></label><span style="color:red;">*</span><span id="msgcaminhao" class="esconde color">&nbsp Campo Obrigatorio</span>
						<select class="select2_single js-example-basic-single form-control" name="caminhao" id="caminhao">
							<option></option>
							<?php 
								$select_veiculo = 'select * from nika.veiculo order by placa';
								$select_veiculo_query = mysqli_query($con,$select_veiculo);
								$num_row_veiculos = mysqli_num_rows($select_veiculo_query);

								if ($num_row_veiculos > 0){
									for($i3 = 0;$num_row_veiculos > $i3; $i3++){
										$row_veiculo = mysqli_fetch_array($select_veiculo_query);
										
										echo "<option value='{$row_veiculo[0]}'>{$row_veiculo[1]}</option>";
									}
								};
							?>
						</select>
					</div>
				</div>
				<br>
				
				<div class="row">
					<div class="col-md-4">	
						<label for="Destino">Destino:</label></label><span style="color:red;">*</span><span id="msgdestino" class="esconde color"> &nbsp Campo Obrigatorio</span>
						<input class="form-control" type="text" id="Destino"/>
					</div>
					<div class="col-md-4">	
						<label for="nome">Data saida:</label><span style="color:red;">*</span><span id="msgdata_saida" class="esconde color">&nbsp Campo Obrigatorio</span>
						
						<div class="input-group date col-md-12 col-sm-12 col-xs-12" id="datepicker"data-provide="datepicker">
								<input type="text" id="data" class="form-control">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
					</div>
				</div>
			</form>
			<br/>
			<button  class="btn btn-default bot" onclick="salvaviagem()" type="button">Salvar</button>
		</div>
	</div>
	<br>
	<br>
	<div id="msg"></div>
	
</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/select2.min.js"></script>
<script src="Static/js/bootstrap-datepicker.min.js"></script>
<script src="Static/js/datepicker-pt-BR.js"></script>
<script>
    $('.js-example-basic-single').select2({ width: '100%' ,height: '35px'});
	jQuery(function () {
		$('#datepicker').datepicker({
			format: 'dd/mm/yyyy',
			language: 'pt-BR'
		});
	});

	function salvaviagem(){
		$("#msg").html("<img src='img/loading.gif' style='margin-left:40%' />");
		
		var date = $('#data').val();
		var destino = $('#Destino').val();
		var caminhao = $('#caminhao').val();
		var motorista = $('#motorista').val();
		var cliente = $('#cliente').val();
		var chave = false;
		if(date == ''){
			$('#msgdata_saida').show();
			chave = true;
		}else{
			$('#msgdata_saida').hide();
		}

		if(destino == ''){
			$('#msgdestino').show();
			chave = true;
		}else{
			$('#msgdestino').hide();
		}

		if(caminhao == ''){
			$('#msgcaminhao').show();
			chave = true;
		}else{
			$('#msgcaminhao').hide();
		}

		if(motorista == ''){
			$('#msgmotorista').show();
			chave = true;
		}else{
			$('#msgmotorista').hide();
		}

		if(cliente == ''){
			$('#msgcliente').show();
			chave = true;
		}else{
			$('#msgcliente').hide();
		}

		if(chave){
			$('#msg').html('');
			return false;
		}

		$.ajax({
			type:'POST',
			url:'salvaviagem.php',
			data:{date:date,destino:destino,caminhao:caminhao,motorista:motorista,cliente:cliente},
			success:function(html){
				$('#msg').html(html);
				
			},
			error:function(html){
				alert();
			}
		})
	}
               
</script>