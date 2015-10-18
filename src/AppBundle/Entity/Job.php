<?php

namespace AppBundle\Entity;

use JMS\Serializer\Annotation\Type;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;

/**
 * Job
 *
 * @ORM\Table(name="hr_job")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repo\JobRepository")
 * @HasLifecycleCallbacks
 */
class Job
{

    /**
     * @var integer
     *
     * @Type("integer")
     * @ORM\Column(name="job_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Type("string")
     * @ORM\Column(name="job_title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @Type("string")
     * @ORM\Column(name="job_description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @Type("string")
     * @ORM\Column(name="job_email", type="text", nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @Type("string")
     * @ORM\Column(name="job_status", type="text", nullable=true)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="jobs")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * @Expose
     * @Type("AppBundle\Entity\User")
     **/
    protected $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /** @PrePersist */
    public function doOtherStuffOnPrePersist()
    {
        //$this->setEmail("kretenski mejl");
    }


}