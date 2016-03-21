<?php

use Core\Config;
use Core\Database\MysqlDatabase;
use Core\Router;

class App{

    public $title = "Site Rubis";
    private $db_instance;
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load(){
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
        //regle de routing
        Router::prefix(PREFIX,'admin');//
        Router::connect('index.php','login/index');
        // Router::connect('','admin/users/index');
        // Router::connect(':id/categories.html','posts/category/id:([0-9]+)');
        // Router::connect('cgv.html','pages/show/1');
        // Router::connect('login.html','users/login');
        // Router::connect('', 'admin/index');
    }

    public function getTable($name){
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb(){
        $config = Config::getInstance(ROOT . '/config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }


}