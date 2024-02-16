<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Summary extends Model
{
    use HasFactory;

    protected $fillable = ['date_id', 'medical_prescription_id', 'diagnostic'];

    // NOTE: Relación con la tabla Dates - 1 a 1
    public function date(): BelongsTo
    {
        return $this->belongsTo(Date::class);
    }

    // NOTE: Relación con la tabla Medical_prescriptions - 1 a 1
    public function medical_prescription(): BelongsTo
    {
        return $this->belongsTo(MedicalPrescription::class);
    }
}
