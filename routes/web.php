<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\user\Logincontroller;
use App\Http\Controllers\client\CalculaterCOntroller;
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
Route::get('/user', [Logincontroller::class, 'index']);
Route::any('/', [CalculaterCOntroller::class, 'index']);
// Route::post('/', [CalculaterCOntroller::class, 'index']);

