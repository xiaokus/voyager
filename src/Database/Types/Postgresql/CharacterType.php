<?php

namespace Xiaokus\Voyager\Database\Types\Postgresql;

use Xiaokus\Voyager\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    const NAME = 'character';
    const DBTYPE = 'bpchar';
}
