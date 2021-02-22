<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210213074205 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add table clients.';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("
        CREATE TABLE clients(
            id SERIAL,
            name CHAR(255) NOT NULL
        )");
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('clients');
    }
}
