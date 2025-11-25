<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'status',
        'billing_status',
        'price_monthly_cents',
    ];

    public function members()
    {
        return $this->hasMany(CompanyMember::class);
    }

    public function modules()
    {
        return $this->hasMany(CompanyModule::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
