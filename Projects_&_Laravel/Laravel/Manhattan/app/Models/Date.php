<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Date extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_user_id', 'patient_user_id', 'date', 'time', 'link', 'status', 'motive'];

    // NOTE: Relación con la tabla doctors - muchos a 1
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    // NOTE: Relación con la tabla patient - muchos a 1
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    // NOTE: Relación con la tabla summary - 1 a 1
    public function summary(): HasOne
    {
        return $this->hasOne(Summary::class);
    }
}
