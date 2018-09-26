<?php
try{
 ini_set('display_errors',1);
 ini_set('display_startup_erros',1);
 error_reporting(E_ALL);
 include_once 'conexao.php';

 $id_motorista = $_POST['id_mot'];


$select = "select * from relviagem where id_motorista = $id_motorista ";

$select_query = mysqli_query($con,$select);

$num_row = mysqli_num_rows($select_query);



if ($num_row > 0){
        echo "
        <div class='panel-body' style='with:100%'>
                <table id='tableOS' class='table table-striped table-bordered dt-responsive nowrap'>
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
                <tbody>";
                for($i = 0 ; $num_row >$i; $i++ ){
                        $row = mysqli_fetch_array($select_query);
                        $data_abastecimento = date('d/m/Y',strtotime($row[1]));
                        $data = date('d/m/Y',strtotime($row[7]));	

                        echo "<tr>
                                        <td>
                                        $row[0]
                                        </td>
                                        <td>
                                        $data_abastecimento
                                        </td>
                                        <td>
                                        $row[2]
                                        </td>
                                        <td>
                                        $row[3]
                                        </td>
                                        <td>
                                        R$$row[4]
                                        </td>
                                        <td>
                                        R$$row[5]
                                        </td>
                                        <td>
                                        $row[6]
                                        </td>
                                        <td>
                                        $data
                                        </td>
                                        <td>
                                        $row[8]
                                        </td>
                                        <td>
                                        $row[9]
                                        </td>
                                        <td>
                                        $row[10]
                                        </td>
                                        <td>
                                        R$$row[11]
                                        </td>
                                        <td>
                                        R$$row[12]
                                        </td>
                                        <td>
                                        R$$row[13]
                                        </td>
                                        <td>
                                        $row[14]
                                        </td>
                                        <td>
                                        $row[15]
                                        </td>
                                        <td>
                                        $row[16]
                                        </td>
                                </tr> ";
                        }
                        echo "	  
                        </tbody>
                </table>
        </div>";

}


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
<script src="Static/js/pdfmake.min.js"></script>
<script src="Static/js/vfs_fonts.js"></script>
<script src="Static/js/buttons.bootstrap.min.js"></script>
<script src="Static/js/buttons.flash.min.js"></script>
<script src="Static/js/buttons.html5.min.js"></script>
<script src="Static/js/buttons.print.min.js"></script>
        

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
<?php

}catch(\Exception $e){
        return $e->getMessage();
}