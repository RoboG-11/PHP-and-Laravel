<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];


    //NOTE: muchos usuarios pueden tener muchos roles (muchos a muchos)
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('added_by');
        //NOTE: El pivote es la info adicional que se agregó...
    }
}
