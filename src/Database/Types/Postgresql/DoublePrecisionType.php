<?php

namespace xiaokus\Voyager\Database\Types\Postgresql;

use xiaokus\Voyager\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    const NAME = 'double precision';
    const DBTYPE = 'float8';
}
