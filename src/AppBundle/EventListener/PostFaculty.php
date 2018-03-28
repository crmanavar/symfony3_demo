<?php
/**
 * Created by PhpStorm.
 * User: cmanavar
 * Date: 28/03/18
 * Time: 4:07 PM
 */

namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Faculty;

class PostFaculty
{
    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof Faculty) {
            return;
        }
        $entityManager = $args->getEntityManager();
        $dql = "Update faculty set modified = NOW() where id =".$entity->getId();;
        $stmt = $entityManager->getConnection()->prepare($dql);
        $stmt->execute();
    }
}