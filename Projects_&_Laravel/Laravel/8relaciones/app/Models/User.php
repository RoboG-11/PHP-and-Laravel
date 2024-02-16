<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //NOTE: 1 usuario tiene un solo telefono (uno a uno)
    // public function phone(): HasOne
    // {
    //     return $this->hasOne(Phone::class);
    // }

    //NOTE: 1 usuario puede tener muchos telefonos (uno a muchos)
    // public function phones(): HasMany
    // {
    //     return $this->hasMany(Phone::class);
    // }

    // //NOTE: muchos usuarios pueden tener muchos roles (muchos a muchos)
    // public function phones(): HasMany
    // {
    //     return $this->hasMany(Phone::class);
    // }

    // public function roles(): BelongsToMany
    // {
    //     return $this->belongsToMany(Role::class)->withPivot('added_by');
    // }

    // //NOTE: Relación de paso con SIM uno a uno
    // // public function phoneSim(): HasOneThrough
    // // {
    // //     return $this->hasOneThrough(Sim::class, Phone::class);
    // // }

    // //NOTE: Relación de paso con SIM. Un telefono puede tener varias sims...
    // public function phoneSims(): HasManyThrough
    // {
    //     return $this->hasManyThrough(Sim::class, Phone::class);
    // }

    // //NOTE: RELACIÓN POLIMORFICA con una imagen
    // public function image(): MorphOne
    // {
    //     return $this->morphOne(Image::class, 'imageable');
    // }

    //NOTE: RELACIÓN POLIMORFICA de uno a muchos
    public function image(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
