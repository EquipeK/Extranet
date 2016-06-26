<?php

namespace Admin\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminUsersBundle:Default:index.html.twig');
    }
}
