<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    //NOTE: RELACIÓN POLIMORFICA DE MUCHOS A MUCHOS
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
