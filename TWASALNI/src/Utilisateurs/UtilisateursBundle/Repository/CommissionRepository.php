<?php

namespace Utilisateurs\UtilisateursBundle\Repository;

/**
 * CommissionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommissionRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCommission($id)
    {
        $query=$this->getEntityManager()->createQuery("SELECT i FROM UtilisateursUtilisateursBundle:Commission i 
WHERE i.partenaire=$id");
        return $query->getResult();
    }
    public function findCommissionbyCourse($id)
    {
        $query=$this->getEntityManager()->createQuery("SELECT i FROM UtilisateursUtilisateursBundle:Commission i 
WHERE i.course=$id");
        return $query->getResult();
    }

    public function findComissionbyInventaire($id)
    {
        $query=$this->getEntityManager()->createQuery("SELECT i FROM UtilisateursUtilisateursBundle:Commission i 
WHERE i.inventairec=$id");
        return $query->getResult();
    }



}
