<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyMember extends Model
{
    protected $fillable = [
        'user_id',
        'company_id',
        'role',
        'status',
        'joined_at',
    ];

    public $timestamps = false;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
