<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'price',
        "phone",
    ];
}
