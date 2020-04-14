<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commission
 *
 * @ORM\Table(name="commission")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\CommissionRepository")
 */
class Commission
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
     * @var float
     *
     * @ORM\Column(name="pourcentage", type="float")
     */
    private $pourcentage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commission", type="date")
     */
    private $dateCommission;


    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumn(name="partenaire_id",referencedColumnName="id")
     */
    private $partenaire;


    /**
     * @ORM\ManyToOne(targetEntity="Courses")
     * @ORM\JoinColumn(name="course_id",referencedColumnName="id")
     */
    private $course;



    /**
     * @ORM\ManyToOne(targetEntity="InventaireC")
     * @ORM\JoinColumn(name="inventairec_id",referencedColumnName="id")
     */
    private $inventairec;


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
     * Set pourcentage
     *
     * @param float $pourcentage
     *
     * @return Commission
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return float
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set partenaire
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $partenaire
     *
     * @return Commission
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

    /**
     * Set course
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Courses $course
     *
     * @return Commission
     */
    public function setCourse(\Utilisateurs\UtilisateursBundle\Entity\Courses $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Courses
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set dateCommission
     *
     * @param \DateTime $dateCommission
     *
     * @return Commission
     */
    public function setDateCommission($dateCommission)
    {
        $this->dateCommission = $dateCommission;

        return $this;
    }

    /**
     * Get dateCommission
     *
     * @return \DateTime
     */
    public function getDateCommission()
    {
        return $this->dateCommission;
    }


    /**
     * Set inventairec
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\InventaireC $inventairec
     *
     * @return Commission
     */
    public function setInventairec(\Utilisateurs\UtilisateursBundle\Entity\InventaireC $inventairec = null)
    {
        $this->inventairec = $inventairec;

        return $this;
    }

    /**
     * Get inventairec
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\InventaireC
     */
    public function getInventairec()
    {
        return $this->inventairec;
    }
}
