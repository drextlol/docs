<?php
session_start();
	if(isset($_SESSION['usuario']))
	header("Location: conteudo.php");
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Docs de desenvolvimento</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
</head>

<body>

<form class="form" method="post" action="login.php">
	<div class="lg">Docs de desenvolvimento</div>
	<ul>
		<li><label>Usuário:</label></li>
		<li><input type="text" name="usuario" placeholder="Digite seu login" value=""/></li>
		<li><label>Senha:</label></li>
		<li><input type="password" name="senha" placeholder="Digite sua senha" value=""/></li>
		<li>
			<input type="submit" value="Entrar" class="entrar"/>
			<a class="recuperar" href="javascript:alert('Entre em contato com o administrador'); ">Esqueceu a senha?</a>
		</li>
		<li><input type="hidden" name="hidden" value="1"/></li>
	</ul>
</form>

</body>
</html>