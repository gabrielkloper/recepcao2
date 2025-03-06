<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitanteRequest;
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
        $visitantes = Visitante::paginate(10); // Pagina os resultados, 10 por página
        return view('visitante.index', compact('visitantes'));
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
    public function store(VisitanteRequest $request)
    {
        DB::beginTransaction();
        try {
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
            $visitante->data_cadastro = now();
            $visitante->foto = $request->foto;
            $visitante->save();
            //    dd($visitante);

            DB::commit();

            return response()->json($visitante);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('visitante.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visitante = Visitante::findOrFail($id);
        return view('visitante.edit', compact('visitante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisitanteRequest $request, string $id)
    {


        $visitante = Visitante::findOrFail($id);
        DB::beginTransaction();
        try {
            $request = $request->all();
            $visitante->update($request);
            DB::commit();
            // return response()->json($visitante, 200);
            return redirect()->route('visitante.edit', $id)->with('success', 'Visitante atualizado com sucesso!');
        }
        catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);        
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
