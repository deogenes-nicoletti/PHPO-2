<?php
	define('PAGES_SRC', 'pages/');
	define('LAYOUT_SRC', PAGES_SRC . 'layout/');

	/*
	*@date 29/02/2016
	*@return array Data
	*/
	function route()
	{
		$strUrlParam = isset($_GET['pag']) ? $_GET['pag'] : null;

		$arrPages = [
			'home' => 'home.php',
			'empresa' => 'empresa.php',
			'produto' => 'produto.php',
			'servico' => 'servico.php',
			'contato' => 'contato.php'
		];

		$arrRoute = [
			'header' => array(
				'response_code' => 200,
				'request_file' => PAGES_SRC
			)
		];

		if(isset($arrPages[$strUrlParam]) && file_exists(PAGES_SRC . $arrPages[$strUrlParam]))
			$arrRoute['header']['request_file'] .= $arrPages[$strUrlParam];
		else{
			$arrRoute['header']['response_code'] = 404;
			$arrRoute['header']['request_file'] .= "404.php";
		}

		return $arrRoute;
	}

	$arrPage = route();
	http_response_code($arrPage['header']['response_code']);

	require_once(LAYOUT_SRC . 'layout-1.php');