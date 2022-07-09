<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\BackendController;

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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentikasi']);

Route::get('/logout', [LoginController::class, 'logout']);

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

Route::get('/dashboard', function(){
    return view ('/layouts/dashboard');
})->middleware('auth');

Route::resource('category', categoryController::class);
Route::resource('post', App\Http\Controllers\postController::class);

//UPLOAD IMAGE
Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

//FRONTEND
Route::get('/iki', function () {
    return view('/frontend/iki');
});

//BACKEND
Route::get('/edit', function () {
    return view('/backend/profile/edit');
});

//PAGES
Route::get('/portfolio', function () {
    return view('/layouts/portfolio');
});
Route::get('/harga', function () {
    return view('/layouts/harga');
});

Route::get('/harga', [HargaController::class, 'index']);
