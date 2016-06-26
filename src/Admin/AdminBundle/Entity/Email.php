<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\EmailRepository")
 */
class Email
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
     * @ORM\Column(name="email_emetter", type="string", length=64)
     */
    private $emailEmetter;

    /**
     * @var string
     *
     * @ORM\Column(name="email_receiver", type="string", length=64)
     */
    private $emailReceiver;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=64, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_email_send", type="datetime")
     */
    private $dateEmailSend;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_email_receive", type="datetime", nullable=true)
     */
    private $dateEmailReceive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="del_at_from", type="datetime", nullable=true)
     */
    private $delAtFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="del_at_to", type="datetime", nullable=true)
     */
    private $delAtTo;


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
     * Set emailEmetter
     *
     * @param string $emailEmetter
     *
     * @return Email
     */
    public function setEmailEmetter($emailEmetter)
    {
        $this->emailEmetter = $emailEmetter;

        return $this;
    }

    /**
     * Get emailEmetter
     *
     * @return string
     */
    public function getEmailEmetter()
    {
        return $this->emailEmetter;
    }

    /**
     * Set emailReceiver
     *
     * @param string $emailReceiver
     *
     * @return Email
     */
    public function setEmailReceiver($emailReceiver)
    {
        $this->emailReceiver = $emailReceiver;

        return $this;
    }

    /**
     * Get emailReceiver
     *
     * @return string
     */
    public function getEmailReceiver()
    {
        return $this->emailReceiver;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Email
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Email
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
     * Set dateEmailSend
     *
     * @param \DateTime $dateEmailSend
     *
     * @return Email
     */
    public function setDateEmailSend($dateEmailSend)
    {
        $this->dateEmailSend = $dateEmailSend;

        return $this;
    }

    /**
     * Get dateEmailSend
     *
     * @return \DateTime
     */
    public function getDateEmailSend()
    {
        return $this->dateEmailSend;
    }

    /**
     * Set dateEmailReceive
     *
     * @param \DateTime $dateEmailReceive
     *
     * @return Email
     */
    public function setDateEmailReceive($dateEmailReceive)
    {
        $this->dateEmailReceive = $dateEmailReceive;

        return $this;
    }

    /**
     * Get dateEmailReceive
     *
     * @return \DateTime
     */
    public function getDateEmailReceive()
    {
        return $this->dateEmailReceive;
    }

    /**
     * Set delAtFrom
     *
     * @param \DateTime $delAtFrom
     *
     * @return Email
     */
    public function setDelAtFrom($delAtFrom)
    {
        $this->delAtFrom = $delAtFrom;

        return $this;
    }

    /**
     * Get delAtFrom
     *
     * @return \DateTime
     */
    public function getDelAtFrom()
    {
        return $this->delAtFrom;
    }

    /**
     * Set delAtTo
     *
     * @param \DateTime $delAtTo
     *
     * @return Email
     */
    public function setDelAtTo($delAtTo)
    {
        $this->delAtTo = $delAtTo;

        return $this;
    }

    /**
     * Get delAtTo
     *
     * @return \DateTime
     */
    public function getDelAtTo()
    {
        return $this->delAtTo;
    }
}

