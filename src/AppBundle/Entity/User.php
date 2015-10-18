<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Expose;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\Exclude;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repo\UserRepository")
 */
class User extends BaseUser
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    protected $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=false)
     */
    protected $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=false)
     */
    protected $emailCanonical;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    protected $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    protected $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    protected $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    protected $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    protected $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean", nullable=false)
     */
    protected $expired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    protected $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    protected $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    protected $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    protected $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=false)
     */
    protected $credentialsExpired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="credentials_expire_at", type="datetime", nullable=true)
     */
    protected $credentialsExpireAt;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Job", mappedBy="user")
     * @Type("AppBundle\Entity\Job")
     * @Exclude
     **/
    protected $jobs;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->jobs = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @param $jobs
     * @return Job
     */
    public function setJobs($jobs)
    {
        $this->jobs = $jobs;
        return $this;
    }

    /**
     * @param Job $job
     * @return User
     */
    public function addJob(Job $job)
    {
        $this->jobs->add($job);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeJob(Job $job)
    {
        $this->jobs->removeElement($job);
    }

}

