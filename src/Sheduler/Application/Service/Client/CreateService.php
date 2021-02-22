<?php

declare(strict_types=1);

namespace Sheduler\Application\Service\Client;

use Sheduler\Application\Event\Client\CreatedClientEvent;
use Sheduler\Domain\Client\Client;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

final class CreateService
{
    private EventDispatcherInterface $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function do(string $name): void
    {
        $client = new Client($name);
        $this->eventDispatcher->dispatch(new CreatedClientEvent($client));
    }
}