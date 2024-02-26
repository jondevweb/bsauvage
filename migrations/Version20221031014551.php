<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221031014551 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shop ADD email_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE shop ADD CONSTRAINT FK_AC6A4CA21AAEBB5A FOREIGN KEY (email_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_AC6A4CA21AAEBB5A ON shop (email_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shop DROP FOREIGN KEY FK_AC6A4CA21AAEBB5A');
        $this->addSql('DROP INDEX IDX_AC6A4CA21AAEBB5A ON shop');
        $this->addSql('ALTER TABLE shop DROP email_user_id');
    }
}
