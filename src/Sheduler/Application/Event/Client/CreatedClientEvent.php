<?php

declare(strict_types=1);

namespace Sheduler\Application\Event\Client;

use Sheduler\Domain\Client\Client;

final class CreatedClientEvent
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getClient(): Client
    {
        return $this->client;
    }
}