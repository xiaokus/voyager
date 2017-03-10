<?php

namespace Xiaokus\Voyager\Database\Types\Postgresql;

use Xiaokus\Voyager\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    const NAME = 'double precision';
    const DBTYPE = 'float8';
}
