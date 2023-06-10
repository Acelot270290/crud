<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;

    protected $table = 'fornecedores';

    protected $fillable = [
        'email',
        'telefone',
        'dados_bancarios',
        'cep',
        'cidade',
        'estado',
        'pais',
    ];
}
