<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (Request $request) {
    return view('welcome');
})->name('root');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/medias/{user}', [MediaController::class, 'index'])->name('medias');

Route::get('/new', [MediaController::class, 'create'])->name('medias.create');
Route::post('/new', [MediaController::class, 'store'])->name('medias.store');





