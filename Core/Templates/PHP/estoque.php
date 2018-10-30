<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


include("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>NIKA -transpostes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
	<link rel="stylesheet" href="Static/CSS/estilo_novaViagem.css" type="text/css">
	<link rel="stylesheet" href="Static/CSS/estoque.css" type="text/css">
  	<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
  	<link href="Static/bootstrap/dist/css/select2.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="Static/bootstrap/dist/css/jquery.dataTables.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/buttons.bootstrap.min.css" >
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.foundation.min.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.jqueryui.min.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.semanticui.min.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/scroller.bootstrap.min.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	
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
		
	</div>
	<button  class="btn btn-default bot" type="button" style="margin-left:15px;" data-toggle="modal" data-target="#myModal">Cadastrar</button>
	<div id="table"></div>
	


<!-- Modal -->
<div id="myModal" class="modal fade" data-backdrop="static" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="table()">&times;</button>
        <h4 class="modal-title">Cadastro de produtos</h4>
      </div>
      <div class="modal-body">
		<div class="x_painel">
			<div class="row">
				<div class="col-md-12">
					<label>Decrição:</label><br>
					<input type="text" clas="form-control" id="desc" >
				</div>
				<div class="col-md-6">
					<label>Fornecedor:</label><br>
					<select class="select2_single js-example-basic-single form-control" name="forn" id="forn">
					<option></option>
					<option value='1'>teste fornecedor</option>
					<?php 
						// $select_mot = 'select * from clientes';
						// $select_mot_query = mysqli_query($con,$select_mot);
						// $num_row = mysqli_num_rows($select_mot_query);

						// if ($num_row > 0){
						// $row = mysqli_fetch_array($select_mot_query);
						// 	echo "<option value='{$row[0]}'>{$row[1]}</option>";
						// };
					?>
				</select>
					
				</div>
				<div class="col-md-3">
					<label>Quantidade:</label><br>
					<input type="text" clas="form-control somente-numero" id="qtd">
				</div>
				<div class="col-md-3">
					<label>Valor:</label><br>
					<input type="text" clas="form-control" id="valor">
				</div>
			</div>	
		</div>
		<button  class="btn btn-default bot" onclick="cad()" type="button" style="margin-left:15px;">Salvar</button>
      </div>
	  <div id="msg"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="table()">Fecha</button>
      </div>
    </div>

  </div>
</div>
<div id="modal2"></div>

  
</div>
</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/bootstrap.min.js"></script>
<script src="Static/js/jquery.maskMoney.min.js" type="text/javascript"></script>
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
 $(document).ready(function() {
            
        }); 

  	$('#qtd').keyup(function() {
  		$(this).val(this.value.replace(/\D/g, ''));
	});

	function cad(){
		var valor = $('#valor').val();
		valor = valor.replace("R$:","");
		valor = valor.replace(",",".");
		$.ajax({
			type:"POST",
			url:"salvaProduto.php",
			data:{valor:valor,descricao:$('#desc').val(),qtd:$('#qtd').val(),forn:$('#forn').val()},
			success:function(html){
				$('#msg').html(html);
			},
			error:function(){
				
			}
		})
	}

	function table(){
		$('#desc').val('');
		$('#qtd').val('');
		$('#forn').val('');
		$('#msg').html('');
		$('#valor').val('');
		$.ajax({
			type:"POST",
			url:"pesquisaestoque.php",
			data:{},
			success:function(html){
				$("#table").html(html);
				$('#tableestoque').dataTable({
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
			},
			error:function(){
				$("#table").html("<div class='alert alert-danger'><strong>ERRO!</strong> .</div>");
			}
		})
	}
	table();
	$(document).ready(function()
{
     $("#valor").maskMoney({
         prefix: "R$:",
         decimal: ",",
         thousands: "."
     });
});

function qrcode(fileNema){
	
	$.ajax({
			type:"POST",
			url:"modalQrcode.php",
			data:{fileNema:fileNema},
			success:function(html){
				$("#modal2").html(html);
				
				$("#modalqrode").modal('show');
				
				
			},
			error:function(){
				$("#modal2").html("<div class='alert alert-danger'><strong>ERRO!</strong> .</div>");
			}
		})
}
</script>