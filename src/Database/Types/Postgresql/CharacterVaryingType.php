<?php

namespace xiaokus\Voyager\Database\Types\Postgresql;

use xiaokus\Voyager\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    const NAME = 'character varying';
    const DBTYPE = 'varchar';
}
