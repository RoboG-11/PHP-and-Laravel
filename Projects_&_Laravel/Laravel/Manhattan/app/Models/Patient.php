<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    //WARNING:
    //BUG: Checar si vale con user_id sea filllabeable
    protected $primaryKey = 'user_id';
    protected $fillable = ['weight', 'nss', 'user_id'];

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

    // NOTE: Relación con la tabla Allergies - muchos a muchos
    public function allergies(): BelongsToMany
    {
        return $this->belongsToMany(Allergy::class);
    }

    // NOTE: Relación con la tabla Disease - muchos a muchos
    public function diseases(): BelongsToMany
    {
        return $this->belongsToMany(Disease::class);
    }
}
