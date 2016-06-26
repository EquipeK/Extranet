<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="pages")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\PagesRepository")
 */
class Pages
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
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creat_at", type="datetime")
     */
    private $creatAt;

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
     * Set content
     *
     * @param string $content
     *
     * @return Pages
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Pages
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Pages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set online
     *
     * @param boolean $online
     *
     * @return Pages
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return bool
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set creatAt
     *
     * @param \DateTime $creatAt
     *
     * @return Pages
     */
    public function setCreatAt($creatAt)
    {
        $this->creatAt = $creatAt;

        return $this;
    }

    /**
     * Get creatAt
     *
     * @return \DateTime
     */
    public function getCreatAt()
    {
        return $this->creatAt;
    }

    /**
     * Set editAt
     *
     * @param \DateTime $editAt
     *
     * @return Pages
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
     * @return Pages
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

