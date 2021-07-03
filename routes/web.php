<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductorController;
use App\Http\Controllers\TipoDeProducto;
use App\Http\Controllers\ProductoDeUnProductor;

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
//     return view('layouts.main');
// });

Route::get('/', [MainController::class, 'mostrarCatalogo']);

Route::get('/acercade', [MainController::class, 'mostrarAcercaDe']);

// Route::get('/login', [MainController::class, 'mostrarLogIn']);
// Route::get('/signup', [MainController::class, 'mostrarSignUp']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('productos', ProductoController::class);
Route::resource('productores', ProductorController::class);
Route::resource('tipoderoducto', TipoDeProducto::class);
Route::resource('productodeunproductor', PorductoDeUnProductor::class);