<?php
declare(strict_types=1);

namespace Sheduler\Domain\Contractor;

use Doctrine\ORM\Mapping as ORM;
use Sheduler\Infrastructure\Repository\Contractor\ContractorRepository;

/**
 * @ORM\Table(name="clients")
 * @ORM\Entity(repositoryClass="ContractorRepository::class")
 */
class Contractor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}