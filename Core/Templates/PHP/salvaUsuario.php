<?php
try{
include_once "conexao.php";
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$data_nascimento = str_replace('/',"-",$data_nascimento );
$data_nascimento = date('Y-m-d',strtotime($data_nascimento ));
$sexo = $_POST['sexo'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$end = $_POST['end'];
if(empty($_POST['numero'])){
    $numero ="";
}else{
    $numero = $_POST['numero'];
}

$comple = $_POST['comple'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$login = $_POST['login'];
$senha = $_POST['senha'];
if(!empty($senha )){
    $acesso = 1;
}else{
    $acesso = 0;
}
$query = "insert into nika.usuarios (
                                    nome
                                    ,data_nasc
                                    ,sexo
                                    ,rg
                                    ,cpf
                                    ,email
                                    ,cep
                                    ,logradouro
                                    ,numero
                                    ,complemento
                                    ,bairro
                                    ,cidade
                                    ,estado
                                    ,acesso
                                    ,login
                                    ,senha
                                    ,ativo
                                    ) values (
                                    '$nome'
                                    ,'$data_nascimento'
                                    ,'$sexo'
                                    ,'$rg'
                                    ,'$cpf' 
                                    ,'$email'
                                    ,'$cep'
                                    ,'$end' 
                                    ,'$numero'
                                    ,'$comple'
                                    ,'$bairro'
                                    ,'$cidade'
                                    ,'$estado'
                                    ,$acesso
                                    ,'$login'
                                    ,'$senha' 
                                    ,1
                                    )
                                    ";
                                    

$res = mysqli_query($con,$query);

if($res){
    print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Usuario cadastrado com sucesso.</div>');
}else{
    
    print_r('<div class="alert alert-danger"><strong>ERRO!</strong> Inesperado ao cadastrar usuario</div>');
}
}catch(\Exepion $e){

    echo $e->getMassage();

}