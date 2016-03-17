<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use Core\HTML\Form;

class UsersController extends AppController{
	public function __construct(){
		parent::__construct();
        $this->loadModel('User');
	}
	public function index(){
		$form = new BootstrapForm();
		$this->loadModel('Department');
		$departments = $this->Department->all();
		$departments = $this->Department->extract('id_department', 'label_department');
		$this->render('admin.users.index',compact('form','departments'));
	}

	public function add(){
		var_dump($_GET);
	}
}