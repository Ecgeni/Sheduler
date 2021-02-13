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
        $table = $schema->createTable('timeslots');
        $table->addColumn('id', Types::INTEGER, ['unsigned' => true]);
        $table->addColumn('contractor_id', Types::INTEGER, ['unsigned' => true]);
        $table->addColumn('client_id', Types::INTEGER, ['unsigned' => true]);
        $table->addColumn('datetime_from', Types::DATETIMETZ_IMMUTABLE, ['null' => false]);
        $table->addColumn('time_duration', Types::INTEGER, ['null' => false]);
        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('timeslots');
    }
}
