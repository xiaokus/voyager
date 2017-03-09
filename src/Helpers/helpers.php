<?php

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        return xiaokus\Voyager\Facades\Voyager::setting($key, $default);
    }
}

if (!function_exists('menu')) {
    function menu($menuName, $type = null, array $options = [])
    {
        return xiaokus\Voyager\Models\Menu::display($menuName, $type, $options);
    }
}
