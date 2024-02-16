<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sim extends Model
{
    use HasFactory;

    protected $guarded = [];

    //NOTE: Relación de paso con SIM uno a uno
    public function phone(): BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }
}
