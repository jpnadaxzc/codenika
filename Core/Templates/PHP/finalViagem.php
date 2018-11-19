<?php include "conexao.php"; ?>
<!DOCTYPE html>
<html>
	<head>
	<title>Finaliza Entrega</title>
	<link rel="stylesheet" type="text/css" href="Static/CSS/cssPadrao.css">
	<link rel="stylesheet" href="Static/CSS/estilo_novaViagem.css" type="text/css">
	<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">

	<link rel="stylesheet" href="Static/CSS/estilo_cadastro_cliente.css"  type="text/css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
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
				<div class="col-md-1">Nº OS: <?php echo $_GET['id']; ?></div>
				<div class="col-md-3">Motorista: <?php echo urldecode($_GET['motorista']); ?></div>
				<div class="col-md-1">Placa: <?php echo urldecode($_GET['placa']); ?></div>
				<div class="col-md-4">Destino: <?php echo urldecode($_GET['destino']); ?></div>

			</div><br>
			<div class="row">
				<div class="col-md-4">
					<label>KM Rodados</label>
					<input class="form-control" type="text" id="km"/>
				</div>
				<div class="col-md-4">
					<label>Diesel usado (litros)</label>
					<input class="form-control" type="text" id="diesel"/>
				</div>
				<div class="col-md-4">
					<label>Valor pago por litro</label>
					<input class="form-control" type="text" id="valor"/>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4">
					<label>Data pagamento Nika</label>
					<input class="form-control" type="text" id="pagame"/>
				</div>
				<div class="col-md-4">
					<label>Data</label>
					<div class="input-group date col-md-12 col-sm-12 col-xs-12" id="datepicker"data-provide="datepicker">
						<input type="text" id="date" class="form-control">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<label>Romaneio</label>
					<input class="form-control" type="text" id="romaneio"/>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4">
					<label>CET Nika</label>
					<input class="form-control" type="text" id="cetn"/>
				</div>
				<div class="col-md-4">
					<label>CET Cliente</label>
					<input class="form-control" type="text" id="cetc"/>
				</div>
				<div class="col-md-4">
					<label>Frete C/ Pedagio</label>
					<input class="form-control" type="text" id="fretec"/>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4">
					<label>Frete S/ Pedagio</label>
					<input class="form-control" type="text" id="fretes"/>
				</div><br>
				<div class="col-md-4">
					<label>Comissao em "%"</label>
					<input class="form-control" type="text" id="comissao"/>
				</div>
				<div class="col-md-1">
					<label>Pago</label><br>
					<label class="radio-inline"><input type="radio" onclick="mostra()" name="tacesso" id="pgsim" >Sim</label>
					<label class="radio-inline"><input type="radio" onclick="esconde()" name="tacesso" id="pgnao" checked>Não</label>
				</div>
				<div class="col-md-3" id="mostra" style='display:none'>
					<label>Data Pagamento</label>
					<div class="input-group date col-md-12 col-sm-12 col-xs-12" id="datepicker2"data-provide="datepicker">
						<input type="text" id="datap" class="form-control">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div>
			</div><br>
			<button  class="btn btn-default bot" onclick="salva()" type="button" style="margin-left:15px;">Salvar</button>
			<button  class="btn btn-default bot3" onclick="voltar()" type="button" style="margin-left:15px;">voltar</button>
		</div><br>
		<div id="msg"></div>
		
	</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/jquery.mask.min.js"></script>
<script src="Static/js/bootstrap-datepicker.min.js"></script>
<script src="Static/js/datepicker-pt-BR.js"></script>
<script>
	
	jQuery(function () {
		
		$('#datepicker').datepicker({
			format: 'dd/mm/yyyy',
			language: 'pt-BR',
		});

		$('#datepicker2').datepicker({
			format: 'dd/mm/yyyy',
			language: 'pt-BR',
		});
	});
	function mostra(){
		$("#mostra").show();
	}

	function esconde(){
		$("#mostra").hide();
		$("#datap").val('');
	}

	function salva(){

		var km = $('#km').val();
		var diesel = $('#diesel').val();
		var valor = $('#valor').val();
		var dtpagamento = $('#pagame').val();
		var date = $('#date').val();
		var romaneio = $('#romaneio').val();
		var cetn = $('#cetn').val();
		var cetc = $('#cetc').val();
		var fretes = $('#fretes').val();
		var fretec = $('#fretec').val();
		var comissao = $('#comissao').val();
		var id = <?php echo $_GET['id']; ?>;
		var idmotorista = <?php echo $_GET['motoristaid']; ?>;
		var percurso = '<?php echo $_GET['destino']; ?>';
		var placa = '<?php echo $_GET['placa']; ?>';
		if($("#pgsim").prop("checked")){
			var pago = 1;
		}else{
			var pago = 0;
		}
		
		var pgdate = $('#datap').val();
		$.ajax({
			type:"POST",
			url:"salvaFinalizaViagem.php",
			data:{km:km,diesel:diesel,valor:valor,dtpagamento:dtpagamento,date:date,romaneio:romaneio,cetn:cetn,cetc:cetc,fretes:fretes,fretec:fretec,comissao:comissao,pago:pago,pgdate:pgdate,id:id,idmotorista:idmotorista,percurso:percurso,placa:placa},
			success:function(html){
				$('#msg').html(html);
			},
			error:function (){

			}	
		});
	}

	function voltar(){
		window.location.href = "finalizaEntrega.php";
	}
</script>