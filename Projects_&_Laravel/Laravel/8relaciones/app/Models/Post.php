<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // //NOTE: RELACIÓN POLIMORFICA
    // public function image(): MorphOne
    // {
    //     return $this->morphOne(Image::class, 'imageable');
    // }

    //NOTE: RELACIÓN POLIMORFICA de uno a muchos
    public function image(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    //NOTE: RELACIÓN POLIMORFICA DE MUCHOS A MUCHOS
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
