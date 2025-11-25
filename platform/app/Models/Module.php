<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'code',
        'title',
        'description',
        'default_permissions',
    ];

    protected $casts = [
        'default_permissions' => 'array',
    ];

    public function companies()
    {
        return $this->hasMany(CompanyModule::class);
    }

    public function files()
    {
        return $this->hasMany(ModuleFile::class);
    }

    public function records()
    {
        return $this->hasMany(ModuleRecord::class);
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
