<?php

namespace App\Repository;

use App\Entity\TblPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TblPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblPost[]    findAll()
 * @method TblPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblPostRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TblPost::class);
    }

    // /**
    //  * @return TblPost[] Returns an array of TblPost objects
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
    public function findOneBySomeField($value): ?TblPost
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
