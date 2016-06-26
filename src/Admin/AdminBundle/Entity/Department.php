<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table(name="department")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\DepartmentRepository")
 */
class Department
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
     * @ORM\Column(name="label_department", type="string", length=64)
     */
    private $labelDepartment;

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
     * Set labelDepartment
     *
     * @param string $labelDepartment
     *
     * @return Department
     */
    public function setLabelDepartment($labelDepartment)
    {
        $this->labelDepartment = $labelDepartment;

        return $this;
    }

    /**
     * Get labelDepartment
     *
     * @return string
     */
    public function getLabelDepartment()
    {
        return $this->labelDepartment;
    }

    /**
     * Set creatAt
     *
     * @param \DateTime $creatAt
     *
     * @return Department
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
     * @return Department
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

