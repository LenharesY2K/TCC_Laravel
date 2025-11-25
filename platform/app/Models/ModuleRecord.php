<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleRecord extends Model
{
    protected $fillable = [
        'company_id',
        'module_id',
        'entity_type',
        'entity_key',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
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
