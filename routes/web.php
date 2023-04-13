<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Products;
use App\Http\Livewire\Posts;
use App\Http\Livewire\CountriesCity;
use App\Http\Livewire\Companies;
use App\Http\Livewire\ExamplesList;

use App\Http\Controllers\ChirpController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('/chirps', ChirpController::class)
        ->only(['index']);
    Route::get('/products', Products::class)->name('products');
    Route::get('/posts', Posts::class)->name('posts');
    Route::get('/countries-city', CountriesCity::class)->name('countries-city');
    Route::get('/companies', Companies::class)->name('companies');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
