<?php
	$strUrlParam = isset($_GET['pag']) ? $_GET['pag'] : null;

	define('PAGES_SRC', 'pages/');
	define('LAYOUT_SRC', PAGES_SRC . 'layout/');

	$arrPages = [
		'home' => 'home.php',
		'empresa' => 'empresa.php',
		'produto' => 'produto.php',
		'servico' => 'servico.php',
		'contato' => 'contato.php'
	];

	if(in_array($strUrlParam, $arrPages) && file_exists(PAGES_SRC . $arrPages[$strUrlParam]))
	{
		$strPage = $arrPages[$strUrlParam];
		require_once(LAYOUT_SRC . 'layout-1.php');
	}
	else
		require_once(PAGES_SRC . '404.php');
