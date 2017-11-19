<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Role extends Model
{
    protected $fillable = ['name'];
}
