<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Comment;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'seo_tags' => 'array'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function image()
    {
        return $this->belongsTo(Media::class,'block_image','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
