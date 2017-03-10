<?php

namespace Xiaokus\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use Xiaokus\Voyager\Facades\Voyager;

class Role extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(Voyager::modelClass('User'), 'user_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Voyager::modelClass('Permission'));
    }
}
