<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  use HasFactory;

  // Se sobreescribe el nombre si no se respeta la convención de nombres
  // protected $table = "Notas";
  protected $fillable = [ // idicar que campos del objeto van a ser cumplimentables
    'title',
    'description',
    'deadline',
    'done'
  ];
  // protected $guarded = [] // indica qué campos se están protegiendo. contrario a fillable.
  // Si se declara fillable ya no se debe de ocupar, ya que serían los contrarios
  protected $casts = [ // Sirve para castear datos
    "deadline" => "date"
  ];
  protected $hidden = ['password']; // Sirve para evitar entregr datos que no deben de ser entregados
}
