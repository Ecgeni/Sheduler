<?php

declare(strict_types=1);

namespace Sheduler\Application\EventListener\Client;

use Doctrine\ORM\EntityManagerInterface;
use Sheduler\Application\Event\Client\CreatedClientEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class ClientModifySubscriber implements EventSubscriberInterface
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public static function getSubscribedEvents()
    {
        return [
            CreatedClientEvent::class => 'onCreate',
        ];
    }

    public function onCreate(CreatedClientEvent $event): void
    {
        $client = $event->getClient();

        $this->em->persist($client);
        $this->em->flush();
    }
}