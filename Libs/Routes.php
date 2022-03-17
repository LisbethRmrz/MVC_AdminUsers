<?php
	
	function loadController($controlador){
		
		$nameController = ucwords($controlador)."Controller";
		$fileController = 'Controllers/'.ucwords($controlador).'.php';
		
		if(!is_file($fileController)){
			
			$fileController= 'Controllers/'.CONTROLADOR_PRINCIPAL.'.php';
			
		}
		require_once $fileController;
		$control = new $nameController();
		return $control;
	}
	
	function loadAction($controller, $action, $id = null){
		
		if(isset($action) && method_exists($controller, $action)){
			if($id == null){
				$controller->$action();
				} else {
				$controller->$action($id);
			}
			} else {
			$controller->index();
		}	
	}
?>