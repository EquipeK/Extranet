<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status_newsletter
 *
 * @ORM\Table(name="status_newsletter")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\Status_newsletterRepository")
 */
class Status_newsletter
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
     * @ORM\Column(name="status_newsletter_label", type="string", length=32)
     */
    private $statusNewsletterLabel;


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
     * Set statusNewsletterLabel
     *
     * @param string $statusNewsletterLabel
     *
     * @return Status_newsletter
     */
    public function setStatusNewsletterLabel($statusNewsletterLabel)
    {
        $this->statusNewsletterLabel = $statusNewsletterLabel;

        return $this;
    }

    /**
     * Get statusNewsletterLabel
     *
     * @return string
     */
    public function getStatusNewsletterLabel()
    {
        return $this->statusNewsletterLabel;
    }
}

