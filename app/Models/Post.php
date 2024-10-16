<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_src',
        'img_alt',
        'title',
        'short_description',
        'content',
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class);
    }
}
