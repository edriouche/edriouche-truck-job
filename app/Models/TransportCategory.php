<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TransportCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'active',
    ];

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(
            Company::class,
            'company_transport_category'
        );
    }
}
