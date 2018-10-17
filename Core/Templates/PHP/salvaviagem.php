<?php
try{
    include_once 'conexao.php';
    $date = $_POST['date'];
    $destino = $_POST['destino'];
    $caminhao = $_POST['caminhao'];
    $motorista = $_POST['motorista'];
    $cliente = $_POST['cliente'];
    $date = date('Y-m-d',strtotime($date));
    
    $query = "insert into nika.viagem (cliente,motorista,caminhao,destino,data_saida) values ($cliente,$motorista,$caminhao,'$destino','$date')";
    $res_query = mysqli_query($con,$query);
  
    if($res_query){
        print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Viagem cadastrado com sucesso.</div>');
    }else{
        
        print_r("<div class='alert alert-danger'><strong>ERRO!</strong>$res_query</div>");
    }

}catch(\Exception $e){
    print_r($e->getMessage());
    return $e->getMessage();

}