<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
define('WEBROOT',dirname(__FILE__));
define('ROOT',dirname(WEBROOT));
define('DS','/');
define('BASE_URL','http://localhost/Extranet/web/index.php');
define('BASE','http://localhost/Extranet/web/');
define('IMAGE','http://localhost/Extranet/web/img');
define('NAME',"Rubis");
define('PREFIX',"admin");
require ROOT . '/app/App.php';
App::load();
new Core\Dispatcher();