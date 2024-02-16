<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorSpecialty extends Model
{
    use HasFactory;

    protected $table = 'doctor_specialty';

    protected $fillable = [
        "doctor_user_id",
        "specialty_id"
    ];

    // NOTE: Relación con la tabla doctors - 1 a 1
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    // NOTE: Relación con la tabla especialies - 1 a 1
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class);
    }
}
