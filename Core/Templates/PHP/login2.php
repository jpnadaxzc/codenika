

<?php
     

    $banco = "";
    $usuario ="";
    $senha = "";
    $hostname ="";
    /*$con = mssql_connect ($hostname,$usuario,$senha) or die (mssql_error());
    mssql_select_db($banco,$con) or die (mssql_error());*/
?>

<html>
<head>
	<title>autenticando usuario</title>
</head>
<body>
<?php
    
    $l = $_POST ['login'];
    $s = $_POST ['senha'];
   /* $sql = mssql_query ("SELECT * FROM usuarios WHERE login = '$l' and senha = '$s' ") or die (mssql_error());*/
   /* $row = mssql_num_rows($sql);*/
    	if ($l == "kaio" and $s == "123"){
    		session_start();
            $_SESSION['poder'] = 1;
    		$_SESSION['login']= $l;
    		$_SESSION['senha']= $s;
            header('Location: inicial.php');
    	}else{
            header('Location: index.html');
    	}
?>

</body>
</html>
