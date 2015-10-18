<?php

namespace AppBundle\Repo;

use Doctrine\ORM\EntityRepository;


/**
 * Class UserRepository
 * @package AppBundle\Repo
 */
class UserRepository extends EntityRepository
{

    /**
     * @param $orderType
     * @return array
     */
    public function findAllOrderedByUsername($orderType)
    {
        return $this->getEntityManager()->createQuery('SELECT p FROM AppBundle:User p ORDER BY p.username '.$orderType)->getResult();
    }

}