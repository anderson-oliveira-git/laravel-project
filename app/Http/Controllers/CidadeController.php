<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;
use App\Http\Requests\CidadeRequest;

class CidadeController extends Controller
{
     /**
     * Função que lista todas as cidades cadastradas na tabela inicial .:.
     */
    public static function listCidades()
    {
        $cidades = Cidade::all();

        return view('pages.index', compact('cidades'));
    }

    /**
     * Função que direciona o usuário para a tela de cadastro de cidade .:.
     */
    public function addCidade()
    {
        return view('pages.form');
    }

    /**
     * Função que cadastra uma nova cidade no banco de dados .:.
     * @param $request -> requisição que trás consigo os dados para serem salvos .:.
     */
    public function storeCidade(CidadeRequest $request)
    {
        Cidade::create([
            'nome' => $request->nome,
        ]);

        session()->flash('sucesso', "Cidade $request->nome adicionada com sucesso.");

        return redirect()->route('index');
    }

    /**
     * Função que deleta um item do banco de dados .:.
     * @param $idCidade -> id da cidade que deve ser excluida .:.
     */
    public function destroyCidade($idCidade)
    {
        $cidade = Cidade::find($idCidade);
        $cidade->delete();

        session()->flash('deletado', "A cidade $cidade->nome foi deletada com sucesso!");

        return redirect()->route('index');
    }

    public function editCidade($idCidade) 
    {
        $cidade = Cidade::find($idCidade);

        return view('pages.edit', compact('cidade'));
    }

    public function editarCidade(Request $request, $idCidade)
    {
        $cidade = Cidade::find($idCidade);

        $cidade->update([
            'nome' => $request->nome
        ]);

        session()->flash('atualizado', "A cidade foi atualizada com sucesso!");

        return redirect()->route('index');
    }
}
