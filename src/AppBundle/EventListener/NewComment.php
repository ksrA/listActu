<?php

namespace AppBundle\EventListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use AppBundle\Entity\Comment;
use AppBundle\Entity\Actuality;

class NewComment
{
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        // On vérifie si l'entité qui a été persisté est Comment
        if (!$entity instanceof Comment) {
            return;
        }

        $em = $args->getObjectManager();
        
        // Puis on incrément le numberComment associé à l'actualité
        $entity->getActuality()->commentAdded();

        $em->persist($entity);
        $em->flush();
    }
}
