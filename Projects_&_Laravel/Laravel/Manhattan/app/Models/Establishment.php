<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Establishment extends Model
{
    use HasFactory;

    // BUG: Checar qué campos deben de ser fillables
    // BUG: Solo funciona poniendo el nombre de las columnas, ya que así está el modelo de BD
    protected $fillable = ['establishment_name', 'address_id', 'type_establishment_id'];

    // NOTE: Relación con la tabla addresses - 1 a 1
    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    // NOTE: Relación con la tabla Type_establishments - 1 a 1
    public function typeEstablishment(): HasOne
    {
        return $this->hasOne(TypeEstablishment::class, 'id', 'type_establishment_id');
    }


    // NOTE: Relación con la tabla doctors - muchos a muchos
    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class);
    }
}
