<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //

    protected $fillable = [
        'text',
        'url'
    ];
}
