<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    //NOTE: 1 telefono le pertenece a un usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //NOTE: Relación de paso con SIM uno a uno
    // public function sim(): HasOne
    // {
    //     return $this->hasOne(Sim::class);
    // }

    //NOTE: Relación de paso con SIM. Un telefono puede tener varias sims...
    public function sim(): HasMany
    {
        return $this->hasMany(Sim::class);
    }
}
