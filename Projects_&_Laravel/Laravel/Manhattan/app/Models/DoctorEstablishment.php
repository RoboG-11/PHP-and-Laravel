<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorEstablishment extends Model
{
    use HasFactory;

    protected $table = 'doctor_establishment';

    protected $fillable = [
        'establishment_id',
        'doctor_user_id'
    ];
}
