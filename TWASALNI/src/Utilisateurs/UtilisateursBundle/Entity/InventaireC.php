<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventaireC
 *
 * @ORM\Table(name="inventaire_c")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\InventaireCRepository")
 */
class InventaireC
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
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_i", type="date")
     */
    private $dateI;


    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumn(name="partenaire_id",referencedColumnName="id")
     */
    private $partenaire;

    /**
     * @var int
     *
     * @ORM\Column(name="paye", type="integer")
     */
    private $paye;


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
     * Set montant
     *
     * @param float $montant
     *
     * @return InventaireC
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set dateI
     *
     * @param \DateTime $dateI
     *
     * @return InventaireC
     */
    public function setDateI($dateI)
    {
        $this->dateI = $dateI;

        return $this;
    }

    /**
     * Get dateI
     *
     * @return \DateTime
     */
    public function getDateI()
    {
        return $this->dateI;
    }

    /**
     * Set partenaire
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $partenaire
     *
     * @return InventaireC
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
     * Set paye
     *
     * @param integer $paye
     *
     * @return InventaireC
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return integer
     */
    public function getPaye()
    {
        return $this->paye;
    }
}
