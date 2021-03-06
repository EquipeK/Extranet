<?php
namespace Core\Auth;

use Core\Database\Database;

class DBAuth {

    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function getUserId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param $email
     * @param $password
     * @return boolean
     */
    public function login($username, $password){
        $user = $this->db->prepare('SELECT * FROM users WHERE email = ?', [$email], null, true);
        if($user){
            if($user->password === sha1($password)){
                $_SESSION['auth'] = $user->id_user;
                return true;
            }
        }
        return false;
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }

}