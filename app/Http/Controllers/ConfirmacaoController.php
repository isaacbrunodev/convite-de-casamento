<?php

namespace App\Http\Controllers;

use App\Models\Convidado;
use Illuminate\Http\Request;

class ConfirmacaoController extends Controller
{
    public function index()
    {
        return view('confirmacao.index');
    }

    public function buscarNomes(Request $request)
    {
        $termo = $request->get('termo');
        
        $convidados = Convidado::where('nome', 'LIKE', "%{$termo}%")
            ->limit(5)
            ->get(['nome']);
            
        return response()->json($convidados);
    }

    public function confirmar(Request $request)
    {
        $convidado = new Convidado();
        $convidado->nome = $request->get('nome');
        $convidado->acompanhantes = (int) $request->get('acompanhantes', 0);
        $convidado->confirmado = true;
        $convidado->save();
        
        return response()->json(['success' => true]);
    }
} 