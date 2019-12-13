<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191213113947 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE entity_a (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entity_a_entity_b (entity_a_id INT NOT NULL, entity_b_id INT NOT NULL, INDEX IDX_241B7DBE7312EA73 (entity_a_id), INDEX IDX_241B7DBE61A7459D (entity_b_id), PRIMARY KEY(entity_a_id, entity_b_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entity_b (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entity_a_entity_b ADD CONSTRAINT FK_241B7DBE7312EA73 FOREIGN KEY (entity_a_id) REFERENCES entity_a (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entity_a_entity_b ADD CONSTRAINT FK_241B7DBE61A7459D FOREIGN KEY (entity_b_id) REFERENCES entity_b (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE entity_a_entity_b DROP FOREIGN KEY FK_241B7DBE7312EA73');
        $this->addSql('ALTER TABLE entity_a_entity_b DROP FOREIGN KEY FK_241B7DBE61A7459D');
        $this->addSql('DROP TABLE entity_a');
        $this->addSql('DROP TABLE entity_a_entity_b');
        $this->addSql('DROP TABLE entity_b');
    }
}
