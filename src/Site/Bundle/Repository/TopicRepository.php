<?php
namespace Site\Bundle\Repository;

use Doctrine\ORM\EntityRepository;

class TopicRepository extends EntityRepository
{
    public function findAllOrderedByRank()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT t FROM CoreBundle:Topic t ORDER BY t.rank DESC')
            ->getResult();
    }
}