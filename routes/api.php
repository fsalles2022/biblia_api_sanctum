<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\TestamentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------laravel asnctum

|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Route::get('/testament', [TestamentController::class, 'index'])->name('testamento');
// Route::get('/testament/{id}', [TestamentController::class, 'show'])->name('testamento');
// Route::post('/testament', [TestamentController::class, 'store'])->name('testamento');
// Route::put('/testament/{id}', [TestamentController::class, 'update'])->name('testamento');
// Route::delete('/testament/{id}', [TestamentController::class, 'destroy'])->name('testamento');

// Route::get('/book', [BookController::class, 'index'])->name('livro');
// Route::get('/book/{id}', [BookController::class, 'show'])->name('livro');
// Route::post('/book', [BookController::class, 'store'])->name('livro');
// Route::put('/book/{id}', [BookController::class, 'update'])->name('livro');
// Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('livro');


// Route::get('/verse', [VerseController::class, 'index'])->name('verso');
// Route::get('/verse/{id}', [VerseController::class, 'show'])->name('verso');
// Route::post('/verse', [VerseController::class, 'store'])->name('verso');
// Route::put('/verse/{id}', [VerseController::class, 'update'])->name('verso');
// Route::delete('/verse/{id}', [VerseController::class, 'destroy'])->name('verso');
// ***Simplificando rotas com ApiResource - Após ir até as controllers de resource e alterar o $id pelo valor do objeto


// ****Aplicando apiResource nas rotas
// Route::apiResource('testament', TestamentController::class);
// Route::apiResource('book', BookController::class);
// Route::apiResource('verse', VerseController::class);

// *****Aplicando apiResources nas rotas
// Route::apiResources(
//     [
//         'testament' => TestamentController::class,
//         'book' => BookController::class,
//         'verse' => VerseController::class,
//     ]
// );

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


// Protegendo rotas 
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResources(
        [
            'testament' => TestamentController::class,
            'book' => BookController::class,
            'verse' => VerseController::class,
            'user' =>UserController::class,
            'chapter' =>ChapterController::class,

        ]
    );
});




// Route::get('/testaments', [function () {
//     return "Api teste";
// }]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
