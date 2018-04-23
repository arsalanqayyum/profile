<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table = 'sliders';
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
}
