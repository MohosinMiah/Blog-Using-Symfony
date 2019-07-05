<?php

namespace App\Repository;

use App\Entity\TblAuthor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TblAuthor|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblAuthor|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblAuthor[]    findAll()
 * @method TblAuthor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblAuthorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TblAuthor::class);
    }

    // /**
    //  * @return TblAuthor[] Returns an array of TblAuthor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TblAuthor
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
