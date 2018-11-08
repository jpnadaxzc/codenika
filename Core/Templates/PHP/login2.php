

<?php
   ini_set('display_errors',1);
   ini_set('display_startup_erros',1);
   error_reporting(E_ALL);

   include_once 'conexao.php';
    
    $l = $_POST ['login'];
    $s = $_POST ['senha'];
    $query = "select * from nika.usuarios WHERE login = '$l' and senha = '$s' and ativo = 1 and acesso = 1 ";
    $sql = mysqli_query ($con,$query ) or die (mysqli_error($con));
    $row = mysqli_num_rows($sql);
    
    	if ($row > 0){
            $row = mysqli_fetch_array($sql);
            
    		session_start();
            $_SESSION['poder'] = $row['perfil'];
    		$_SESSION['login']= $l;
            $_SESSION['senha']= $s;
            
    	}else{
            print_r("<div class='alert alert-danger'><strong>ERRO!</strong>Login ou Senha invalidos!</div>");
        }
    
?>


