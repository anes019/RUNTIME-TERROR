<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commission
 *
 * @ORM\Table(name="commission_R")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\CommissionRRepository")
 */
class CommissionR
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
     * @ORM\Column(name="date_commission", type="datetime")
     */
    private $dateCommission;


    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumn(name="partenaire_id",referencedColumnName="id")
     */
    private $partenaire;


    /**
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumn(name="reservation_id",referencedColumnName="id")
     */
    private $reservation;



    /**
     * @ORM\ManyToOne(targetEntity="InventaireR")
     * @ORM\JoinColumn(name="inventaireR_id",referencedColumnName="id")
     */
    private $inventaireR;


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
    public function getPourcentage ()
    {
        return $this->pourcentage;
    }

    /**
     * @param float $pourcentage
     */
    public function setPourcentage ($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }

    /**
     * @return \DateTime
     */
    public function getDateCommission ()
    {
        return $this->dateCommission;
    }

    /**
     * @param \DateTime $dateCommission
     */
    public function setDateCommission ($dateCommission)
    {
        $this->dateCommission = $dateCommission;
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
     * @return mixed
     */
    public function getReservation ()
    {
        return $this->reservation;
    }

    /**
     * @param mixed $reservation
     */
    public function setReservation ($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * @return mixed
     */
    public function getInventaireR ()
    {
        return $this->inventaireR;
    }

    /**
     * @param mixed $inventaireR
     */
    public function setInventaireR ($inventaireR)
    {
        $this->inventaireR = $inventaireR;
    }


}
