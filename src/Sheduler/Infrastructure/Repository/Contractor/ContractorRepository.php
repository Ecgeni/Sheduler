<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Repository\Contractor;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sheduler\Domain\Contractor\Contractor;

class ContractorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contractor::class);
    }
}