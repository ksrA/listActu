<?php 

namespace AppBundle\Repository;

use App\Entity\Actu;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ActuRepository extends EntityRepository
{
   /* public function findAllByOrderDesc()
    {
        $query = $this->createQueryBuilder('a')
            ->orderBy('a.date', 'DESC')
            ->getQuery();
        return $query->execute();
    }*/
}