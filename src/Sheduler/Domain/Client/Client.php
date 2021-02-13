<?php
declare(strict_types=1);

namespace Sheduler\Domain\Client;

use Doctrine\ORM\Mapping as ORM;
use Sheduler\Infrastructure\Repository\Client\ClientRepository;

/**
 * @ORM\Table(name="clients")
 * @ORM\Entity(repositoryClass="ClientRepository::class")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    public function __constructor(string $name)
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