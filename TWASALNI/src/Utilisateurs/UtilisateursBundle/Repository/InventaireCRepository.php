<?php

namespace Utilisateurs\UtilisateursBundle\Repository;

/**
 * InventaireCRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InventaireCRepository extends \Doctrine\ORM\EntityRepository
{
    public function findInventaire($id)
    {
        $query=$this->getEntityManager()->createQuery("SELECT i FROM UtilisateursUtilisateursBundle:InventaireC i 
WHERE i.partenaire=$id and i.paye=0");
        return $query->getResult();
    }
    public function findInventaireNonPaye()
    {
        $query=$this->getEntityManager()->createQuery("SELECT i FROM UtilisateursUtilisateursBundle:InventaireC i 
WHERE i.paye=0");
        return $query->getResult();
    }
    public function findInventairePaye()
    {
        $query=$this->getEntityManager()->createQuery("SELECT i FROM UtilisateursUtilisateursBundle:InventaireC i 
WHERE i.paye=1");
        return $query->getResult();
    }

    public function findPartenaireNonpayé($id)
    {
        $query=$this->getEntityManager()->createQuery("SELECT i FROM UtilisateursUtilisateursBundle:InventaireC i 
WHERE i.partenaire=$id AND i.paye=0 ");
        return $query->getResult();
    }
}
