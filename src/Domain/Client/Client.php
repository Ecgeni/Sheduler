<?php
declare(strict_types=1);

namespace Domain\Client;

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

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}