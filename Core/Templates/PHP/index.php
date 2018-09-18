<!DOCTYPE html>
<html>
	<meta charset="utf-8"/>
<head>
	<link rel="stylesheet" type="text/css" href="../Static/CSS/estilo_login.css">
	<title>Login</title>
</head>
	<body class="tudo">
		<div class="logo">
			<div>
				<img src="https://github.com/isasmartins/logo/blob/master/logo2.png?raw=true"></img>
			</div>
		</div>
		<div>
			<div class="caixa">
				<form method="post" action="login2.php" >
					<div class="user">
						Usuário
					</div>
					<div class="campos">
						<input type="text" title="Usuário" name="login"  class="usuario" /><br/><br/>
					</div>
					<div class="senha">
						Senha
					</div>
					<div class="campos">
						<input type="password" title="Senha" name="senha" /><br/><br/>
					</div>
					<div class="check">
						<input type="checkbox" value="Lembrar_senha"> Lembrar minhas credenciais<br/><br/>
						<!-- fazer cookie para lembrar a senha do usuário em php eu acho -->
					</div>
					<div class="botao">
						<input type="submit"  title="Entrar" value="Entrar">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>