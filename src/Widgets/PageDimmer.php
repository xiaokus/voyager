<?php

namespace xiaokus\Voyager\Widgets;

use Arrilot\Widgets\AbstractWidget;
use xiaokus\Voyager\Facades\Voyager;

class PageDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Voyager::model('Page')->count();
        $string = $count == 1 ? '模块' : '模块';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} {$string}",
            'text'   => "系统有 {$count}  个功能. 点击进入系统模块.",
            'button' => [
                'text' => '系统模块',
                'link' => route('voyager.pages.index'),
            ],
            'image' => url(config('voyager.assets_path').'/images/widget-backgrounds/03.png'),
        ]));
    }
}
