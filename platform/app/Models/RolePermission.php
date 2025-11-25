<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected $fillable = [
        'company_id',
        'role_name',
        'permission_id',
    ];

    public $timestamps = false;

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
