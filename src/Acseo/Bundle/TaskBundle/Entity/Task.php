<?php

namespace Acseo\Bundle\TaskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acseo\Bundle\TaskBundle\Entity\Task
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acseo\Bundle\TaskBundle\Entity\TaskRepository")
 */
class Task
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
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float $tempsEstime
     *
     * @ORM\Column(name="tempsEstime", type="float")
     */
    private $tempsEstime;

    /**
     * @var float $tempsPasse
     *
     * @ORM\Column(name="tempsPasse", type="float")
     */
    private $tempsPasse;

    /**
     * @ORM\ManyToOne(targetEntity="Acseo\Bundle\ProjetBundle\Entity\Projet", cascade={"all"}, fetch="EAGER")
     */
    private $projet;

    /**
     * @var $owners
     *
     * @ORM\ManyToMany(targetEntity="Acseo\Bundle\UserBundle\Entity\User")
     * @ORM\JoinTable(name="user_task",
     *      joinColumns={@ORM\JoinColumn(name="task_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     *      )
     */
     private $owners;

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

    /**
     * Set tempsEstime
     *
     * @param float $tempsEstime
     */
    public function setTempsEstime($tempsEstime)
    {
        $this->tempsEstime = $tempsEstime;
    }

    /**
     * Get tempsEstime
     *
     * @return float
     */
    public function getTempsEstime()
    {
        return $this->tempsEstime;
    }

    /**
     * Set tempsPasse
     *
     * @param float $tempsPasse
     */
    public function setTempsPasse($tempsPasse)
    {
        $this->tempsPasse = $tempsPasse;
    }

    /**
     * Get tempsPasse
     *
     * @return float
     */
    public function getTempsPasse()
    {
        return $this->tempsPasse;
    }
    public function __construct()
    {
        $this->owners = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set projet
     *
     * @param Acseo\Bundle\ProjetBundle\Entity\Projet $projet
     */
    public function setProjet(\Acseo\Bundle\ProjetBundle\Entity\Projet $projet)
    {
        $this->projet = $projet;
    }

    /**
     * Get projet
     *
     * @return Acseo\Bundle\ProjetBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Add owners
     *
     * @param Acseo\Bundle\UserBundle\Entity\User $owners
     */
    public function addUser(\Acseo\Bundle\UserBundle\Entity\User $owners)
    {
        $this->owners[] = $owners;
    }

    /**
     * Get owners
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getOwners()
    {
        return $this->owners;
    }
}
