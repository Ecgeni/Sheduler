<?php

declare(strict_types=1);

namespace Sheduler\Domain\Timeslot;

use Doctrine\ORM\Mapping as ORM;
use Sheduler\Infrastructure\Repository\Timeslot\TimeslotRepository;
use DateTimeImmutable;

/**
 * @ORM\Table(name="shedules")
 * @ORM\Entity(repositoryClass="TimeslotRepository::class")
 */
class Timeslot
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
     * @ORM\Column(type="integer", nullable=false)
     */
    private int $clientId;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=false)
     */
    private DateTimeImmutable $datetimeFrom;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private int $timeDuration;

    public function __construct(int $contractorId, int $clientId, DateTimeImmutable $datetimeFrom, int $timeDuration)
    {
        $this->contractorId = $contractorId;
        $this->clientId = $clientId;
        $this->datetimeFrom = $datetimeFrom;
        $this->timeDuration = $timeDuration;
    }

    public function getContractorId(): int
    {
        return $this->contractorId;
    }

    public function getClientId(): int
    {
        return $this->clientId;
    }

    public function getDatetimeFrom(): DateTimeImmutable
    {
        return $this->datetimeFrom;
    }

    public function getTimeDuration(): int
    {
        return $this->timeDuration;
    }
}