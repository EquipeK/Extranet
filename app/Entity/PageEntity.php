<?php
namespace App\Entity;

use Core\Entity\Entity;

class PageEntity extends Entity{

    public function getUrl(){
        return BASE_URL.DS.'pages'.DS.'show'.DS;
    }


}