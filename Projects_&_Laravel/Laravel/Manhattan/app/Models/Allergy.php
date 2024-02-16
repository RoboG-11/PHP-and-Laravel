<?php
// BUG: Checar si se debe de hacer CRUD

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Allergy extends Model
{
    use HasFactory;

    // BUG: CHECAR SI DEBE O NO DEBE DE SER GUARDED
    protected $guarded = [];

    // NOTE: Relación con la tabla patients - muchos a muchos
    public function patients(): BelongsToMany
    {
        return $this->belongsToMany(Patient::class);
    }
}
