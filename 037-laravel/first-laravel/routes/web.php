<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController as hi;
use App\Http\Controllers\SumaController as sum;
use App\Http\Controllers\ColorController as C;
use App\Http\Controllers\AnimalController as A;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/labas', fn () => 'Labas, Lara');

Route::get('/laaabas', [hi::class, 'labdien']);

Route::get('/ate/{vardas?}', [hi::class, 'ate']);

Route::get('/hibye/{la}/{ba}', [hi::class, 'hibye']);

Route::get('/suma/{a}/{b}', [sum::class, 'sumarum']);

Route::get('/skirtumas', [sum::class, 'skirtum']) -> name('formike');

Route::post('/skirtumas', [sum::class, 'calculate']) -> name('skaiciuotuvas');

// COLORS ROUTERS

Route::get('/colors', [C::class, 'index'])->name('color-index');

Route::get('/colors/create', [C::class, 'create'])->name('color-create');

Route::post('/colors', [C::class, 'store'])->name('color-store');

Route::get('/colors/edit/{color}', [C::class, 'edit'])->name('color-edit');

Route::put('/colors/{color}', [C::class, 'update'])->name('color-update');

Route::delete('/colors/{color}', [C::class, 'destroy'])->name('color-delete');

Route::get('/colors/show/{id}', [C::class, 'show'])->name('color-show');


// ANIMAL ROUTERS

Route::get('/animals', [A::class, 'index'])->name('animal-index');

Route::get('/animals/create', [A::class, 'create'])->name('animal-create');

Route::post('/animals', [A::class, 'store'])->name('animal-store');

Route::get('/animals/edit/{animal}', [A::class, 'edit'])->name('animal-edit');

Route::put('/animals/{animal}', [A::class, 'update'])->name('animal-update');

Route::delete('/animals/{animal}', [A::class, 'destroy'])->name('animal-delete');

Route::get('/animals/show/{id}', [A::class, 'show'])->name('animal-show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
