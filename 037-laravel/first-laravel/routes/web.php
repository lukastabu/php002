<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController as hi;
use App\Http\Controllers\SumaController as sum;
use App\Http\Controllers\ColorController as C;
use App\Http\Controllers\AnimalController as A;
use App\Http\Controllers\FrontController as F;
use App\Http\Controllers\OrderController as O;

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
// FRONT ROUTER

Route::get('', [F::class, 'index'])->name('front-index');

Route::post('add-ordior', [O::class, 'add'])->name('order-add')->middleware('rw:user');

Route::get('my-orders', [O::class, 'show'])->name('order-show')->middleware('rw:user');


// ORDER ROUTERS

Route::get('/orders', [O::class, 'index'])->name('order-index')->middleware('rw:admin');

Route::put('/status/{order}', [O::class, 'statusChange'])->name('order-status')->middleware('rw:admin');


// TEST ROUTERS

Route::get('/labas', fn () => 'Labas, Lara');

Route::get('/laaabas', [hi::class, 'labdien']);

Route::get('/ate/{vardas?}', [hi::class, 'ate']);

Route::get('/hibye/{la}/{ba}', [hi::class, 'hibye']);

Route::get('/suma/{a}/{b}', [sum::class, 'sumarum']);

Route::get('/skirtumas', [sum::class, 'skirtum']) -> name('formike');

Route::post('/skirtumas', [sum::class, 'calculate']) -> name('skaiciuotuvas');

// COLORS ROUTERS

Route::get('/colors', [C::class, 'index'])->name('color-index')->middleware('rw:user');

Route::get('/colors/create', [C::class, 'create'])->name('color-create')->middleware('rw:admin');

Route::post('/colors', [C::class, 'store'])->name('color-store')->middleware('rw:admin');

Route::get('/colors/edit/{color}', [C::class, 'edit'])->name('color-edit')->middleware('rw:admin');

Route::put('/colors/{color}', [C::class, 'update'])->name('color-update')->middleware('rw:admin');

Route::delete('/colors/{color}', [C::class, 'destroy'])->name('color-delete')->middleware('rw:admin');

Route::get('/colors/show/{id}', [C::class, 'show'])->name('color-show')->middleware('rw:user');

Route::get('/colors/show', [C::class, 'lone_link'])->name('color-show-routing');


// ANIMAL ROUTERS

Route::get('/animals', [A::class, 'index'])->name('animal-index')->middleware('rw:user');

Route::get('/animals/create', [A::class, 'create'])->name('animal-create')->middleware('rw:admin');

Route::post('/animals', [A::class, 'store'])->name('animal-store')->middleware('rw:admin');

Route::get('/animals/edit/{animal}', [A::class, 'edit'])->name('animal-edit')->middleware('rw:admin');

Route::put('/animals/{animal}', [A::class, 'update'])->name('animal-update')->middleware('rw:admin');

Route::delete('/animals/{animal}', [A::class, 'destroy'])->name('animal-delete')->middleware('rw:admin');

Route::get('/animals/show/{id}', [A::class, 'show'])->name('animal-show')->middleware('rw:user');


// Auth routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
