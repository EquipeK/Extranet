<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\MediaRepository")
 */
class Media
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="src", type="string", length=255)
     */
    private $src;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="origin_name", type="string", length=255)
     */
    private $originName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edit_at", type="datetime", nullable=true)
     */
    private $editAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="del_at", type="datetime", nullable=true)
     */
    private $delAt;


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
     * Set type
     *
     * @param string $type
     *
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set src
     *
     * @param string $src
     *
     * @return Media
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Media
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set originName
     *
     * @param string $originName
     *
     * @return Media
     */
    public function setOriginName($originName)
    {
        $this->originName = $originName;

        return $this;
    }

    /**
     * Get originName
     *
     * @return string
     */
    public function getOriginName()
    {
        return $this->originName;
    }

    /**
     * Set editAt
     *
     * @param \DateTime $editAt
     *
     * @return Media
     */
    public function setEditAt($editAt)
    {
        $this->editAt = $editAt;

        return $this;
    }

    /**
     * Get editAt
     *
     * @return \DateTime
     */
    public function getEditAt()
    {
        return $this->editAt;
    }

    /**
     * Set delAt
     *
     * @param \DateTime $delAt
     *
     * @return Media
     */
    public function setDelAt($delAt)
    {
        $this->delAt = $delAt;

        return $this;
    }

    /**
     * Get delAt
     *
     * @return \DateTime
     */
    public function getDelAt()
    {
        return $this->delAt;
    }
}

