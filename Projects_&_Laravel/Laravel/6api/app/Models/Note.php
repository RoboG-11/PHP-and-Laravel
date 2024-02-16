<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    // NOTE: Si el array de elementos protegidos está vacio, significa que todos no están protegidos
    protected $guarded = [];

    // protected $hidden = ['created_at', 'updated_at'];
}
