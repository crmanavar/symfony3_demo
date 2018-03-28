<?php
/**
 * Created by PhpStorm.
 * User: cmanavar
 * Date: 28/03/18
 * Time: 4:09 PM
 */

namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Department;

class PostDepartment
{
    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof Department) {
            return;
        }
        $entityManager = $args->getEntityManager();
        $dql = "Update department set modified = NOW() where id =".$entity->getId();;
        $stmt = $entityManager->getConnection()->prepare($dql);
        $stmt->execute();
    }
}