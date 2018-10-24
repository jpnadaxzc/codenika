<?php
try{
    include_once "conexao.php";
    $valor = $_POST['valor'];
    $qtd = $_POST['qtd'];
    $desc = $_POST['descricao'];
    $forn = $_POST['forn'];
    $dia = date('Y-m-d');
    $query = "insert into nika.estoque (valor,qtd,descricao,fornecedor,datacad) values ($valor,$qtd,'$desc',$forn,'$dia')";
   
    $res = mysqli_query($con,$query);

    if($res){
        print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Produto cadastrado com sucesso.</div>');
    }else{
        
        print_r('<div class="alert alert-danger"><strong>ERRO!</strong> Inesperado ao cadastrar produto</div>');
    }

}catch(\Exepion $e){

        echo $e->getMassage();

}
