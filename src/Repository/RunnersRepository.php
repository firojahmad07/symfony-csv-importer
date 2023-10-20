<?php

namespace App\Repository;

use App\Entity\Runners;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Runners>
 *
 * @method Runners|null find($id, $lockMode = null, $lockVersion = null)
 * @method Runners|null findOneBy(array $criteria, array $orderBy = null)
 * @method Runners[]    findAll()
 * @method Runners[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RunnersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Runners::class);
    }

//    /**
//     * @return Runners[] Returns an array of Runners objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Runners
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
