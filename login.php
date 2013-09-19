<?php

if (eregi("login.php", $_SERVER['SCRIPT_NAME'])){
	header("Location: index.php");
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

/*
Crie um vetor $table[] que contenha as chaves
'usuario' e 'senha' sendo que seus valores podem
vir de qualquer lugar, como por exemplo um banco de dados.
*/
$table = array();
$table['usuario'] = "solucoes";
$table['senha'] = "Phoo5gee";

if($usuario == $table['usuario'] && $senha == $table['senha']) {
	session_start();
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	header("Location: conteudo.php");
}
else{
	echo '<script>';
	echo 'alert("Login ou senha inválidos, tente novamente"); history.back();';
	echo '</script>';
}
?>