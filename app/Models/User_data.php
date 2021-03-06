<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
        'state',
        'country',
        'favorite_character',
        'favorite_comic'
    ];
}
