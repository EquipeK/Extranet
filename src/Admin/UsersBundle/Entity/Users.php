<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Admin\UsersBundle\Repository\UsersRepository")
 */
class Users extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edit_at", type="datetime", nullable=true)
     */
    private $edit_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="del_at", type="datetime", nullable=true)
     */
    private $del_at;

    /**
     * @var bool
     *
     * @ORM\Column(name="online", type="boolean", nullable=true)
     */
    private $online;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=64, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=64, nullable=true)
     */
    private $firstname;
}