<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courses
 *
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\CoursesRepository")
 */
class Courses
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
     * @ORM\Column(name="depart", type="string", length=255)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_course", type="datetime")
     */
    private $dateCourse;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;


    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumn(name="client_id",referencedColumnName="id")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumn(name="partenaire_id",referencedColumnName="id")
     */
    private $partenaire;


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
     * Set depart
     *
     * @param string $depart
     *
     * @return Courses
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return Courses
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set dateCourse
     *
     * @param \DateTime $dateCourse
     *
     * @return Courses
     */
    public function setDateCourse($dateCourse)
    {
        $this->dateCourse = $dateCourse;

        return $this;
    }

    /**
     * Get dateCourse
     *
     * @return \DateTime
     */
    public function getDateCourse()
    {
        return $this->dateCourse;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Courses
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set client
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $client
     *
     * @return Courses
     */
    public function setClient(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set partenaire
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $partenaire
     *
     * @return Courses
     */
    public function setPartenaire(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $partenaire = null)
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    /**
     * Get partenaire
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }
}
