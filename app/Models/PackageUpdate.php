<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageUpdate extends Model
{
    use HasFactory;

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
