<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'interior_number',
        'outside_number',
        'colony',
        'city',
        'zip_code',
    ];

    // NOTE: Relación con la tabla establishments - 1 a 1

    public function establishment(): HasOne
    {
        return $this->hasOne(Establishment::class);
    }
}
