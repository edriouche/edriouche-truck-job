<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    protected $fillable = [
        'name',
        'city',
        'country',
        'address',
        'phone',
        'email',
        'website',
        'transport_scope',
        'truck_types',
        'transport_description',
        'hiring_drivers',
        'training_available',
        'job_link',
        'verified',
        'last_verified_at',
        'notes',
    ];

    public function transportCategories(): BelongsToMany
    {
        return $this->belongsToMany(
            TransportCategory::class,
            'company_transport_category'
        );
    }
}
