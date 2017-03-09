<?php

namespace xiaokus\Voyager\Widgets;

use Arrilot\Widgets\AbstractWidget;
use xiaokus\Voyager\Facades\Voyager;

class UserDimmer extends AbstractWidget
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
        $count = Voyager::model('User')->count();
        $string = $count == 1 ? '用户' : '用户';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} {$string}",
            'text'   => "系统有 {$count} 个用户. 点击进入用户管理.",
            'button' => [
                'text' => '用户管理',
                'link' => route('voyager.users.index'),
            ],
            'image' => url(config('voyager.assets_path').'/images/widget-backgrounds/02.png'),
        ]));
    }
}
