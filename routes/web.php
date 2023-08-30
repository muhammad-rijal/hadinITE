<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gedung;
use App\Http\Controllers\Fakultas;

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

Route::get('/', [Fakultas::class, 'index']);

Route::get('/gedung/{id}', [Gedung::class, 'index']);


