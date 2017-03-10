<?php

namespace Xiaokus\Voyager\Database\Types\Postgresql;

use Xiaokus\Voyager\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    const NAME = 'character varying';
    const DBTYPE = 'varchar';
}
