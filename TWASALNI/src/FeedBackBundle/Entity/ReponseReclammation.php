<?php

namespace FeedBackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponseReclammation
 *
 * @ORM\Table(name="reponse_reclammation")
 * @ORM\Entity(repositoryClass="FeedBackBundle\Repository\ReponseReclammationRepository")
 */
class ReponseReclammation
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
     * @ORM\Column(name="sujet", type="string", length=50)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReponse", type="date")
     */
    private $dateReponse;

    /**
     * @ORM\ManyToOne(targetEntity="FeedBackBundle\Entity\Reclammations")
     * @ORM\JoinColumn(name="reclammation",referencedColumnName="id")
     */
    private $recla;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(name="client",referencedColumnName="id")
     */
    private $client;

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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return ReponseReclammation
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateReponse
     *
     * @param \DateTime $dateReponse
     *
     * @return ReponseReclammation
     */
    public function setDateReponse($dateReponse)
    {
        $this->dateReponse = $dateReponse;

        return $this;
    }

    /**
     * Get dateReponse
     *
     * @return \DateTime
     */
    public function getDateReponse()
    {
        return $this->dateReponse;
    }

    /**
     * @return mixed
     */
    public function getRecla()
    {
        return $this->recla;
    }

    /**
     * @param mixed $recla
     */
    public function setRecla($recla)
    {
        $this->recla = $recla;
    }

    /**
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param string $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

}