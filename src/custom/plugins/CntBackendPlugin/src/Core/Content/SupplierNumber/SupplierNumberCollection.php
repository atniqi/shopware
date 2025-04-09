<?php declare(strict_types=1);

namespace CntBackendPlugin\Core\Content\SupplierNumber;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(SupplierNumberEntity $entity)
 * @method void set(string $key, SupplierNumberEntity $entity)
 * @method SupplierNumberEntity[] getIterator()
 * @method SupplierNumberEntity[] getElements()
 * @method SupplierNumberEntity|null get(string $key)
 * @method SupplierNumberEntity|null first()
 * @method SupplierNumberEntity|null last()
 */
class SupplierNumberCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SupplierNumberEntity::class;
    }
}
