<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Repository\Client;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sheduler\Domain\Client\Client;

final class ClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }

    public function findByName(string $name): ?Client
    {
        $query = $this->createQueryBuilder('client')
            ->where('client.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->setMaxResults(1);

        return $query->getOneOrNullResult();
    }
}