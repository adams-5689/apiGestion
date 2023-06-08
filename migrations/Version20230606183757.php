<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230606183757 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agencegestionnaire DROP FOREIGN KEY agencegestionnaire_ibfk_2');
        $this->addSql('DROP INDEX gestionnaire_id ON agencegestionnaire');
        $this->addSql('CREATE INDEX IDX_BC53894E6885AC1B ON agencegestionnaire (gestionnaire_id)');
        $this->addSql('ALTER TABLE agencegestionnaire ADD CONSTRAINT agencegestionnaire_ibfk_2 FOREIGN KEY (gestionnaire_id) REFERENCES gestionnaireimmobilier (id)');
        $this->addSql('ALTER TABLE appartement CHANGE immeuble_id immeuble_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demanderenovation CHANGE locataire_id locataire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE paiement CHANGE locataire_id locataire_id INT DEFAULT NULL, CHANGE gestionnaire_immobilier_id gestionnaire_immobilier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE residence_id residence_id INT DEFAULT NULL, CHANGE gestionnaire_immobilier_id gestionnaire_immobilier_id INT DEFAULT NULL, CHANGE utilisateur_id utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE residence CHANGE gestionnaire_immobilier_id gestionnaire_immobilier_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agencegestionnaire DROP FOREIGN KEY FK_BC53894E6885AC1B');
        $this->addSql('DROP INDEX idx_bc53894e6885ac1b ON agencegestionnaire');
        $this->addSql('CREATE INDEX gestionnaire_id ON agencegestionnaire (gestionnaire_id)');
        $this->addSql('ALTER TABLE agencegestionnaire ADD CONSTRAINT FK_BC53894E6885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES gestionnaireimmobilier (id)');
        $this->addSql('ALTER TABLE appartement CHANGE immeuble_id immeuble_id INT NOT NULL');
        $this->addSql('ALTER TABLE demanderenovation CHANGE locataire_id locataire_id INT NOT NULL');
        $this->addSql('ALTER TABLE paiement CHANGE gestionnaire_immobilier_id gestionnaire_immobilier_id INT NOT NULL, CHANGE locataire_id locataire_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE utilisateur_id utilisateur_id INT NOT NULL, CHANGE residence_id residence_id INT NOT NULL, CHANGE gestionnaire_immobilier_id gestionnaire_immobilier_id INT NOT NULL');
        $this->addSql('ALTER TABLE residence CHANGE gestionnaire_immobilier_id gestionnaire_immobilier_id INT NOT NULL');
    }
}
