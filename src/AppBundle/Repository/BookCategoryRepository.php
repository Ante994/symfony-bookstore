<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * BookCategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookCategoryRepository extends EntityRepository
{
  public function findCategoryByName($name)
  {
    $dql = 'SELECT c FROM AppBundle:BookCategory AS c WHERE c.categoryName = :name';

    return $this->getEntityManager()
      ->createQuery($dql)
      ->setParameter('name', $name)
      ->getOneOrNullResult();
  }

  public function findCategoryById($id)
   {
       $dql = 'SELECT a FROM AppBundle:BookCategory AS a WHERE a.id = :id';

       return $this->getEntityManager()
           ->createQuery($dql)
           ->setParameter('id', $id)
           ->getOneOrNullResult();
   }
}
