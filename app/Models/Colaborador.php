<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
  use HasFactory;

  protected $fillable = [
    'nome',
    'email',
    'telefone',
    'cidade',
    'estado', 
    'numero',
    'bairro',
    'cargo',
    
  ];

  protected $table = "colaboradores";
}
