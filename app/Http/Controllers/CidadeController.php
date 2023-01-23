<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function listCidades()
    {
        $cidades = Cidade::all();

        return view('pages.index', compact('cidades'));
    }

    public function addCidade()
    {
        return view('pages.form');
    }

    public function storeCidade(Request $request)
    {
        Cidade::create([
            'nome' => $request->nome,
        ]);

        session()->flash('sucesso', "Cidade $request->nome adicionada com sucesso.");

        return redirect()->route('index');
    }

    public function destroyCidade($idCidade)
    {
        $cidade = Cidade::find($idCidade);
        $cidade->delete();

        return redirect()->route('index');
    }
}
