<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200105131811 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category DROP category_id');
        $this->addSql('ALTER TABLE city_break_details ADD category_id_id INT NOT NULL, ADD title_country VARCHAR(20) NOT NULL, ADD air_company VARCHAR(20) NOT NULL, ADD description VARCHAR(254) NOT NULL, ADD start_date DATETIME NOT NULL, ADD stop_date DATETIME NOT NULL, ADD created_at DATETIME NOT NULL, ADD expires_at DATETIME NOT NULL, ADD nr_participanti INT NOT NULL, ADD is_active TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE city_break_details ADD CONSTRAINT FK_76E14B379777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_76E14B379777D11E ON city_break_details (category_id_id)');
        $this->addSql('ALTER TABLE user DROP user_id');
        $this->addSql('ALTER TABLE user_city_break_details ADD id_user_id INT NOT NULL, ADD id_city_break_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_city_break_details ADD CONSTRAINT FK_DAA5ADCC79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_city_break_details ADD CONSTRAINT FK_DAA5ADCC3EA7BC9A FOREIGN KEY (id_city_break_id) REFERENCES city_break_details (id)');
        $this->addSql('CREATE INDEX IDX_DAA5ADCC79F37AE5 ON user_city_break_details (id_user_id)');
        $this->addSql('CREATE INDEX IDX_DAA5ADCC3EA7BC9A ON user_city_break_details (id_city_break_id)');
        $this->addSql('ALTER TABLE user_details ADD user_id_id INT NOT NULL, ADD full_name VARCHAR(50) NOT NULL, ADD mobile VARCHAR(10) NOT NULL, ADD email VARCHAR(30) NOT NULL, ADD cnp VARCHAR(14) NOT NULL');
        $this->addSql('ALTER TABLE user_details ADD CONSTRAINT FK_2A2B15809D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2A2B15809D86650F ON user_details (user_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE city_break_details DROP FOREIGN KEY FK_76E14B379777D11E');
        $this->addSql('DROP INDEX IDX_76E14B379777D11E ON city_break_details');
        $this->addSql('ALTER TABLE city_break_details DROP category_id_id, DROP title_country, DROP air_company, DROP description, DROP start_date, DROP stop_date, DROP created_at, DROP expires_at, DROP nr_participanti, DROP is_active');
        $this->addSql('ALTER TABLE user ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_city_break_details DROP FOREIGN KEY FK_DAA5ADCC79F37AE5');
        $this->addSql('ALTER TABLE user_city_break_details DROP FOREIGN KEY FK_DAA5ADCC3EA7BC9A');
        $this->addSql('DROP INDEX IDX_DAA5ADCC79F37AE5 ON user_city_break_details');
        $this->addSql('DROP INDEX IDX_DAA5ADCC3EA7BC9A ON user_city_break_details');
        $this->addSql('ALTER TABLE user_city_break_details DROP id_user_id, DROP id_city_break_id');
        $this->addSql('ALTER TABLE user_details DROP FOREIGN KEY FK_2A2B15809D86650F');
        $this->addSql('DROP INDEX UNIQ_2A2B15809D86650F ON user_details');
        $this->addSql('ALTER TABLE user_details DROP user_id_id, DROP full_name, DROP mobile, DROP email, DROP cnp');
    }
}
