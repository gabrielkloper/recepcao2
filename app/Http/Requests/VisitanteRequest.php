<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'nome_visitante' => 'required|string|max:255',
        'nome_social' => 'nullable|string|max:255',
        'cpf' => 'nullable|cpf|max:14',
        'rg' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'sexo' => 'nullable|string|max:255',
        'data_nascimento' => 'nullable|date',
        'telefone' => 'nullable|string|max:20',
        'cep' => 'nullable|string|max:10',
        'uf' => 'nullable|string|max:2',
        'rua' => 'nullable|string|max:255',
        'cidade' => 'nullable|string|max:255',
        'bairro' => 'nullable|string|max:255',
        'numero' => 'nullable|string|max:10',
        'nome_responsavel' => 'nullable|string|max:255',
        'cpf_responsavel' => 'nullable|cpf|max:14',
        'nome_responsavel2' => 'nullable|string|max:255',
        'cpf_responsavel2' => 'nullable|cpf|max:14',
        'data_cadastro' => 'nullable|date',
        'foto' => 'nullable|string|max:500',
        ];
    }
}
