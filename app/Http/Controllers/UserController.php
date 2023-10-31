<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($user)
    {
        // return  User::findOrFail($user);
        $user = User::find($user);
        if ($user) {

            $response = [
                'name' => $user,
                'testaments' => $user->testaments,
                'books' => $user->books
            ];
            return $response;
        }
        return response()->json([
            'message' => "usuário Não Encontrado!",
        ], 404);
    }

    /**
     * Update the specified resource in storage.
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
