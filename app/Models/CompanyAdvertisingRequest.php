<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAdvertisingRequest extends Model
{
    protected $fillable = [
        'company',
        'contact',
        'phone',
        'email',
        'message',
        'status',
    ];
}
