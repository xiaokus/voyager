<?php

namespace Xiaokus\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Xiaokus\Voyager\Database\Types\Type;

class XmlType extends Type
{
    const NAME = 'xml';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'xml';
    }
}
