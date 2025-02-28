<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('visitante.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('visitante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       DB::beginTransaction();
       try{
       $visitante = new Visitante();
       $visitante->nome_visitante = $request->nome_visitante;
       $visitante->nome_social = $request->nome_social;
       $visitante->cpf = $request->cpf;
       $visitante->rg = $request->rg;
       $visitante->email = $request->email;
       $visitante->sexo = $request->sexo;
       $visitante->data_nascimento = $request->data_nascimento;
       $visitante->telefone = $request->telefone;
       $visitante->cep = $request->cep;
       $visitante->uf = $request->uf;
       $visitante->rua = $request->rua;
       $visitante->cidade = $request->cidade;
       $visitante->bairro = $request->bairro;
       $visitante->numero = $request->numero;
       $visitante->nome_responsavel = $request->nome_responsavel;
       $visitante->cpf_responsavel = $request->cpf_responsavel;
       $visitante->nome_responsavel2 = $request->nome_responsavel2;
       $visitante->cpf_responsavel2 = $request->cpf_responsavel2;
       $visitante->data_cadastro = $request->data_cadastro;
       $visitante->foto = $request->foto;
       $visitante->save();

       DB::commit();

       return response()->json($visitante); } catch (\Exception $e) {
       DB::rollback();
       return response()->json(['error' => $e->getMessage()], 500);
       }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
