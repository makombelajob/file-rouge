<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250626133834 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE categories_courses (categories_id INT NOT NULL, courses_id INT NOT NULL, INDEX IDX_81AF8BECA21214B7 (categories_id), INDEX IDX_81AF8BECF9295384 (courses_id), PRIMARY KEY(categories_id, courses_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories_courses ADD CONSTRAINT FK_81AF8BECA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories_courses ADD CONSTRAINT FK_81AF8BECF9295384 FOREIGN KEY (courses_id) REFERENCES courses (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses_categories DROP FOREIGN KEY FK_30ED10BDA21214B7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses_categories DROP FOREIGN KEY FK_30ED10BDF9295384
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE courses_categories
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE courses_categories (courses_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_30ED10BDF9295384 (courses_id), INDEX IDX_30ED10BDA21214B7 (categories_id), PRIMARY KEY(courses_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses_categories ADD CONSTRAINT FK_30ED10BDA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses_categories ADD CONSTRAINT FK_30ED10BDF9295384 FOREIGN KEY (courses_id) REFERENCES courses (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories_courses DROP FOREIGN KEY FK_81AF8BECA21214B7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories_courses DROP FOREIGN KEY FK_81AF8BECF9295384
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE categories_courses
        SQL);
    }
}
