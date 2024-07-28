<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paitient extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'house_number'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
