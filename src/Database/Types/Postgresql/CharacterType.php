<?php

namespace xiaokus\Voyager\Database\Types\Postgresql;

use xiaokus\Voyager\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    const NAME = 'character';
    const DBTYPE = 'bpchar';
}
