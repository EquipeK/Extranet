<?php

namespace App\Controller\Admin;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;
use Core\HTML\Form;

class DepartmentsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Department');
    }
    public function index(){
    	$errors = false;
        
        // if(!empty($_POST)){
        //     $auth = new DBAuth(App::getInstance()->getDb());
        //     if($auth->login($_POST['email'], $_POST['password'])){
                
        //        $_SESSION['email'] = $_POST['email'];
        //        $this->redirect(PREFIX.'/departments/index');
        //     } else {
        //         $errors = true;
        //     }
        // }
        $form = new BootstrapForm();
        $this->render('admin.departments.index', compact('form',"errors"));
    }

    public function add(){
        $label_department = $_GET['label_department'];
        $creat_at = date("Y-m-d H:i:s");
        $edit_at = $creat_at;
        $field = array(
            'label_department'=>$label_department,
            'creat_at'=>$creat_at,
            'edit_at'=> $edit_at,
            'edit_by'=>1
        );
        $department = $this->Department->create($field);
        $this->index();
    }

    public function show(){
        $departments = $this->Department->all();
        $this->render('admin.users.index', compact('departments'));
    }

}