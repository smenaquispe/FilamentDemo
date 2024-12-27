<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $casts = [
        'key_values' => 'array',
        'tags' => 'array',
    ];

}
