<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TypeEstablishment extends Model
{
    use HasFactory;

    // BUG: Checar si debe de ser guarded
    protected $guarded = [];

    // NOTE: Relación con la tabla establishments - 1 a 1
    public function establishment(): HasOne
    {
        return $this->hasOne(Establishment::class);
    }
}
