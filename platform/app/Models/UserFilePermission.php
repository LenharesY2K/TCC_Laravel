<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFilePermission extends Model
{
    protected $fillable = [
        'user_id',
        'file_id',
        'permission_code',
        'granted_by',
    ];

    public $timestamps = false;

    public function file()
    {
        return $this->belongsTo(ModuleFile::class, 'file_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
