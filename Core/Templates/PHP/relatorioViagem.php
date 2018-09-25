<!DOCTYPE html>
<html>
<head>
<title>Relatório Viagem</title>
	<link rel="stylesheet"  href="../Static/CSS/Estilo_relatorio_viagens.css">
	<link rel="stylesheet" href="../Static/CSS/estilomenu.css" type="text/css">
  	<link rel="stylesheet" href="../Static/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/CSS/jquery.dataTables.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/CSS/dataTables.bootstrap.css">
	<link href="../Static/bootstrap/dist/CSS/buttons.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../Static/bootstrap/dist/CSS/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/CSS/dataTables.foundation.min.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/CSS/dataTables.jqueryui.min.css">
	<link rel="stylesheet" href="../Static/bootstrap/dist/CSS/dataTables.semanticui.min.css">
	
	<link rel="stylesheet" href="../Static/bootstrap/dist/CSS/jquery.dataTables.min.css">

	
        
	<link href="../Static/bootstrap/dist/CSS/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="../Static/bootstrap/dist/CSS/responsive.bootstrap.min.css" rel="stylesheet">
	<link href="../Static/bootstrap/dist/CSS/scroller.bootstrap.min.css" rel="stylesheet">
	
	<link href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css" rel="stylesheet">
        

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
				<!--<img src="imagem/logo2.png"" alt="logo_nika"/>-->
			</div>
			<div class="row">
				<div class="intcont">
					<?php
						echo "<span class='bem' >Bem vindo! Vinicius";
						//$logado;
						echo "</span>";
					?>
				</div>
				<div class="menu-container">
					<ul class="menu clearfix">
						<li><a href="#">Nova viagem</a></li>
						<li><a href="#">Administração</a>
							<ul class="sub-menu clearfix">
								<li><a href="#">Cadastro</a>
								<li><a href="#">Relatorios</a>
									<ul class="sub-menu">
										<li><a href="relatorioViagem.php">Viagem</a></li>
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
							<tr>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
							</tr>
							<tr>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
								<th>Teste</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
		</div>

</body>

</html>
<script src="../Static/js/jquery.min.js"></script>
<script src="../Static/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
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
        
            
    </script>
