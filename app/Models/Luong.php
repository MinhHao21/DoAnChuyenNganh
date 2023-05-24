<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luong extends Model
{
    use HasFactory;
    protected $casts = [
        'paid_date' => 'date',

    ];
}
