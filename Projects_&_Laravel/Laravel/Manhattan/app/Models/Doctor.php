<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    //WARNING:
    //BUG: Checar si vale con user_id sea filllabeable
    protected $primaryKey = 'user_id';
    protected $fillable = ['professional_license', 'education', 'user_id'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // NOTE: Relación con la tabla users - 1 a 1
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // NOTE: Relación con la tabla dates - 1 a muchos
    public function dates(): HasMany
    {
        return $this->hasMany(Date::class);
    }

    // NOTE: Relación con la tabla specialities - muchos a muchos
    public function specialties(): BelongsToMany
    {
        return $this->belongsToMany(Specialty::class);
    }

    // NOTE: Relación con la tabla establishments - muchos a muchos
    public function establishments(): BelongsToMany
    {
        return $this->belongsToMany(Establishment::class);
    }
}
