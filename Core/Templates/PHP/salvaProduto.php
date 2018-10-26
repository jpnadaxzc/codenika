<?php
try{
    include('phpqrcode/qrlib.php'); 
    include_once "conexao.php";
    $valor = $_POST['valor'];
    $qtd = $_POST['qtd'];
    $desc = $_POST['descricao'];
    $forn = $_POST['forn'];
    $dia = date('Y-m-d');
    $horaEdata = date('Ymdhis');
    $query = "insert into nika.estoque (valor,qtd,descricao,fornecedor,datacad,qrcode) values ($valor,$qtd,'$desc',$forn,'$dia','$desc$horaEdata.png')";
   
    $res = mysqli_query($con,$query);
    if($produção){
        $svgCode =QRcode::png("http://52.206.13.179/estoquemobile.php?y=$desc$horaEdata.png", "$desc$horaEdata.png");
        
    }else{
       
        $svgCode =QRcode::png("http://localhost/html/Code_nika_project/Core/Templates/PHP/estoquemobile.php?y=$desc$horaEdata.png", "$desc$horaEdata.png");
    }
    

    rename("$desc$horaEdata.png","qrcode/$desc$horaEdata.png");

    if($res){
        print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Produto cadastrado com sucesso.</div>');
    }else{
        
        print_r('<div class="alert alert-danger"><strong>ERRO!</strong> Inesperado ao cadastrar produto</div>');
    }

}catch(\Exepion $e){

        echo $e->getMassage();

}
