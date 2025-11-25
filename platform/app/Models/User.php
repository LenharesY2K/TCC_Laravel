<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'company_id',
        'name',
        'email',
        'password_hash',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function filePermissions()
    {
        return $this->hasMany(UserFilePermission::class);
    }
}
