<?php

namespace xiaokus\Voyager\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use xiaokus\Voyager\Database\Types\Type;

class GeometryType extends Type
{
    const NAME = 'geometry';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'geometry';
    }
}
