<?php
try{

    include_once 'conexao.php';
    $cpf = $_POST['cpf'];
    $query = "select id from clientes where cpf = '$cpf' " ;
    $res_query = mysqli_query($con,$query);
    $num_row = mysqli_num_rows($res_query);
    
    if($num_row > 0){
        print_r("<div class='alert alert-warning'><strong>Warning!</strong> Cliente já cadastrado.</div>");
        return;
    }
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $endereco = $_POST['end'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $bloco = $_POST['bloco'];
    $ap = $_POST['ap'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $telelfone = $_POST['tel'];
    $telefonecomercial = $_POST['telcom'];
    $celular = $_POST['cel'];
    $site = $_POST['site'];
    $obs = $_POST['obs'];
    $query2 = "insert into clientes 
                (
                    nome
                    ,rg
                    ,cpf
                    ,endereco
                    ,numero
                    ,bairro
                    ,cep
                    ,bloco
                    ,ap
                    ,estado
                    ,email
                    ,telefone
                    ,telefonecomercial
                    ,celular
                    ,site
                    ,obs
                ) values
                (
                    '$nome'
                    ,'$rg'
                    ,'$cpf'
                    ,'$endereco'
                    ,$numero
                    ,'$bairro'
                    ,'$cep'
                    ,'$bloco'
                    ,'$ap'
                    ,'$estado'
                    ,'$email'
                    ,'$telelfone'
                    ,'$telefonecomercial'
                    ,'$celular'
                    ,'$site'
                    ,'$obs'
                )
                    ";
                    
    $res_query = mysqli_query($con,$query2);

    if($res_query){
        print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Cliente cadastrado com sucesso.</div>');
    }else{
        
        print_r('<div class="alert alert-danger"><strong>ERRO!</strong>Inesperado ao cadastrar cliente</div>');
    }

}catch(\Exception $e){
    print_r($e->getMessage());
    return $e->getMessage();

}