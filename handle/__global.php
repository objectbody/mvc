<?php

	use Handle\View;
	use Handle\Route;

	function view(String $template, Array $data = []){
		$view = new View;
		$view->boot();
		echo $view->render($template, $data);
	}


	Route::boot();

	require('../app/routes.php');

	Route::response();