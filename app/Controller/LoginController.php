<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;
use Core\HTML\Form;

class LoginController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Login');
    }

    public function index(){
    	$errors = false;
        $form = new BootstrapForm();
        $this->render('login.index', compact('form',"errors"));
    }

}