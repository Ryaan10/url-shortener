<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url2 extends Model
{
    protected $fillable = [
        'short_link', 'original_link'
    ];
}
