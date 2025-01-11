<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250104212535 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alumno ADD COLUMN foto VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__alumno AS SELECT id, apellidos, nombres, dni, telefono FROM alumno');
        $this->addSql('DROP TABLE alumno');
        $this->addSql('CREATE TABLE alumno (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, apellidos VARCHAR(50) NOT NULL, nombres VARCHAR(50) NOT NULL, dni VARCHAR(8) NOT NULL, telefono VARCHAR(9) DEFAULT NULL)');
        $this->addSql('INSERT INTO alumno (id, apellidos, nombres, dni, telefono) SELECT id, apellidos, nombres, dni, telefono FROM __temp__alumno');
        $this->addSql('DROP TABLE __temp__alumno');
    }
}
