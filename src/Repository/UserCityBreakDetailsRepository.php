<?php

namespace App\Repository;

use App\Entity\UserCityBreakDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserCityBreakDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserCityBreakDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserCityBreakDetails[]    findAll()
 * @method UserCityBreakDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserCityBreakDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserCityBreakDetails::class);
    }

    // /**
    //  * @return UserCityBreakDetails[] Returns an array of UserCityBreakDetails objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserCityBreakDetails
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
