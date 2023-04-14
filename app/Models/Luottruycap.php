<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luottruycap extends Model
{
    use HasFactory;
    protected $casts = [
        'created_at' => 'date',

    ];
}
