<?php

namespace xiaokus\Voyager\Traits;

trait Seedable
{
    public function seed($class)
    {
        if (!class_exists($class)) {
            require_once $this->seedersPath.$class.'.php';
        }

        with(new $class())->run();
    }
}
