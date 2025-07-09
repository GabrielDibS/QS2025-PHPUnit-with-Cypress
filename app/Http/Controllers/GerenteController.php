<?php
namespace App\Http\Controllers;

use App\Models\Gerente;
use App\Models\Empresa;
use Illuminate\Http\Request;

class GerenteController extends Controller
{
    public function criar()
    {
        $empresas = Empresa::all();
        return view('gerentes.criar', compact('empresas'));
    }

    public function salvar(Request $requisicao)
    {
        $gerente = Gerente::create($requisicao->only(['nome', 'email']));
        $gerente->empresas()->attach($requisicao->input('empresas', []));

        return redirect()->route('gerentes.listar');
    }

    public function listar()
    {
        $gerentes = Gerente::with('empresas')->get();
        return view('gerentes.listar', compact('gerentes'));
    }

    public function editar($id)
    {
        $gerente = Gerente::find($id);
        $empresas = Empresa::all();
        return view('gerentes.editar', compact('gerente', 'empresas'));
    }

    public function atualizar(Request $requisicao, $id)
    {
        $gerente = Gerente::find($id); 
        $gerente->update($requisicao->only(['nome', 'email']));
        $gerente->empresas()->sync($requisicao->input('empresas', []));

        return redirect()->route('gerentes.listar');
    }

    public function deletar($id)
    {
        $gerente = Gerente::find($id);
        $gerente->delete();

        return redirect()->route('gerentes.listar');
    }
}
