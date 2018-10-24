<?php
try{
include_once "conexao.php";

$query = "select * from estoque";
$res = mysqli_query($con,$query);

$num_row = mysqli_num_rows($res);
$table = ''; 


if ($num_row > 0){
    $table .= "<div class='panel-body' style='with:100%'>
                <table id='tableestoque' class='table table-striped table-bordered dt-responsive nowrap'>
                <thead>
                    <tr> 
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th>QRCode</th>
                    </tr>
                </thead>
                <tbody>";
                for($i = 0 ; $num_row >$i; $i++ ){
                    $row = mysqli_fetch_array($res);
                    $desq = $row[1];
                    $val = $row[3];
                    $qtd = $row[2];
                    $qr = $row[5];
                    $table .= " <tr>
                                    <td>$desq</td>
                                    <td>$val</td>
                                    <td>$qtd</td>
                                    <td><i class='fas fa-qrcode' style='cursor:pointer' onclick='qrcode($qr)'></i></td>
                                </tr>";
                }
                $table .= "</tbody>
                </table>";
                echo $table;
                
}else{
    echo "  <div class='alert alert-warning'>
                <strong>Ops!</strong> Nehum registro encontrado.
            </div>";
}


}catch(\Exception $e){
        echo $e->getMessage();
}