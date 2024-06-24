<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240624120432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departements_enseignant DROP FOREIGN KEY FK_F1D2FD121DB279A6');
        $this->addSql('ALTER TABLE departements_enseignant DROP FOREIGN KEY FK_F1D2FD12E455FCC0');
        $this->addSql('DROP TABLE departements_enseignant');
        $this->addSql('ALTER TABLE departements CHANGE chef_departement_id chef_departement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE enseignant ADD departement_id INT NOT NULL');
        $this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1CCF9E01E FOREIGN KEY (departement_id) REFERENCES departements (id)');
        $this->addSql('CREATE INDEX IDX_81A72FA1CCF9E01E ON enseignant (departement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE departements_enseignant (departements_id INT NOT NULL, enseignant_id INT NOT NULL, INDEX IDX_F1D2FD121DB279A6 (departements_id), INDEX IDX_F1D2FD12E455FCC0 (enseignant_id), PRIMARY KEY(departements_id, enseignant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE departements_enseignant ADD CONSTRAINT FK_F1D2FD121DB279A6 FOREIGN KEY (departements_id) REFERENCES departements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE departements_enseignant ADD CONSTRAINT FK_F1D2FD12E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE departements CHANGE chef_departement_id chef_departement_id INT NOT NULL');
        $this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1CCF9E01E');
        $this->addSql('DROP INDEX IDX_81A72FA1CCF9E01E ON enseignant');
        $this->addSql('ALTER TABLE enseignant DROP departement_id');
    }
}
