<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MedicalPrescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructions',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // protected $dates = [
    //     'created_at',
    //     'updated_at',
    // ];

    // public function medicines()
    // {
    //     return $this->belongsToMany(Medicine::class, 'medical_prescription_medicine', 'medical_prescription_id', 'medicine_id');
    // }

    public function medicines(): BelongsToMany
    {
        return $this->belongsToMany(Medicine::class);
    }

    // NOTE: Relación con la tabla summary - 1 a 1
    public function summary(): HasOne
    {
        return $this->hasOne(Summary::class);
    }
}
