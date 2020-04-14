<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Taxi
 *
 * @ORM\Table(name="taxi")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\TaxiRepository")
 */
class Taxi
{

    /**
     * @var integer
     *
     * @ORM\Column(name="matricule", type="integer")
     * @ORM\Id
     * @Assert\GreaterThan(
     * value="99",
     * message="Le numéro de la matricule doit etre composé minimum de 3 chiffres"
     * )
     */
    private $matricul;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;




    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Taxi
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Taxi
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Taxi
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return int
     */
    public function getMatricul()
    {
        return $this->matricul;
    }

    /**
     * @param int $matricul
     */
    public function setMatricul($matricul)
    {
        $this->matricul = $matricul;
    }

}
