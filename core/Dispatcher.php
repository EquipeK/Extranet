<?php
namespace Core;

use Core\Router;

class Dispatcher{
	
	protected $request;
	protected $parametre;

	function __construct()
	{
		$this->request = new Request();

		Router::parse($this->request->url,$this->request);
		$controller = $this->loadController();
		$action = $this->request->action;

		foreach ($this->request->params as $param) {
			$this->parametre .= $param.", ";
		}
		$this->parametre = rtrim($this->parametre, ", ");

		if(empty($this->parametre)){
          $controller->$action();
		}else{
			$controller->$action($this->parametre);
		}
        
	}
	/**
	*
	*permet de générer une page d'erreur en cas en cas de probleme avec le routing
	*
	**/
	function error($message){
        
        $controller = new Controller($this->request);
        $controller->e404($message);
    }
    /**
    *
    *permet de charger le controller en fonction de la demande utilisateur
    *
    **/
	function loadController(){

         
            	$name = ucfirst($this->request->controller) .'Controller';
     if($this->request->prefix =='admin'){
     $file = ROOT . DS .'app'.DS.'Controller' . DS .'admin' .DS . $name .'.php';     
}else{
     $file = ROOT . DS .'app'.DS.'Controller' . DS . $name .'.php';
}

            if(!file_exists($file)){
            	$this->error('Le controller '.$this->request->controller." n'existe pas");
            }
            require $file;
if($this->request->prefix =='admin'){
	$namecontroller = '\App\Controller\Admin\\' . $name;      
}else{
	$namecontroller = '\App\Controller\\' . $name;
}
            
            $controller = new $namecontroller($this->request);
               

            return $controller;


    }
}