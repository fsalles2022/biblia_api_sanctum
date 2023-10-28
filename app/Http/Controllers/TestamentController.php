<?php

namespace App\Http\Controllers;

use App\Models\Testament;
use App\Models\Book;
use Illuminate\Http\Request;

class TestamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testament::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return Testament::create($request->all());
        if (Testament::create($request->all())) {
            return response()->json([
                'message' => 'Testamento cadastrado ComSucesso!'
            ], 201);

            return response()->json([
                'message' => 'Erro ao Cadastrar o Testamento'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($testament)
    {
        // return Testament::findOrFail($testament);
        $testament = Testament::find($testament);
        if ($testament) {
            $response = [
                'testament' =>$testament,
                'books' => $testament->books
            ];
            return $response;
        }
        return response()->json([
            'message' => 'Testamento não Encontrado!'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $testament)
    {
        // $testemant = Testament::findOrFail($testament);
        // $testemant->update($request->all());
        // return $testemant;
        $testament = Testament::find($testament);
        if ($testament) {
            $testament->update($request->all());
            return $testament;
        }
        return response()->json([
            'message' => 'Testamento Não Pode SerAtualizado !'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $testament)
    {
        // return Testament::destroy($testament);
        if (Testament::destroy($testament)) {
            return response()->json([
                'message' => 'Testamentoo Deletado comsucesso!'
            ], 201);
        }
        return response()->json([
            'message' => 'Testamento Não Pode SerAtualizado !'
        ], 404);
    }
}
