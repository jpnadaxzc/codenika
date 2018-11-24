<?php
    include "conexao.php"; 
    $table = "";
    $final = "";
    $final = $_POST['final'];
    $query = " SELECT viagem.id,clientes.nome as cliente ,motorista.nome as motorista,motorista.id_motorista as motoristaid,placa,destino,data_saida,viagem.finalizada FROM nika.viagem
                left join nika.clientes on clientes.id = viagem.cliente
                left join nika.motorista on motorista.id_motorista = viagem.motorista
                left join nika.veiculo on veiculo.id = viagem.caminhao
                where 1=1 ";
    if($final == 1){
        $query .= " and finalizada = 1 ";
    }
    if($final == 2){
        $query .= " and finalizada = 0 or finalizada = '' ";
    }
                                    
    $resqury = mysqli_query($con,$query);
    $numRow = mysqli_num_rows($resqury); 
    $table = "<table  id='table' class='table table-striped table-bordered dt-responsive nowrap' > 
                <thead>
                    <tr>
                        <th>Nº OS</th>
                        <th>Cliente</th>
                        <th>Motorista</th>
                        <th>Caminhão</th>
                        <th>Destino</th>
                        <th>Data Saida</th>
                        <th>Finalizar</th>
                    </tr>
                </thead>
                <tbody>";
    if ($numRow > 0){
        for($i=0; $numRow > $i; $i ++){
            $linha = mysqli_fetch_array($resqury);
            $data_saida = date("d/m/Y",strtotime($linha['data_saida']));
            $placaUrl = urlencode($linha['placa']);
            $destinoUrl = urlencode($linha['destino']);
            $motoristaUrl = urlencode($linha['motorista']);
            $table .="<tr>
                        <td style='text-align:center;'>{$linha['id']}</td>
                        <td style='text-align:center;'>{$linha['cliente']}</td>
                        <td style='text-align:center;'>{$linha['motorista']}</td>
                        <td style='text-align:center;'>{$linha['placa']}</td>
                        <td style='text-align:center;'>{$linha['destino']}</td>
                        <td style='text-align:center;'>{$data_saida}</td>";
                        if($linha['finalizada'] == 0){
                            $table .= "<td style='text-align:center;'><button type='button' name='finalizar'  class='btn btn-default bot' onclick='finalizar({$linha['id']},\"$motoristaUrl\",{$linha['motoristaid']},\"$placaUrl\",\"$destinoUrl\")' style='border-radius:5px;margin-top:0px;'>Finalizar</button></td>";
                        }else{
                            $table .= "<td style='text-align:center;'>Finalizado</dt>"; 
                        }
                    $table .="</tr>";
        }
        
    }
    $table .="</tbody>
            </table>";
    echo $table;
?>