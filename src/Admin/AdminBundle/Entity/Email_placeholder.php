<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email_placeholder
 *
 * @ORM\Table(name="email_placeholder")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\Email_placeholderRepository")
 */
class Email_placeholder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="placeholder", type="string", length=64)
     */
    private $placeholder;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set placeholder
     *
     * @param string $placeholder
     *
     * @return Email_placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * Get placeholder
     *
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }
}

