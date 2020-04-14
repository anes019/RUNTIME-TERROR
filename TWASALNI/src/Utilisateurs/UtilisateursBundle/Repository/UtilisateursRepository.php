<?php
/**
 * Created by PhpStorm.
 * User: Arbi
 * Date: 2/11/2020
 * Time: 9:13 AM
 */

namespace Utilisateurs\UtilisateursBundle\Repository;


class UtilisateursRepository extends \Doctrine\ORM\EntityRepository
{
    /*public function findrole()
    {
        $query=$this->getEntityManager()->createQuery("SELECT p FROM UtilisateursUtilisateursBundle:Utilisateurs p 
WHERE p.roles='a:1:{i:0;s:15:\"ROLE_PARTENAIRE\";}'");
        return $query->getResult();
    }*/

    public function findrole()
    {
        $query=$this->getEntityManager()->createQuery("SELECT p FROM UtilisateursUtilisateursBundle:Utilisateurs p 
WHERE p.roles like '%ROLE_PARTENAIRE%'");
        return $query->getResult();
    }

}