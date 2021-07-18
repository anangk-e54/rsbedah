<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DoctorsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PagesController::class, 'index']);
Route::view('/jadwaldokter','jadwal-dokter/index');
Route::get('/doctor',[DoctorsController::class, 'index'])->name('doctorlist');
Route::get('/doctor/create',[DoctorsController::class, 'create']);
Route::post('/doctor/store',[DoctorsController::class, 'store']);
Route::view('/count','count');