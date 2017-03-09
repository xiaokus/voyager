<?php

namespace xiaokus\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use xiaokus\Voyager\Database\Types\Type;

class XmlType extends Type
{
    const NAME = 'xml';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'xml';
    }
}
