<?php

namespace App\Repository;

use App\Entity\QuizzTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QuizzTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuizzTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuizzTable[]    findAll()
 * @method QuizzTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuizzTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuizzTable::class);
    }

    // /**
    //  * @return QuizzTable[] Returns an array of QuizzTable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuizzTable
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
