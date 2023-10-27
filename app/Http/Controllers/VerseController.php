<?php

namespace App\Http\Controllers;

use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Verse::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return Verse::create($request->all());
        if (Verse::create($request->all())) {
            return response()->json([
                'message' => 'Versículo Cadastrado com Sucesso'
            ]);
        }
        return response()->json()([
            'message' => 'Versículo Não Pode Ser Cadastrado!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($verse)
    {
        // return  Verse::findOrFail($verse);
        return  Verse::findO($verse);
        if ($verse) {
            return $verse;
        }
        return response()->json()([
            'message' => 'Versículo Não Pode Ser Encontrado!'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $verse)
    {
        // $verse =  Verse::findOrFail($verse);
        // $verse->update($request->all());
        // return $verse;
        $verse =  Verse::find($verse);
        if ($verse) {
            $verse->update($request->all());
            return $verse;
        }
        return response()->json([
            'message' => 'não Foi Possível atualizar o Versículo'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($verse)
    {
        return Verse::destroy($verse);
    }
}
