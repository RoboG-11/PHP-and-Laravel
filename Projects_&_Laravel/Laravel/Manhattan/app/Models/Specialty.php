<?php
// BUG: Checar si se debe de hacer CRUD

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specialty extends Model
{
    use HasFactory;

    // BUG: CHECAR SI DEBE O NO DEBE DE SER GUARDED
    // protected $guarded = [];

    protected $fillable = [
        'speciality_name',
        'description'
    ];

    // NOTE: Relación con la tabla doctors - muchos a muchos
    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class);
    }
}
