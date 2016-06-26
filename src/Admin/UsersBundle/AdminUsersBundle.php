<?php

namespace Admin\UsersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdminUsersBundle extends Bundle
{
	/**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
