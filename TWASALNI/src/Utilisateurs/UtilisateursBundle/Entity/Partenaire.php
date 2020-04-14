<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Partenaire
 *
 * @ORM\Table(name="partenaire")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\PartenaireRepository")
 */
class Partenaire
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
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(min=2)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(min=2)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     * @Assert\Email
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $mdp;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @ORM\ManyToOne(targetEntity="Taxi")
     * @ORM\JoinColumn(name="taxi_id",referencedColumnName="matricule")
     */
    private $taxi;


    /**
     * @var int
     *
     * @ORM\Column(name="nb", type="integer")
     */
    private $nb;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Partenaire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Partenaire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Partenaire
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Partenaire
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Partenaire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }




    /**
     * Set matriculeTaxi
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Taxi $matriculeTaxi
     *
     * @return Partenaire
     */
    public function setMatriculeTaxi(\Utilisateurs\UtilisateursBundle\Entity\Taxi $matriculeTaxi = null)
    {
        $this->matriculeTaxi = $matriculeTaxi;

        return $this;
    }



    /**
     * Set taxi
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Taxi $taxi
     *
     * @return Partenaire
     */
    public function setTaxi(\Utilisateurs\UtilisateursBundle\Entity\Taxi $taxi = null)
    {
        $this->taxi = $taxi;

        return $this;
    }

    /**
     * Get taxi
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Taxi
     */
    public function getTaxi()
    {
        return $this->taxi;
    }

    /**
     * Set nb.
     *
     * @param int $nb
     *
     * @return Partenaire
     */
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get nb.
     *
     * @return int
     */
    public function getNb()
    {
        return $this->nb;
    }
}
