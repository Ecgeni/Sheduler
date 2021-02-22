<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210213084033 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add table timeslots.';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("
        CREATE TABLE timeslots(
            id SERIAL,
            contractor_id INTEGER NOT NULL,
            client_id INTEGER NOT NULL,
            datetime_from TIMESTAMP WITH TIME ZONE NOT NULL,
            time_duration INTEGER NOT NULL
        )");
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('timeslots');
    }
}
