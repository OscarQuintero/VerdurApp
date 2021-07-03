<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'mostrarCatalogo']);
Route::get('/productores', [MainController::class, 'mostrarProductores']);
Route::get('/acercade', [MainController::class, 'mostrarAcercaDe']);

Route::get('/login', [MainController::class, 'mostrarLogIn']);
Route::get('/signup', [MainController::class, 'mostrarSignUp']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
