<?php

declare(strict_types=1);

namespace Sheduler\Domain\Shedule;

use Doctrine\ORM\Mapping as ORM;
use Sheduler\Infrastructure\Repository\Shedule\SheduleRepository;
use DateTimeImmutable;

/**
 * @ORM\Table(name="shedules")
 * @ORM\Entity(repositoryClass="SheduleRepository::class")
 */
class Shedule
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private int $contractorId;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=false)
     */
    private DateTimeImmutable $datetimeFrom;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=false)
     */
    private DateTimeImmutable $datetimeTo;

    public function __construct(int $contractorId, DateTimeImmutable $datetimeFrom, DateTimeImmutable $datetimeTo)
    {
        $this->contractorId = $contractorId;
        $this->datetimeFrom = $datetimeFrom;
        $this->datetimeTo = $datetimeTo;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContractorId(): int
    {
        return $this->contractorId;
    }

    public function getDatetimeFrom(): DateTimeImmutable
    {
        return $this->datetimeFrom;
    }

    public function getDatetimeTo(): DateTimeImmutable
    {
        return $this->datetimeTo;
    }
}