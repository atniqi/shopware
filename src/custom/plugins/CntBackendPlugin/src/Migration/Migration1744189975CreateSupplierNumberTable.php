<?php declare(strict_types=1);

namespace CntBackendPlugin\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1744189975CreateSupplierNumberTable extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1744189975;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `supplier_number` (
    `id` BINARY(16) NOT NULL,
    `name` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `description` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `active` TINYINT(1) COLLATE utf8mb4_unicode_ci, 
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3),
    PRIMARY KEY (`id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;
SQL;

        $connection->executeStatement($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
