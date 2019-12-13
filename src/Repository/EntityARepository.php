<?php

namespace App\Repository;

use App\Entity\EntityA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EntityA|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntityA|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntityA[]    findAll()
 * @method EntityA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntityARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntityA::class);
    }

    // /**
    //  * @return EntityA[] Returns an array of EntityA objects
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
    public function findOneBySomeField($value): ?EntityA
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
