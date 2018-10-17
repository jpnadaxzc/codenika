<?php include_once 'conexao.php'; 
$Query_num_viagem = "select id from nika.viagem order by id desc limit 1";
$res_query_vaigem = mysqli_query($con,$Query_num_viagem);
$num_rowViagens = mysqli_num_rows($Query_numres_query_vaigem_viagem);

if ($num_row > 0){
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
			<div class="col-md-2 col-sm-2 col-xs-2" style="margin-top:15px; font-weight: bolder; margin-left:-15px;">
				Numero da viagem : <?php echo $numvaiagem; ?>
			</div>
			<div class="col-xs-12 col-md-3">
				<label for="fullname">Cliente:</label>
				<select class="select2_single js-example-basic-single form-control" name="cliente" id="cliente">
					<option></option>
					<?php 
								$select_cliente = 'select * from clientes order by nome';
								$select_cliente_query = mysqli_query($con,$select_cliente);
								$num_row_cliente = mysqli_num_rows($select_cliente_query);

								if ($num_row_cliente > 0){
								$row_cliente = mysqli_fetch_array($select_cliente_query);
									echo "<option value='{$row_cliente[0]}'>{$row_cliente[1]}</option>";
								};
							?>
					
				</select>
			</div>
		</div>
		<br/>
		<div class="row">
			<form  method="post">
				<div class="row">
					<div class=" col-md-4">	
						<label for="endereço">Motorista:</label></label><span style="color:red;">*</span><span id="msgcpf" class="esconde color">&nbsp Campo Obrigatorio</span>
						<select class="select2_single js-example-basic-single form-control" name="motorista" id="motorista">
							<option></option>
							<?php 
								$select_mot = 'select * from motorista order by nome';
								$select_mot_query = mysqli_query($con,$select_mot);
								$num_row = mysqli_num_rows($select_mot_query);

								if ($num_row > 0){
								$row = mysqli_fetch_array($select_mot_query);
									echo "<option value='{$row[0]}'>{$row[1]}</option>";
								};
							?>
						</select>
					</div>
					<div class=" col-md-4">	
						<label for="endereço">Caminhão:</label></label><span style="color:red;">*</span><span id="msgcpf" class="esconde color">&nbsp Campo Obrigatorio</span>
						<select class="select2_single js-example-basic-single form-control" name="caminhao" id="caminhao">
							<option></option>
							<?php 
								$select_veiculo = 'select * from veiculo order by placa';
								$select_veiculo_query = mysqli_query($con,$select_veiculo);
								$num_row_veiculos = mysqli_num_rows($select_mot_query);

								if ($num_row_veiculos > 0){
									$row_veiculo = mysqli_fetch_array($select_veiculo_query);
									echo "<option value='{$row_veiculo[0]}'>{$row_veiculo[1]}</option>";
								};
							?>
						</select>
						</select>
					</div>	
					<div class="col-md-4">	
						<label for="Destino">Destino:</label></label><span style="color:red;">*</span><span id="msgrg" class="esconde color"> &nbsp Campo Obrigatorio</span>
						<input class="form-control" type="text" id="Destino"/>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">	
						<label for="nome">Data saida:</label><span style="color:red;">*</span><span id="msgnome_cliente" class="esconde color">&nbsp Campo Obrigatorio</span>
						<div class="input-group date col-md-12 col-sm-12 col-xs-12" data-provide="datepicker">
							<input type="text" id="data"class="form-control">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
						</div>
					</div>
				</div>
			</form>
			<button  class="btn btn-default bot" onclick="salvaviagem()" type="button">Salvar</button>
		</div>
	</div>
	<div id="msg"></div>
	
</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/select2.min.js"></script>
<script src="Static/js/bootstrap-datepicker.min.js"></script>
<script>
    $('.js-example-basic-single').select2({ width: '100%' ,height: '35px'});
	$(function () {
		$('.datepicker').datepicker({
                 format: 'DD/MM/YYYY'
           });
	});

	function salvaviagem(){
		$("#msg").html("<img src='img/loading.gif' style='margin-left:40%' />");
		
		var date = $('#data').val();
		var destino = $('#Destino').val();
		var caminhao = $('#caminhao').val();
		var motorista = $('#motorista').val();
		var cliente = $('#cliente').val();
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