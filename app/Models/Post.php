<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'published_at'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
