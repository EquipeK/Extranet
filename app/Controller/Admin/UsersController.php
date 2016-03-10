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
		$this->render('admin.users.index',compact('form'));
	}
}