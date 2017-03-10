<?php

namespace Xiaokus\Voyager\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Xiaokus\Voyager\Database\Types\Type;

class PolygonType extends Type
{
    const NAME = 'polygon';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'polygon';
    }
}
