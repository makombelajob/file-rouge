<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250604123804 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE courses_categories (courses_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_30ED10BDF9295384 (courses_id), INDEX IDX_30ED10BDA21214B7 (categories_id), PRIMARY KEY(courses_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE orders_courses (orders_id INT NOT NULL, courses_id INT NOT NULL, INDEX IDX_58D02837CFFE9AD6 (orders_id), INDEX IDX_58D02837F9295384 (courses_id), PRIMARY KEY(orders_id, courses_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE users_courses (users_id INT NOT NULL, courses_id INT NOT NULL, INDEX IDX_59A52E8667B3B43D (users_id), INDEX IDX_59A52E86F9295384 (courses_id), PRIMARY KEY(users_id, courses_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses_categories ADD CONSTRAINT FK_30ED10BDF9295384 FOREIGN KEY (courses_id) REFERENCES courses (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses_categories ADD CONSTRAINT FK_30ED10BDA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders_courses ADD CONSTRAINT FK_58D02837CFFE9AD6 FOREIGN KEY (orders_id) REFERENCES orders (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders_courses ADD CONSTRAINT FK_58D02837F9295384 FOREIGN KEY (courses_id) REFERENCES courses (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_courses ADD CONSTRAINT FK_59A52E8667B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_courses ADD CONSTRAINT FK_59A52E86F9295384 FOREIGN KEY (courses_id) REFERENCES courses (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders ADD users_id INT NOT NULL, ADD status_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE6BF700BD FOREIGN KEY (status_id) REFERENCES status (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E52FFDEE67B3B43D ON orders (users_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E52FFDEE6BF700BD ON orders (status_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE courses_categories DROP FOREIGN KEY FK_30ED10BDF9295384
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses_categories DROP FOREIGN KEY FK_30ED10BDA21214B7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders_courses DROP FOREIGN KEY FK_58D02837CFFE9AD6
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders_courses DROP FOREIGN KEY FK_58D02837F9295384
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_courses DROP FOREIGN KEY FK_59A52E8667B3B43D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_courses DROP FOREIGN KEY FK_59A52E86F9295384
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE courses_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE orders_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE users_courses
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE67B3B43D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE6BF700BD
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_E52FFDEE67B3B43D ON orders
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_E52FFDEE6BF700BD ON orders
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orders DROP users_id, DROP status_id
        SQL);
    }
}
