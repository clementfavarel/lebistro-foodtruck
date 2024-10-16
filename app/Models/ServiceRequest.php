<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'event_type',
        'start_date',
        'end_date',
        'duration',
        'people_count',
        'services',
        'budget',
        'message',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'services' => 'array',
        'budget' => 'decimal:2',
    ];

    public function getFormattedServicesAttribute()
    {
        return collect($this->services)->map(function ($details, $service) {
            return ucfirst(str_replace('_', ' ', $service)) . ": $details";
        })->implode("\n");
    }
}
