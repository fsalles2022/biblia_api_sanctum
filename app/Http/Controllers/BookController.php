<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return Book::create($request->all());
        if (Book::create($request->all())) {
            return response()->json([
                'message' => "Livro Cadastrado com Sucesso!"
            ], 201);
        }
        return response()->json([
            'message' => "Erro ao Cadastrar o Livro!"
        ], 404);
    }

    /**
     * Display the specified resource.
     */
    public function show($book)
    {
        // return Book::findOrFail($book);
        // Melhorarndo o find
        $book = Book::find($book);
        if ($book) {
            return $book;
        }
        return response()->json([
            'message' => 'Erro ao Pesquisar o Livro'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $book)
    {
        // $book = Book::findOrFail($book);
        // $book->update($request->all());
        // return $book;
        $book = Book::find($book);
        if ($book) {
            $book->update($request->all());
            return $book;
        }
        return response()->json([
            'message' => 'Erro ao Atualizar o Livro'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $book)
    {
        // return Book::destroy($book);
        if (Book::destroy($book)) {
            return response()->json([
                'message' => 'Versículo Deletado comsucesso!'
            ], 201);
            return response()->json([
                'message' => 'Erro ao Excluir Versículo!'
            ], 404);
        }
    }
}
