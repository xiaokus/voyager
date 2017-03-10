<?php

namespace Xiaokus\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Xiaokus\Voyager\Database\Types\Type;

class CidrType extends Type
{
    const NAME = 'cidr';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'cidr';
    }
}
