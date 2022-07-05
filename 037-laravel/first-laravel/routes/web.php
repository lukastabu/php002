<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController as hi;
use App\Http\Controllers\SumaController as sum;

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
