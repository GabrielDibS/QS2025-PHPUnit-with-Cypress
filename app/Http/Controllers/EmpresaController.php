<?php
namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function criar()
    {
        return view('empresas.criar');
    }

    public function salvar(Request $requisicao)
    {
        Empresa::create($requisicao->all());

        return redirect()->route('empresas.listar');
    }

    public function listar()
    {
        $empresas = Empresa::all();
        return view('empresas.list', compact('empresas'));
    }

}
