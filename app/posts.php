<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = 'posts';
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
}
