<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\reservationRepository")
 */
class reservation
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
     * @ORM\Column(name="pointAchat", type="string", length=255)
     */
    private $pointAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="listAchats", type="string", length=2000)
     */
    private $listAchats;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255)
     */
    private $remarques;


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
     * Set pointAchat
     *
     * @param string $pointAchat
     *
     * @return reservation
     */
    public function setPointAchat($pointAchat)
    {
        $this->pointAchat = $pointAchat;

        return $this;
    }

    /**
     * Get pointAchat
     *
     * @return string
     */
    public function getPointAchat()
    {
        return $this->pointAchat;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return reservation
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return float
     */
    public function getPrix ()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix ($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getListAchats ()
    {
        return $this->listAchats;
    }

    /**
     * @param string $listAchats
     */
    public function setListAchats ($listAchats)
    {
        $this->listAchats = $listAchats;
    }

    /**
     * @return string
     */
    public function getRemarques ()
    {
        return $this->remarques;
    }

    /**
     * @param string $remarques
     */
    public function setRemarques ($remarques)
    {
        $this->remarques = $remarques;
    }

    /**
     * @return mixed
     */
    public function getClient ()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient ($client)
    {
        $this->client = $client;
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

}

