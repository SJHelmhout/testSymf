<?php

namespace App\Repository;

use App\Entity\ToDoItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ToDoItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method ToDoItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method ToDoItem[]    findAll()
 * @method ToDoItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToDoItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ToDoItem::class);
    }

    // /**
    //  * @return ToDoItem[] Returns an array of ToDoItem objects
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
    public function findOneBySomeField($value): ?ToDoItem
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
