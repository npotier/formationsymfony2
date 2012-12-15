<?php

namespace Acseo\Bundle\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acseo\Bundle\ClientBundle\Entity\Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acseo\Bundle\ClientBundle\Entity\ClientRepository")
 */
class Client
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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string $adresse
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var $managers
     *
     * @ORM\ManyToMany(targetEntity="Acseo\Bundle\UserBundle\Entity\User")
     * @ORM\JoinTable(name="client_manager",
     *      joinColumns={@ORM\JoinColumn(name="client_id", referencedColumnName="id")},
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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
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
}
