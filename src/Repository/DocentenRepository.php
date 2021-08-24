<?php

namespace App\Repository;

use App\Entity\Docenten;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Docenten|null find($id, $lockMode = null, $lockVersion = null)
 * @method Docenten|null findOneBy(array $criteria, array $orderBy = null)
 * @method Docenten[]    findAll()
 * @method Docenten[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocentenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Docenten::class);
    }

    // /**
    //  * @return Docenten[] Returns an array of Docenten objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Docenten
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
