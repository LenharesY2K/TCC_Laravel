<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleFilePermission extends Model
{
    protected $fillable = [
        'company_id',
        'role_name',
        'file_id',
        'permission_code',
    ];

    public $timestamps = false;

    public function file()
    {
        return $this->belongsTo(ModuleFile::class, 'file_id');
    }
}
