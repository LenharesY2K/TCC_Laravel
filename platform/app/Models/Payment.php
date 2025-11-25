<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'company_id',
        'amount_cents',
        'currency',
        'method',
        'status',
        'due_date',
        'paid_at',
        'meta'
    ];

    protected $casts = [
        'meta' => 'array',
        'due_date' => 'date',
        'paid_at' => 'datetime',
    ];

    public $timestamps = false;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
