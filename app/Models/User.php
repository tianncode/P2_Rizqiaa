<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'is_active',
        'userable_id',
        'userable_type',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi polymorphic
    public function userable()
    {
        return $this->morphTo();
    }

    // Relasi many-to-many dengan roles
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    // Accessor untuk mendapatkan role (nama role pertama)
    public function getRoleAttribute()
    {
        if ($this->roles()->exists()) {
            return $this->roles()->first()?->name;
        }

        return match ($this->userable_type) {
            'App\Models\Admin' => 'Admin',
            'App\Models\Agent' => 'Agent',
            'App\Models\Jemaah', 'App\Models\People' => 'Jemaah',
            default => null,
        };
    }
}
