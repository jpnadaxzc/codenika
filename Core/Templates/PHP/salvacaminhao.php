<?php
include "conexao.php";

$marca =  strtoupper($_POST['marca']);
$modelo =  strtoupper($_POST['modelo']);
$cor =  strtoupper($_POST['cor']);
$chassis =  strtoupper($_POST['chass']);
$placa =  strtoupper($_POST['placa']);
$chassis = str_replace(" ","",$chassis);

$query = "insert into nika.veiculo (marca,modelo,cor,chassis,placa) values('$marca','$modelo','$cor','$chassis','$placa')";
$res = mysqli_query($con,$query);

if($res){
    print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Caminhão cadastrado com sucesso.</div>');
}else{
    
    print_r('<div class="alert alert-danger"><strong>ERRO!</strong> Inesperado ao cadastrar caminhão</div>');
}