<?php

namespace App\Controller;

use Core\Controller\Controller;

class DepartmentController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Department');
    }
    public function list(){
    	$errors = false;
        
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['email'], $_POST['password'])){
                
               $_SESSION['email'] = $_POST['email'];
               // $this->redirect(PREFIX.'/pages/index');
            } else {
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('departments.list', compact('form',"errors"));
    }

}