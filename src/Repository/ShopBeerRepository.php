<?php

namespace App\Repository;

use App\Entity\ShopBeer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopBeer>
 *
 * @method ShopBeer|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopBeer|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopBeer[]    findAll()
 * @method ShopBeer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopBeerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopBeer::class);
    }

    public function add(ShopBeer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopBeer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

   /**
    * @return ShopBeer[] Returns an array of ShopBeer objects
    */
   public function findByShopId($value): array
   {
       return $this->createQueryBuilder('s')
           ->andWhere('s.shop = :val')
           ->setParameter('val', $value)
           ->orderBy('s.id', 'ASC')
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findByShopId($value): ?ShopBeer
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.shop = :val')
//            ->setParameters(array('param1'=> $param1, 'param2' => $param2))
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
