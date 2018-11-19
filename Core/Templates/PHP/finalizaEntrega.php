
<!DOCTYPE html>
<html>
<head>
<title>Finaliza Entrega</title>
<link rel="stylesheet" type="text/css" href="Static/CSS/cssPadrao.css">
<link rel="stylesheet" href="Static/CSS/estilo_novaViagem.css" type="text/css">
<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">

<link rel="stylesheet" href="Static/CSS/estilo_cadastro_cliente.css"  type="text/css">
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
		<div class="col-md-3">
			<label>Finalizado</label>
			<select class="js-example-basic-single form-control" id="final">
				<option value="">Todos</option>
				<option value="1">Finalizados</option>
				<option value="2">Não finalizados</option>
			</select>
		</div>
		<button  class="btn btn-default bot" onclick="busca()" type="button" style="margin-left:15px;">Buscar</button>
	</div><br>
    <div class="row">
		<div id="table2"></div>
	</div>
</div>
        


</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/bootstrap.min.js"></script>
<script src="Static/js/jquery.dataTables.min.js"></script>
<script src="Static/js/dataTables.bootstrap.min.js"></script>
<script src="Static/js/dataTables.buttons.min.js"></script>
<script src="Static/js/dataTables.fixedHeader.min.js"></script>
<script src="Static/js/dataTables.keyTable.min.js"></script>
<script src="Static/js/dataTables.responsive.min.js"></script>
<script src="Static/js/responsive.bootstrap.js"></script>
<script src="Static/js/dataTables.scroller.min.js"></script>
<script src="Static/js/jszip.js"></script>

<script src="Static/js/buttons.bootstrap.min.js"></script>
<script src="Static/js/buttons.flash.min.js"></script>
<script src="Static/js/buttons.html5.min.js"></script>
<script src="Static/js/buttons.print.min.js"></script>
<script>
$("#final").change(function() {
	$('#table2').html("");
})
	function busca(){
		var final = $("#final").val();
		$.ajax({
			type:"POST",
			url:"pesquisaviagem.php",
			data:{final:final},
			success:function(html){
				$('#table2').html(html);
				$(document).ready(function() {
					$('#table').dataTable({
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

			},
			error:function(){

			}

		})
	}

        $(document).ready(function() {
            $('#table').dataTable({
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

		function finalizar(id,motorista,motoristaid,placa,destino){
			window.location.href = "finalViagem.php?id="+id+"&motorista="+motorista+"&motoristaid="+motoristaid+"&placa="+placa+"&destino="+destino;
		}
</script>