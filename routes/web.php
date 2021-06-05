<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SakitController;

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
Route::get('', [SakitController::class, 'index']);
Route::get('/0098edit', [SakitController::class, 'edit']);
Route::get('/0098pasien', [SakitController::class, 'pasien']);
Route::get('/0098tambah', [SakitController::class, 'tambah']);
Route::get('/0098filter', [SakitController::class, 'filter']);
Route::get('/0098index', [SakitController::class, 'index']);
Route::get('/0098filter2', [SakitController::class, 'filter2']);
Route::post('/pasien/store', [SakitController::class, 'store']);
Route::get('/pasien/edit/{id}',[SakitController::class, 'edit']);
Route::post('/pasien/update',[SakitController::class, 'update']);
Route::get('/0098filter3', [SakitController::class, 'filter3']);
Route::get('/0098filter4', [SakitController::class, 'filter4']);
Route::get('/pasien/hapus/{id}',[SakitController::class,'hapus']);
