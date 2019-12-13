<?php

namespace App\Repository;

use App\Entity\EntityB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EntityB|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntityB|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntityB[]    findAll()
 * @method EntityB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntityBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntityB::class);
    }

    // /**
    //  * @return EntityB[] Returns an array of EntityB objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EntityB
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
