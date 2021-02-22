<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Repository\Timeslot;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sheduler\Domain\Timeslot\Timeslot;

final class TimeslotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Timeslot::class);
    }
}