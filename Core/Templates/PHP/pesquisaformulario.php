<?php
try{
	ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	include_once 'conexao.php';
	$id_motorista = "";
	$id_motorista = $_POST['id_mot'];
	$placaP = "";
	$placaP = $_POST['placa'];
	$periodo = "";
	$periodo = $_POST['periodo'];
	$cliente = "";
	$cliente = $_POST['cliente'];
	$totkmrodado = 0;
	$totlitros = 0;
	$totvalorlitros = 0;
	$totfcp = 0;
	$totfsp = 0;
	$totcomissao = 0;
	$select = "select * from nika.relviagem
	inner join nika.motorista on motorista.id_motorista = relviagem.id_motorista 
	inner join  nika.viagem on viagem.id = relviagem.os where 1=1  ";
	if(!empty($id_motorista)){
			$select .= " and relviagem.id_motorista = $id_motorista ";
	}
	if(!empty($placaP)){
			$select .= " and relviagem.placa = '$placaP' ";
	}
	if(!empty($periodo)){
		$periodo = explode(" - ",$periodo);
		$periodoini = str_replace("/","-",$periodo[0]);
		$periodoini = date("Y-m-d",strtotime($periodoini));
		$periodofim = str_replace("/","-",$periodo[1]);
		$periodofim = date("Y-m-d",strtotime($periodofim));
		
		$select .= " and data between '$periodoini' and '$periodofim' ";
	}
	if(!empty($cliente)){
		$select .= " and viagem.cliente = '$cliente' ";
	}
	$select_query = mysqli_query($con,$select);
	
	$num_row = mysqli_num_rows($select_query);


	$table = "
        <div class='panel-body' style='with:100%'>
			<table id='tableOS' class='table table-striped table-bordered  nowrap'>
			<thead>
				<tr> 
					<th>Ordem</th>
					
					<th>Km Rodado</th>
					<th>Litros</th>
					<th>Valor por Litros</th>
					<th>Valor total</th>
					<th>Data Pgto Nika</th>
					<th>Data</th>
					<th>Romaneio</th>
					<th>CTE emitido nika</th>
					<th>CTE emitido cliente</th>
					<th>Frete c/ pedágio</th>
					<th>Frete s/ pedágio</th>
					<th>Comissão</th>
					<th>Pgtos efetuados</th>
					<th>Data pgtos</th>
					<th>Percurso</th>
					<th>Placa</th>
					<th>Motorista</th>
				</tr>
			</thead>
			<tbody>";
        if ($num_row > 0){
        
			for($i = 0 ; $num_row >$i; $i++ ){
				$row = mysqli_fetch_array($select_query);
				
				$data_abastecimento = date('d/m/Y',strtotime($row['data_abastecimento']));
				$data = date('d/m/Y',strtotime($row['data']));	
				$valorLitro = $row['valor_litro'];
				$valortotal = $row['valor_total'];
				$fretec = $row['frete_c_pedagio'];
				$fretes = $row['frete_s_pedagio'];
				$comissao = $row['comissao'];
				if(!empty($row['data_pagto'])){
					$datapgto = date("d/m/Y",strtotime($row['data_pagto']));
				}else{
					$datapgto = "";
				}
				$totkmrodado = $totkmrodado + $row['km_rodado'];
				$totlitros = $totlitros + $row['litros'];
				$totvalorlitros = number_format($totvalorlitros + $valortotal, 2, '.', '');
				$totfcp = number_format($totfcp + $fretec, 2, '.', '');
				$totfsp = number_format($totfsp + $fretes, 2, '.', '');   
				$totcomissao = number_format( $totcomissao + $row['comissao'], 2, '.', '');
				$table .= "<tr>
						<td style='text-align:center'>
						{$row['id']}
						</td>
						
						<td style='text-align:center'>
						{$row['km_rodado']}
						</td>
						<td style='text-align:center'>
						{$row['litros']} L
						</td>
						<td style='text-align:center'>
						R$$valorLitro
						</td>
						<td style='text-align:center'>
						R$$valortotal 
						</td>
						<td style='text-align:center'>
						{$row['dt_pag_nika']}
						</td>
						<td style='text-align:center'>
						$data
						</td>
						<td style='text-align:center'>
						{$row['romaneio']}
						</td>
						<td style='text-align:center'>
						{$row['cte_emitido_nika']}
						</td>
						<td style='text-align:center'>
						{$row['cte_emitido_cliente']}
						</td>
						<td style='text-align:center'>
						R$$fretec
						</td>
						<td style='text-align:center'>
						R$$fretes 
						</td>
						<td style='text-align:center'>
						R$$comissao 
						</td>
						<td style='text-align:center'>
						";
						if($row['pgto_efetuado'] == 1){
							$table .= "SIM"; 
						}else{
							$table .= "NÃO";
						}
						$table .= "
						</td>
						<td style='text-align:center'>
						$datapgto
						</td>
						<td style='text-align:center'>
						{$row['percurso']}
						</td>
						<td style='text-align:center'>
						{$row['placa']}
						</td>
						<td style='text-align:center'>
						{$row['nome']}
						</td>
				</tr> ";
			}
                        
			$table .= "	
						<tr>
							<td>TOTAL:</td>
							
							<td style='text-align:center'>$totkmrodado </td>
							<td style='text-align:center'>$totlitros</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>R$$totvalorlitros</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>R$$totfcp</td>
							<td style='text-align:center'>R$$totfsp</td>
							<td style='text-align:center'>R$$totcomissao</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>--</td>
							<td style='text-align:center'>--</td>
							
						</tr>  
                        </tbody>
                </table>
        </div>";
	}

	echo $table;
?>
<script src="Static/js/jquery.min.js"></script>
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
            $('#tableOS').dataTable({
				scrollX: true,
                dom: '<Bf<t>lip>',
                 buttons: [
                     {
                        extend:'excelHtml5'
                         
                     }
                 ],
                "language": {
                    "lengthMenu": "Exibição _MENU_ Registros por página",
                    "zeroRecords": "Não á resultados",
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
<?php

}catch(\Exception $e){
        return $e->getMessage();
}