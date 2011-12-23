<?php

namespace Acseo\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acseo\Bundle\UserBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acseo\Bundle\UserBundle\Entity\UserRepository")
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var boolean $isActive
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var boolean $isAdmin
     *
     * @ORM\Column(name="isAdmin", type="boolean")
     */
    private $isAdmin;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=20)
     */
    private $password;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=20)
     */
    private $username;

    /** 
     * @var $managers
     *
     * @ORM\ManyToMany(targetEntity="User")
     * @ORM\JoinTable(name="user_manager",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="manager_id", referencedColumnName="id")}
     *      )
     */
     private $managers;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get isAdmin
     *
     * @return boolean 
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
    public function __construct()
    {
        $this->managers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add managers
     *
     * @param Acseo\Bundle\UserBundle\Entity\User $managers
     */
    public function addUser(\Acseo\Bundle\UserBundle\Entity\User $managers)
    {
        $this->managers[] = $managers;
    }

    /**
     * Get managers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getManagers()
    {
        return $this->managers;
    }
    
    /**
     * 
     * Ajout de la fonction __toString requise pour le CRUD du Modèle User
     */
    public function __toString()
    {
    	return  $this->getUsername();
    }
}