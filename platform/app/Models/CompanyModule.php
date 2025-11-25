<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyModule extends Model
{
    protected $fillable = [
        'company_id',
        'module_id',
        'config',
        'enabled',
        'trial_start',
        'trial_end',
        'billing_required',
        'price_cents',
    ];

    protected $casts = [
        'config' => 'array',
        'enabled' => 'boolean',
        'billing_required' => 'boolean',
        'trial_start' => 'datetime',
        'trial_end' => 'datetime',
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
