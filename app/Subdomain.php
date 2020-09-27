<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdomain extends Model
{
    protected $casts = ['phone' => 'array'];
}
