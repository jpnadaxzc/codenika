<?php
include "conexao.php";
$marca = $_POST["novamarca"];
$marca = strtoupper($marca);
$query2 = "select id from nika.marcaCaminhao where marca = '$marca'";
$res2 = mysqli_query($con,$query2);

if(mysqli_num_rows($res2) > 0){
    print_r('<div class="alert alert-warning"><strong>OPS!</strong>Marca já cadastrada.</div>');
    return;
}

$query = "insert into nika.marcaCaminhao (marca) values ('$marca') ";
$res = mysqli_query($con,$query);

if($res){
    print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Marca cadastrada com sucesso.</div>');
}else{
    
    print_r('<div class="alert alert-danger"><strong>ERRO!</strong> Inesperado ao cadastrar marca</div>');
}