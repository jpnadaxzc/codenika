<?php
try{
    include('phpqrcode/qrlib.php'); 
    include_once "conexao.php";
    $valor = $_POST['valor'];
    $qtd = $_POST['qtd'];
    $desc = $_POST['descricao'];
    $desc2 = str_replace(' ','_',$desc);
    $forn = $_POST['forn'];
    $dia = date('Y-m-d');
    $horaEdata = date('Ymdhis');
    $query = "insert into nika.estoque (valor,qtd,descricao,fornecedor,datacad,qrcode) values ($valor,$qtd,'$desc',$forn,'$dia','$desc2$horaEdata.png')";
   
    $res = mysqli_query($con,$query);
    if($produção){
        
        
        $svgCode =QRcode::png("http://52.206.13.179/estoquemobile.php?y=$desc2$horaEdata.png", "$desc2$horaEdata.png");
        
    }else{
        
       
        $svgCode =QRcode::png("http://localhost/html/Code_nika_project/Core/Templates/PHP/estoquemobile.php?y=$desc2$horaEdata.png", "$desc2$horaEdata.png");
    }
    

    rename("$desc2$horaEdata.png","qrcode/$desc2$horaEdata.png");

    if($res){
        print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Produto cadastrado com sucesso.</div>');
    }else{
        
        print_r('<div class="alert alert-danger"><strong>ERRO!</strong> Inesperado ao cadastrar produto</div>');
    }

}catch(\Exepion $e){

        echo $e->getMassage();

}
