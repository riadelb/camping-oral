<?php

namespace App\Repository;

use App\Entity\Bien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bien>
 *
 * @method Bien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bien[]    findAll()
 * @method Bien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bien::class);
    }

    public function getBienWithId($id)
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery('
        SELECT
        b.nom,
        b.description,
        b.prix,
        b.imagePath,
        b.capacite,
        t.label
        FROM App\Entity\Bien b
        INNER JOIN b.type t
        WHERE b.id =:id')->setParameter('id', $id);

        return $query->getOneOrNullResult();
    }

    //delete un bien
    public function delete(Bien $bien, bool $flush = false)
    {
        $entityManager = $this->getEntityManager();
        $entityManager->remove($bien);

        if ($flush){
            $entityManager->flush();
        }
    }

    public function save(Bien $bien, bool $flush = false)
    {
        $this->getEntityManager()->persist($bien);
        if ($flush){
            $this->getEntityManager()->flush();
        }
    }
}
