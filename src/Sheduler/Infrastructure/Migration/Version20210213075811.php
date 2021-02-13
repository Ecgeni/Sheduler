<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210213075811 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Добавить новую таблицу поставщиков.';
    }

    public function up(Schema $schema) : void
    {
        $table = $schema->createTable('contractors');
        $table->addColumn('id', Types::INTEGER, ['unsigned' => true]);
        $table->addColumn('name', Types::STRING, ['length' => 255]);
        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('contractors');
    }
}
