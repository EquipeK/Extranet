<?php
namespace App\Entity;

use Core\Entity\Entity;

class DepartmentEntity extends Entity{

    public function getUrl(){
        return BASE_URL.DS.'departments'.DS.'list'.DS;
    }


}