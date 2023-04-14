<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The roles that belong to the user.
     */


    /**
     * The roles that belong to the user.
     */
 
    public function tenVietHoa()
    {
        return strtoupper($this->title);
    }
    public function danhmuc()
    {
        return $this->belongsTo(danhmuc::class);
    }
    public function thumbnailUrl()
    {
        return '/storage/' . $this->thumbnail;
    }
    protected $fillable = [
        'active'
    ];
    protected $casts = [
        'danhmuc_id' => 'array',
        'published_at' => 'date',

    ];
}
