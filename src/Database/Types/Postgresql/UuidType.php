<?php

namespace xiaokus\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use xiaokus\Voyager\Database\Types\Type;

class UuidType extends Type
{
    const NAME = 'uuid';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'uuid';
    }
}
