<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource. listar 
     */
    public function index()
{
    // $produtos = Produto::all(); // Se você quiser usar produtos, descomente isso.
    // return dd($produtos); // Pode ser usado para depuração.

    $nome = 'rodrigo';
    $idade = 28;

    return view('site.home', compact('nome', 'idade'));
}


    /**
     * Show the form for creating a new resource. EXIBIR FORMULARIO
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. SALVAR REGISTRO
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. RECURSO ESPECIFICO PELO ID
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. EDIÇÃO DE ALGUM RECURSO
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage. REMOVER RECUROS 
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
