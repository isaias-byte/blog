<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//! En laravel 7 se hacía de la siguiente manera, por ejemplo: 
/*
    Route::get('/', 'HomeController');
    Route::get('cursos/create', 'CursoController@create');
*/

//* Tenemos un controlador para la raíz
Route::get('/', HomeController::class);
//* Tenemos un controlador para cada parte del curso, independientemente de la url
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

// *Para no tener tantas URL's, vamos con una a hacer lo de la de arriba también
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoría $categoria";
//     }
//     else {
//         return "Bienvenido al curso: $curso";
//     }
    
// });