<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\AuthController;

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

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route ::post('/postlogin',[AuthController::class, 'postlogin']);
Route ::get('/logout',[AuthController::class,'logout']);

Route::get('/',[PagesController::class, 'index']);

Route::view('/jadwaldokter','jadwal-dokter/index');
Route::view('/profil','homepage/profil');
Route::get('/tim-dokter',[DoctorsController::class, 'view']);
Route::get('/profil-dokter/{doctor}',[DoctorsController::class, 'detail'])->name('detaildokter');

Route::view('/fasilitas','/homepage/fasilitas');

Route::get('/jadwal-dokter',[SchedulesController::class, 'index']);

Route::get('/artikel',[ArticlesController::class, 'view']);
Route::get('/artikel-berita/{article}',[ArticlesController::class, 'show']);

Route::get('/layanan',[PagesController::class, 'layanan']);

Route::middleware('auth')->group(function () {
Route::get('/doctor',[DoctorsController::class, 'index'])->name('doctorlist');
Route::get('/doctor/create',[DoctorsController::class, 'create']);
Route::post('/doctor/store',[DoctorsController::class, 'store']);
Route::get('/doctor/{doctor}',[DoctorsController::class, 'show'])->name('doctorshow');
Route::post('/doctor/{doctor}',[DoctorsController::class, 'update']);
Route::delete('/doctor/{doctor}',[DoctorsController::class, 'destroy']);

Route::post('/schedule/store',[SchedulesController::class, 'store']);
Route::post('/schedule/{schedule}',[SchedulesController::class, 'update']);
Route::delete('/schedule/{schedule}',[SchedulesController::class, 'destroy']);



Route::get('/article',[ArticlesController::class, 'index'])->name('articlelist');
Route::get('/article/create',[ArticlesController::class, 'create']);
Route::post('/article/store',[ArticlesController::class, 'store']);
Route::get('/article/{article}',[ArticlesController::class, 'edit'])->name('editarticle');
Route::post('/article/{article}',[ArticlesController::class, 'update']);
Route::delete('/article/{article}',[ArticlesController::class, 'destroy']);

Route::get('/facility',[FacilitiesController::class, 'index'])->name('facilitylist');
Route::get('/facility/create',[FacilitiesController::class, 'create']);
Route::post('/facility/store',[FacilitiesController::class, 'store']);


Route::view('/contact','/contact');

});


Route::view('/count','count');