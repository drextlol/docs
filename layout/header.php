<?php
session_start();
if(!isset($_SESSION['usuario']))
header("Location: logout.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Docs de desenvolvimento</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

	<!-- Chamadas CSS -->
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/syntax/shCoreRDark.css"/>

	<!-- Chamadas JS -->
	<script type="text/javascript" src="js/shCore.js"></script>
	<script type="text/javascript" src="js/shBrushJScript.js"></script>
	<script type="text/javascript" src="js/shBrushCss.js"></script>
	<script type="text/javascript" src="js/shBrushXml.js"></script>
	<script type="text/javascript">
		SyntaxHighlighter.defaults['toolbar'] = false;
		SyntaxHighlighter.defaults['gutter'] = false;
		SyntaxHighlighter.all();
	</script>

</head>
<body>

	<h1 class="logo">
		<a href="conteudo.php">Documentação de desenvolvimento</a>
		<a title="Sair do docs" class="sair" href="logout.php"/>Logout</a>
		<span title="Usuário" class="user"><?php echo $_SESSION['usuario'];?></span>
	</h1>

	<div class="center-page">