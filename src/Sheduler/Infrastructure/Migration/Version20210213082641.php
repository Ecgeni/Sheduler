<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210213082641 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add table shedule for contractor.';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("
        CREATE TABLE shedules(
            id SERIAL,
            contractor_id INTEGER NOT NULL,
            datetime_from TIMESTAMP WITH TIME ZONE NOT NULL,
            datetime_to TIMESTAMP WITH TIME ZONE NOT NULL
        )");
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('shedules');
    }
}
