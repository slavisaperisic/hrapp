<?php

namespace AppBundle\Repo;

use Doctrine\ORM\EntityRepository;


/**
 * Class JobRepository
 * @package AppBundle\Repo
 */
class JobRepository extends EntityRepository
{

    /**
     * @param $orderType
     * @return array
     */
    public function findAllOrderedByTitle($orderType)
    {
        return $this->getEntityManager()->createQuery('SELECT p FROM AppBundle:Job p ORDER BY p.title '.$orderType)->getResult();
    }

    /**
     * @param $user_id
     * @return array
     */
    public function findAllByUser($user_id) {

        return $this
            ->createQueryBuilder('j')
            ->where('j.user = :user_id')
            ->setParameter('user_id', $user_id)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param $user_id
     * @return array
     */
    public function findNumberByUser($user_id) {

        $numberOfJobsInserted = $this
            ->createQueryBuilder('j')
            ->select('count(j.id)')
            ->where('j.user = :user_id')
            ->setParameter('user_id', $user_id)
            ->getQuery()
            ->getSingleScalarResult();
        return $numberOfJobsInserted;
    }

}