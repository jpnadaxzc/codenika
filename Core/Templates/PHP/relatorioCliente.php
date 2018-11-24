<?php include "conexao.php" ?> 
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Relatorio Cliente </title>
		<meta name="description" content="Relatorio Cliente">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
		<link rel="stylesheet" href="Static/CSS/estilo_novaViagem.css" type="text/css">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
		<link href="Static/bootstrap/dist/css/select2.min.css" rel="stylesheet">
		<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="Static/CSS/cssPadrao.css" type="text/css">

	</head>
	<body>
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
		<div class="x_painel">	
			<div class="row">
				<div class="col-md-4">
					<label>Cliente</label>
					<select id="clinte" class="select2_single js-example-basic-single form-control">
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
				<button  class="btn btn-default bot" onclick="busca()" type="button">Buscar</button>
			</div>
		</div>
		<div id="res"></div>
		
	</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/select2.min.js"></script>
<script>
	function busca(){
		var id = $("#clinte").val();
		$.ajax({
			type:"POST",
			url:"buscaRelCliente.php",
			data:{id:id},
			success:function(html){
				//console.log(data);
				$("#res").html(html)
			},
			error:function(){

			}
		})
		$("#esconde").show();
	}
</script>