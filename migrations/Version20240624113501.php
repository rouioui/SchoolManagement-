<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240624113501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE departements_enseignant (departements_id INT NOT NULL, enseignant_id INT NOT NULL, INDEX IDX_F1D2FD121DB279A6 (departements_id), INDEX IDX_F1D2FD12E455FCC0 (enseignant_id), PRIMARY KEY(departements_id, enseignant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE departements_enseignant ADD CONSTRAINT FK_F1D2FD121DB279A6 FOREIGN KEY (departements_id) REFERENCES departements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE departements_enseignant ADD CONSTRAINT FK_F1D2FD12E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours ADD departement_id INT NOT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CCCF9E01E FOREIGN KEY (departement_id) REFERENCES departements (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CCCF9E01E ON cours (departement_id)');
        $this->addSql('ALTER TABLE departements ADD images VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departements_enseignant DROP FOREIGN KEY FK_F1D2FD121DB279A6');
        $this->addSql('ALTER TABLE departements_enseignant DROP FOREIGN KEY FK_F1D2FD12E455FCC0');
        $this->addSql('DROP TABLE departements_enseignant');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CCCF9E01E');
        $this->addSql('DROP INDEX IDX_FDCA8C9CCCF9E01E ON cours');
        $this->addSql('ALTER TABLE cours DROP departement_id');
        $this->addSql('ALTER TABLE departements DROP images');
    }
}
