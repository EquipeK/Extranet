<?php

namespace App\Controller;

use Core\Controller\Controller;

class PagesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Page');
    }


    public function show($id){
        $pages = $this->Page->find($id);
    
        $this->render('pages.show', compact('pages'));
    }

}