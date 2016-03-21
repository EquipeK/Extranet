<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;
use Core\HTML\Form;

class LoginController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->setTemplate("login");
    }


    public function index($error = null){
    	if(!$error) $error = false;
        $form = new BootstrapForm();
		$this->render('templates.login',compact('form','error'));
    }

    public function connect(){
    	$email = $_GET['email'];
    	$password = $_GET['password'];
    	$login = $this->User->trouver($email,$password);
    	if($login !== false) {
    		$this->loadModel('Page');
    		$this->setTemplate("default");
    		$pages = $this->Page->find(1);
    	    $this->render('pages.show', compact('pages'));
    	}
    	else{
    		$this->index(true);
    	}
    }
}