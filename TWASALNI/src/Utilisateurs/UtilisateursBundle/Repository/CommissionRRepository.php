<?php

namespace Utilisateurs\UtilisateursBundle\Repository;

/**
 * CommissionRRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommissionRRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCommission($id)
    {
        $query=$this->getEntityManager()->createQuery("SELECT i FROM UtilisateursUtilisateursBundle:CommissionR i 
WHERE i.partenaire=$id");
        return $query->getResult();
    }
}
