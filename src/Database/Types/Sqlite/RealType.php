<?php

namespace Xiaokus\Voyager\Database\Types\Sqlite;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Xiaokus\Voyager\Database\Types\Type;

class RealType extends Type
{
    const NAME = 'real';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'real';
    }
}
