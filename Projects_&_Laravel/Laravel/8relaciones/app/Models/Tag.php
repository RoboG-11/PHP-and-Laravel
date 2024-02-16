<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    //NOTE: RELACIÓN POLIMORFICA DE MUCHOS A MUCHOS
    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'taggeable');
    }

    //NOTE: RELACIÓN POLIMORFICA DE MUCHOS A MUCHOS
    public function videos(): MorphToMany
    {

        return $this->morphedByMany(Video::class, 'taggeable');
    }
}
