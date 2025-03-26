<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    use HasFactory;

    public $guarded = [];

    protected $casts = [
        'social_media' => 'array',
        'image' => 'array',

    ];

}
