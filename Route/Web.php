<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\HargaController;

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

//Route::get('/', function () {
    //return view('home');
//});

Route::get('/',[BlogController::class, 'index']);

//LOGIN LOGOUT

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentikasi']);

Route::get('/logout', [LoginController::class, 'logout']);

//USER

Route::get('/user', [BlogController::class, 'user']);

Route::get('/user/tambah', [BlogController::class, 'tambahuser']);
Route::post('/user/tambah', [BlogController::class, 'simpantambahuser']);

Route::get('/user/edit/{user_id}', [BlogController::class, 'edituser']);
Route::post('/user/edit/{user_id}', [BlogController::class, 'simpanedituser']);

Route::get('/user/hapus/{user_id}', [BlogController::class, 'hapususer']);

//KATEGORI

Route::get('/kategori', [BlogController::class, 'kategori']);

Route::get('/kategori/tambah', [BlogController::class, 'tambahkategori']);
Route::post('/kategori/tambah', [BlogController::class, 'simpantambahkategori']);

Route::get('/kategori/edit/{user_id}', [BlogController::class, 'editkategori']);
Route::post('/kategori/edit/{user_id}', [BlogController::class, 'simpaneditkategori']);
    
Route::get('/kategori/hapus/{user_id}', [BlogController::class, 'hapuskategori']);

Route::resource('category', categoryController::class);
Route::resource('post', App\Http\Controllers\postController::class);

//FRONTEND

Route::get('/iki', function () {
    return view('/frontend/iki');
});

//PAGES

Route::get('/portfolio', function () {
    return view('/layouts/portfolio');
});
Route::get('/harga', function () {
    return view('/layouts/harga');
});

Route::get('/harga', [HargaController::class, 'index']);


//BACKEND

Route::get('/dashboard', function(){
    return view ('/layouts/dashboard');
})->middleware('auth');

Route::get('/edit', function () {
    return view('/backend/profile/edit');
});

