<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /**
     * The attributes that
     * 
     * 
     */
    protected $fillable = [
        'name',
        'image',
        'kind',
        'weight',
        'age',
        'breed',
        'location',
        'descrpition',
        'active',
        'adopted',
    ]
}
