<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use FOS\MessageBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 */
class Thread extends BaseThread
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @var \FOS\MessageBundle\Model\ParticipantInterface
     */
    protected $createdBy;

    /**
     * @ORM\OneToMany(
     *   targetEntity="Utilisateurs\UtilisateursBundle\Entity\Message",
     *   mappedBy="thread"
     * )
     * @var Message[]|Collection
     */
    protected $messages;

    /**
     *
     * @ORM\OneToMany(
     *   targetEntity="Utilisateurs\UtilisateursBundle\Entity\ThreadMetadata",
     *   mappedBy="thread",
     *   cascade={"all"}
     * )
     * @var ThreadMetadata[]|Collection
     */
    protected $metadata;

    /**
     * Remove message.
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Message $message
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeMessage(\Utilisateurs\UtilisateursBundle\Entity\Message $message)
    {
        return $this->messages->removeElement($message);
    }

    /**
     * Add metadata.
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\ThreadMetadata $metadata
     *
     * @return Thread
     */
    public function addMetadatum(\Utilisateurs\UtilisateursBundle\Entity\ThreadMetadata $metadata)
    {
        $this->metadata[] = $metadata;

        return $this;
    }

    /**
     * Remove metadata.
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\ThreadMetadata $metadata
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeMetadatum(\Utilisateurs\UtilisateursBundle\Entity\ThreadMetadata $metadata)
    {
        return $this->metadata->removeElement($metadata);
    }

    /**
     * Get metadata.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}
