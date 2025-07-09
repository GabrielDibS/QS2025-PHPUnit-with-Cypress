<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Produto;
use App\Models\User;
use App\Models\Gerente;
use App\Models\Financeiro;

class FinanceiroController extends Controller
{
    public function x() {
        $a1 = Empresa::all();
        $a2 = Produto::all();
        $a3 = User::all();
        $a4 = Gerente::all();

        $z = compact('a1','a2','a3','a4');
        return view('financeiro.view', $z);
    }
    public function store(Request $request)
    {
        Financeiro::create($request->only(['descricao', 'valor']));
        return redirect('/financeiro');
    }
}
