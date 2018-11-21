<?php
include "conexao.php";
$nome = $_POST["nome"];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$dat = str_replace("/","-",$_POST["dat"]);
$dat = date("Y-m-d",strtotime($dat));
$cep =  $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$comp = $_POST['comp'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$reg = $_POST['reg'];
$dtemis = str_replace("/","-",$_POST["dtemis"]);
$dtemis = date("Y-m-d",strtotime($dtemis));
$cat1 = $_POST['categoria1'];
$cat2 = $_POST['categoria2'];

if(!empty($cat2 )){
    $cat = $cat1."/".$cat2;
}else{
    $cat = $cat1;
}

$query = "insert into nika.motorista (nome,cpf,rg,data_nascimento,cep,rua,numero,complemento,bairro,cidade,uf,nregistro,dataemissao,categoria) 
                              values ('$nome','$cpf','$rg','$dat','$cep','$rua','$numero','$comp','$bairro','$cidade','$uf','$reg','$dtemis','$cat');";
$res = mysqli_query($con,$query);

if($res){
    print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Usuario cadastrado com sucesso.</div>');
}else{
    
    print_r('<div class="alert alert-danger"><strong>ERRO!</strong> Inesperado ao cadastrar usuario</div>');
}