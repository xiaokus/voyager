<?php

namespace xiaokus\Voyager\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use xiaokus\Voyager\Database\Types\Type;

class LongTextType extends Type
{
    const NAME = 'longtext';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'longtext';
    }
}
