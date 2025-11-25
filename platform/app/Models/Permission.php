<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'module_id',
        'code',
        'description'
    ];

    public $timestamps = false;

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
