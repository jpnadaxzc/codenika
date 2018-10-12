<?php
 
 $produção = false; //NAO MECHER

 if($produção){

    $banco = "nika";
    $usuario ="root";
    $senha = "nika";
    $hostname = "localhost:3306";
    $con = mysqli_connect('localhost:3306','root','nika');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $cone = mysqli_select_db($con,'nika') or die (mysqli_error());
 
 }else{
    
    $con = mysqli_connect('localhost:3306','root','root');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $cone = mysqli_select_db($con,'nika') or die (mysqli_error());
 }

?>