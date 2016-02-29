<?php
	$strUrlParam = isset($_GET['pag']) ? $_GET['pag'] : null;

	$arrPages = [
		'home' => 'home.php',
		'empresa' => 'empresa.php',
		'produto' => 'produto.php',
		'servico' => 'servico.php',
		'contato' => 'contato.php'
	];

	$strUrlParam = isset($arrPages[$strUrlParam]) ? 'pages/'.$arrPages[$strUrlParam] : 'pages/404.php';
	//require_once($strUrlParam);