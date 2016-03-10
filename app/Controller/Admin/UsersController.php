<?php 

namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;
use Core\HTML\Form;
class UsersController extends AppController{
	public function __construct(){
		parent::__construct();
		$this->loadModel('User');
	}

	public function users(){
		if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['email'], $_POST['password'])){
                
               $_SESSION['email'] = $_POST['email'];
               // $this->redirect(PREFIX.'/pages/index');
            } 
        }
		$form = new BootstrapForm();
		$this->render('admin.users',compact('form'));
	}
}