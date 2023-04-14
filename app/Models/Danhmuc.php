<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;

    public function loaidanhmuc()
    {
        return $this->belongsTo(Loaidanhmuc::class);
    }

    public function danhmuc_id()
    {
        return $this->belongsTo(Danhmuc::class);
    }


}
