<?php

namespace Acseo\Bundle\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acseo\Bundle\ProjetBundle\Entity\Projet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acseo\Bundle\ProjetBundle\Entity\ProjetRepository")
 */
class Projet
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
     * @var datetime $dateDebut
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var datetime $dateFin
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

       /**
     * @var $managers
     *
     * @ORM\ManyToMany(targetEntity="Acseo\Bundle\UserBundle\Entity\User")
     * @ORM\JoinTable(name="projet_manager",
     *      joinColumns={@ORM\JoinColumn(name="projet_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="manager_id", referencedColumnName="id")}
     *      )
     */
     private $managers;
    /**
     * @var client
     * @ORM\ManyToOne(targetEntity="Acseo\Bundle\ClientBundle\Entity\Client", cascade={"all"}, fetch="EAGER")
     */
    private $client;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

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
     * Set dateDebut
     *
     * @param datetime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * Get dateDebut
     *
     * @return datetime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param datetime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * Get dateFin
     *
     * @return datetime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set client
     *
     * @param Acseo\Bundle\ClientBundle\Entity\Client $client
     */
    public function setClient(\Acseo\Bundle\ClientBundle\Entity\Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get client
     *
     * @return Acseo\Bundle\ClientBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
