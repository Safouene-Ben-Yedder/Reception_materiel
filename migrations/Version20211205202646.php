<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211205202646 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appeldoffre_imprimente ADD marque VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE appeldoffre_pcperso ADD marque VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE appeldoffre_pcsds ADD cpu_cores VARCHAR(255) DEFAULT NULL, ADD marque VARCHAR(255) DEFAULT NULL, ADD cpu_threads_par_core VARCHAR(255) DEFAULT NULL, ADD cpu_max_clock VARCHAR(255) DEFAULT NULL, ADD gpu_memory VARCHAR(255) DEFAULT NULL, DROP cache, DROP ecran');
        $this->addSql('ALTER TABLE appeldoffre_routeur ADD marque VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE appeldoffre_switch ADD marque VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE offredappel_imprimente ADD marque VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE offredappel_pcperso ADD marque VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE offredappel_pcsds ADD marque VARCHAR(255) DEFAULT NULL, ADD cpu_cores VARCHAR(255) DEFAULT NULL, ADD cpu_threads_par_core VARCHAR(255) DEFAULT NULL, ADD cpu_max_clock VARCHAR(255) DEFAULT NULL, ADD gpu_memory VARCHAR(255) DEFAULT NULL, DROP cache, DROP ecran');
        $this->addSql('ALTER TABLE offredappel_routeur ADD marque VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE offredappel_switch ADD marque VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appeldoffre_imprimente DROP marque');
        $this->addSql('ALTER TABLE appeldoffre_pcperso DROP marque');
        $this->addSql('ALTER TABLE appeldoffre_pcsds ADD cache VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD ecran VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP cpu_cores, DROP marque, DROP cpu_threads_par_core, DROP cpu_max_clock, DROP gpu_memory');
        $this->addSql('ALTER TABLE appeldoffre_routeur DROP marque');
        $this->addSql('ALTER TABLE appeldoffre_switch DROP marque');
        $this->addSql('ALTER TABLE offredappel_imprimente DROP marque');
        $this->addSql('ALTER TABLE offredappel_pcperso DROP marque');
        $this->addSql('ALTER TABLE offredappel_pcsds ADD cache VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD ecran VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP marque, DROP cpu_cores, DROP cpu_threads_par_core, DROP cpu_max_clock, DROP gpu_memory');
        $this->addSql('ALTER TABLE offredappel_routeur DROP marque');
        $this->addSql('ALTER TABLE offredappel_switch DROP marque');
    }
}
