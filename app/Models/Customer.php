<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;

class Customer extends Authenticatable implements FilamentUser, HasName
{
    use HasFactory;

    protected $fillable=[
        'firstname','middlename','email','phone','gender','google_id','password','
        active'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function package()
    {
        return $this->hasManyThrough(Package::class, CustomerPackage::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if($panel->getId()==="admin")
        {
            return false;
        }
        return true;
    }

    public function getFilamentAvatarUrl(): ?string
    {
       return $this->avatar_url;
    }

    public function getFilamentName(): string
    {
        return "{$this->firstname} {$this->middlename} {$this->lastname}";
    }
}
