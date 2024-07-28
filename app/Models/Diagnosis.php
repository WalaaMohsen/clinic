<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable = [
        'severity',
        'general_diagnosis',
        'detaild_diagnosis',
        'prescription_image',
    ];
    protected $hidden = [
        'remember_token',
    ];
}
