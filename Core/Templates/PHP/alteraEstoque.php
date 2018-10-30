<?php
include_once "conexao.php";
$qtd = $_POST['qtd'];
$qr = $_POST['qr'];
$queryid = "select id from nika.estoque where qrcode = '$qr' ";
$resid = mysqli_query($con,$queryid);
$rowid = mysqli_fetch_array($resid);
$query = "update nika.estoque set qtd = $qtd where id = $rowid[0] ";
$res = mysqli_query($con,$query);

if($res){
    print_r('<div class="alert alert-success" style="font-size:60px;"><strong>Sucesso!</strong>Quantidade com sucesso.</div>');
}else{
    
    print_r('<div class="alert alert-danger" style="font-size:60px;"><strong>ERRO!</strong> Inesperado ao cadastrar produto</div>');
}