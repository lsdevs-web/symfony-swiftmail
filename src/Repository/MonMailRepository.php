<?php

namespace App\Repository;

use App\Entity\MonMail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MonMail|null find($id, $lockMode = null, $lockVersion = null)
 * @method MonMail|null findOneBy(array $criteria, array $orderBy = null)
 * @method MonMail[]    findAll()
 * @method MonMail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonMailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MonMail::class);
    }

    // /**
    //  * @return MonMail[] Returns an array of MonMail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MonMail
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
