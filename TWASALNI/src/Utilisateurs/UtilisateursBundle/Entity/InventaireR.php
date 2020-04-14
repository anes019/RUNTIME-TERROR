<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventaireR
 *
 * @ORM\Table(name="inventaire_R")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\InventaireRRepository")
 */
class InventaireR
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
     * @ORM\Column(name="date_i", type="datetime")
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
     * @ORM\Column(name="done", type="integer")
     */
    private $done=0;

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
     * @return float
     */
    public function getMontant ()
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     */
    public function setMontant ($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return \DateTime
     */
    public function getDateI ()
    {
        return $this->dateI;
    }

    /**
     * @param \DateTime $dateI
     */
    public function setDateI ($dateI)
    {
        $this->dateI = $dateI;
    }

    /**
     * @return mixed
     */
    public function getPartenaire ()
    {
        return $this->partenaire;
    }

    /**
     * @param mixed $partenaire
     */
    public function setPartenaire ($partenaire)
    {
        $this->partenaire = $partenaire;
    }

    /**
     * @return int
     */
    public function getDone ()
    {
        return $this->done;
    }

    /**
     * @param int $done
     */
    public function setDone ($done)
    {
        $this->done = $done;
    }


}
