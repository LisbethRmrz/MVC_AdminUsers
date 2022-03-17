<?php
	
	require_once "Configurations/Config.php";
	require_once "Libs/Routes.php";
	require_once "Configurations/DbConection.php";
	require_once "Controllers/Users.php";
	require_once "Controllers/Login.php";
	
	if(isset($_GET['c'])){
		
		$controlador = loadController($_GET['c']);
		
		if(isset($_GET['a'])){
			if(isset($_GET['id'])){
				loadAction($controlador, $_GET['a'], $_GET['id']);
				} else {
				loadAction($controlador, $_GET['a']);
			}
			} else {
			loadAction($controlador, ACCION_PRINCIPAL);
		}
		
		} else {
		
		$controlador = loadController(CONTROLADOR_PRINCIPAL);
		$accionTmp = ACCION_PRINCIPAL;
		$controlador->$accionTmp();
	}
?>