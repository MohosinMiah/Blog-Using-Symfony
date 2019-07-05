<?php

namespace App\Repository;

use App\Entity\TblStory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TblStory|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblStory|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblStory[]    findAll()
 * @method TblStory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblStoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TblStory::class);
    }

    // /**
    //  * @return TblStory[] Returns an array of TblStory objects
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
    public function findOneBySomeField($value): ?TblStory
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
