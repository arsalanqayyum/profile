<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class widgets extends Model
{
    protected $table = 'widgets';
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
}
