<?php

namespace xiaokus\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use xiaokus\Voyager\Database\Types\Type;

class MacAddrType extends Type
{
    const NAME = 'macaddr';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'macaddr';
    }
}
