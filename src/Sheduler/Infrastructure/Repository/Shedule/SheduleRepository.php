<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Repository\Shedule;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sheduler\Domain\Shedule\Shedule;

class SheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Shedule::class);
    }
}