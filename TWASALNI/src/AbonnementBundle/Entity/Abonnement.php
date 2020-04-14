<?php

namespace AbonnementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity(repositoryClass="AbonnementBundle\Repository\AbonnementRepository")
 */
class Abonnement
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
     * @ORM\Column(name="positionDepart", type="string", length=255)
     */
    private $positionDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="positionArrive", type="string", length=255)
     */
    private $positionArrive;

    /**
     * @var string
     *
     * @ORM\Column(name="heureDepart", type="string", length=255)
     */
    private $heureDepart;
    /**
     * @ORM\ManyToOne(targetEntity="\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(name="Utilisateurs_id",referencedColumnName="id")
     */
    private $Utilisateurs;

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
     * Set positionDepart
     *
     * @param string $positionDepart
     *
     * @return Abonnement
     */
    public function setPositionDepart($positionDepart)
    {
        $this->positionDepart = $positionDepart;

        return $this;
    }

    /**
     * Get positionDepart
     *
     * @return string
     */
    public function getPositionDepart()
    {
        return $this->positionDepart;
    }

    /**
     * Set positionArrive
     *
     * @param string $positionArrive
     *
     * @return Abonnement
     */
    public function setPositionArrive($positionArrive)
    {
        $this->positionArrive = $positionArrive;

        return $this;
    }

    /**
     * Get positionArrive
     *
     * @return string
     */
    public function getPositionArrive()
    {
        return $this->positionArrive;
    }

    /**
     * Set heureDepart
     *
     * @param string $heureDepart
     *
     * @return Abonnement
     */
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    /**
     * Get heureDepart
     *
     * @return string
     */
    public function getHeureDepart()
    {
        return $this->heureDepart;
    }

    /**
     * Set utilisateurs
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurs
     *
     * @return Abonnement
     */
    public function setUtilisateurs($utilisateurs )
    {
        $this->Utilisateurs = $utilisateurs;

        return $this;
    }

    /**
     * Get utilisateurs
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getUtilisateurs()
    {
        return $this->Utilisateurs;
    }
}
