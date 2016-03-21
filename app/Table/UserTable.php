<?php
namespace App\Table;

use Core\Table\Table;

class UserTable extends Table{

    protected $table = 'users';

    public function trouver($email, $password){
    	$password = sha1($password);
       	return $this->query("
        	SELECT *
           	FROM users
           	WHERE email = ? AND password = ?", [$email,$password], true);
    }
}