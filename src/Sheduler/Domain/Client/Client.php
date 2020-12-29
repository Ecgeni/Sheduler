<?php
declare(strict_types=1);

namespace Sheduler\Domain\Client;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

/**
 * @Entity()
 */
class Client
{
    /**
     * @Column(type="primary")
     */
    private int $id;

    /**
     * @Column(type="string")
     */
    private string $name;

    public function __constructor(string $name)
    {
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}