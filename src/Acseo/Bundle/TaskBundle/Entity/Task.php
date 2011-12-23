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
}