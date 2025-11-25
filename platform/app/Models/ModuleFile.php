<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleFile extends Model
{
    protected $fillable = [
        'company_id',
        'module_id',
        'filename',
        'path',
        'mime_type',
        'meta'
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
