<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CompraController;
use App\Models\Libro; 

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
// 	$libros = Libro::orderBy('id', 'desc') -> paginate(6);
//     return view('dashboard') -> with('libros', $libros);
// })->name('dashboard');

Route::get('/', function () {
	$libros = Libro::orderBy('id', 'desc') -> paginate(8);
    return view('dashboard') -> with('libros', $libros); 
})->name('dashboard');

Route::get('categoria', function (){
	$categorias = Libro::all();
	return view('libros.categorias', compact('categorias'));
})->name('categoria');

Route::get('resenias', function () {
	$libros = Libro::orderBy('id', 'desc') -> paginate(5);
    return view('libros.page-resenia') -> with('libros', $libros); 
})->name('resenias');

Route::view('contacto','contacto.index')->name('contacto');
Route::view('acerca','libros.acerca')->name('acerca');

Route::resource('Books', LibroController::class);

Route::get('compra/{compra}', [CompraController::class, 'show']) -> name('compra.show');
Route::post('compra', [CompraController::class, 'datos']) -> name('compra.datos');

