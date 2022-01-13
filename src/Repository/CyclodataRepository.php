<?php

namespace App\Repository;

use App\Entity\Cyclodata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cyclodata|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cyclodata|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cyclodata[]    findAll()
 * @method Cyclodata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CyclodataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cyclodata::class);
    }

    // /**
    //  * @return Cyclodata[] Returns an array of Cyclodata objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cyclodata
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
