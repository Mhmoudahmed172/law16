<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin'], function () {
    Route::get('/setting', [adminController::class,'setting']);
    Route::get('/users', [adminController::class,'users']);
    Route::get('/blogs', [adminController::class,'blogs']);
    Route::get('/ourWork', [adminController::class,'ourWork']);
    Route::get('/services', [adminController::class,'services']);
        
    });
    

Route::get('/admin', function () {
    return view('admin');
});

Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

