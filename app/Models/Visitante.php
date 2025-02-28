<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    /** @use HasFactory<\Database\Factories\VisitanteFactory> */
    use HasFactory;

    protected $fillable = [
        'nome_visitante',
        'nome_social',
        'cpf',
        'rg',
        'email',
        'sexo',
        'data_nascimento',
        'telefone',
        'cep',
        'uf',
        'rua',
        'cidade',
        'bairro',
        'numero',
        'nome_responsavel',
        'cpf_responsavel',
        'nome_responsavel2',
        'cpf_responsavel2',
        'data_cadastro',
        'foto',
    ];
}
