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
		$email = $_GET['email'];
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
		$password = sha1($_GET['password']);
		$id_department = $_GET['department'];
		$login = $email;
		$edit_at = date("Y-m-d H:i:s");
		$field = array(
			'login'=>$login,
			'email'=>$email,
			'lastname'=>$lastname,
			'firstname'=>$firstname,
			'password'=>$password,
			'edit_at'=>$edit_at,
			'id_department'=>$id_department
		);
		$user = $this->User->create($field);

	}
}