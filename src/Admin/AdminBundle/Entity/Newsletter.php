<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\NewsletterRepository")
 */
class Newsletter
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
     * @ORM\Column(name="content", type="text")
     */
    private $content;

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
     * @return Newsletter
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
     * Set creatAt
     *
     * @param \DateTime $creatAt
     *
     * @return Newsletter
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
     * @return Newsletter
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
}

