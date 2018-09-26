<?php
	
	include_once 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Relatório Viagem</title>
	<link rel="stylesheet"  href="../Static/CSS/Estilo_relatorio_viagens.css">
	<link rel="stylesheet" href="../Static/CSS/estilomenu.css" type="text/css">
  	<link rel="stylesheet" href="../Static/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/jquery.dataTables.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/buttons.bootstrap.min.css" >
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/dataTables.foundation.min.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/dataTables.jqueryui.min.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/dataTables.semanticui.min.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/responsive.bootstrap.min.css" >
	<link rel="stylesheet" href="../Static/bootstrap/dist/css/scroller.bootstrap.min.css" >
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
			<div>
				<spam class="legenda" style="text-decoration: none;font-size: 20px;color: black">Motorista:</spam>
			</div>
			<div>
				<select class="select" id="motorista">
					<option value="" class="option">selecione o motorista</option>
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
				
				<div class="botao">
						<input type="button" name="buscar" onclick="javascript: validabusca()" value="Buscar">
				</div>
			</div>
			<div>
				<span style="color:red; margin-top:10px; margin-left:10px; display:none" id="alerta">Selecione o motorista!!</span>
			</div>
		</div>
		
		<!--Relatório viagem-->
		<div class="x_panel">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">		
					<table id="tableOS" class="table table-striped table-bordered dt-responsive nowrap">
						<thead>
							<tr> 
								<th>Ordem</th>
								<th>Data Abastecimento</th>
								<th>Km Rodado</th>
								<th>Litros</th>
								<th>Valor por Litros</th>
								<th>Valor total</th>
								<th>Valor total</th>
								<th>Data Pgto Nika</th>
								<th>Data</th>
								<th>Romaneio</th>
								<th>CTE emitido nika</th>
								<th>Frete c/ pedágio</th>
								<th>Frete s/ pedágio</th>
								<th>Comissão 8%</th>
								<th>Pgtos efetuados</th>
								<th>Data pgtos</th>
								<th>Percuso</th>
							</tr>
						</thead>
						<tbody>
							<tr id="retajax">

							</tr>
						</tbody>
					</table>
				</div>
			</div>	
		</div>
		<div id="gif"></div>

</body>

</html>
<script src="../Static/js/jquery.min.js"></script>
<script src="../Static/js/jquery.dataTables.min.js"></script>
<script src="../Static/js/dataTables.bootstrap.min.js"></script>
<script src="../Static/js/dataTables.buttons.min.js"></script>
<script src="../Static/js/dataTables.fixedHeader.min.js"></script>
<script src="../Static/js/dataTables.keyTable.min.js"></script>
<script src="../Static/js/dataTables.responsive.min.js"></script>
<script src="../Static/js/responsive.bootstrap.js"></script>
<script src="../Static/js/dataTables.scroller.min.js"></script>
<script src="../Static/js/jszip.js"></script>
<script src="../Static/js/pdfmake.min.js"></script>
<script src="../Static/js/vfs_fonts.js"></script>
<script src="../Static/js/buttons.bootstrap.min.js"></script>
<script src="../Static/js/buttons.flash.min.js"></script>
<script src="../Static/js/buttons.html5.min.js"></script>
<script src="../Static/js/buttons.print.min.js"></script>
        

<script>

        $(document).ready(function() {
            $('#tableOS').dataTable({
                dom: '<Bf<t>lip>',
                 buttons: [
                     {
                        extend:'excelHtml5'
                         
                     }
                 ],
                "language": {
                    "lengthMenu": "Exibição _MENU_ Registros por página",
                    "zeroRecords": "Nothing found - sorry",
                    "info": "Mostrando a página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "sSearch": "Pesquisar: ",
                    "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                    },
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
            });
        }); 

var id_mot
function busca(){
id_mot = document.getElementById('motorista').value;

//$("#retajax").html("<img src='../img/loading.gif' width= '5%' class='gif' >")	

$.ajax({
	type: "POST",
	url: "pesquisaformulario.php",
	data:{id_mot:id_mot},
	success: function(html){
		
		$("#retajax").html(html)
	},
	error:function(request, status, erro){
		console.log(html);

	}
	
})
}

function validabusca(){
id_mot = document.getElementById('motorista').value;
if(id_mot == ''){
	document.getElementById('motorista').focus();
	document.getElementById('alerta').style.display = "block";
}else{
	document.getElementById('alerta').style.display = "none";
	busca();
}
}



</script>