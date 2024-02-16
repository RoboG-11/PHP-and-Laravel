<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'medication_name',
        'description',
        'quantity',
        'stock',
        'price'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // BUG: Si necesitas realizar conversiones de tipos de datos. Preguntele a ChatGPT para saber qué pex
    // protected $casts = [
    //     'quantity' => 'integer',
    //     'stock' => 'integer',
    // ];

    // public function medicalPrescriptions()
    // {
    //     return $this->belongsToMany(MedicalPrescription::class, 'medical_prescription_medicine', 'medicine_id', 'medical_prescription_id');
    // }

    public function medicalPrescriptions(): BelongsToMany
    {
        return $this->belongsToMany(MedicalPrescription::class);
    }
}
