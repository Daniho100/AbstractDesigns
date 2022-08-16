<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// All Home routes

Route::get('/redirects', [HomeController::class,'index'])->middleware('verified');

Route::get('/view_messages',[HomeController::class,'viewMessages']);

Route::post('/sendMessage',[HomeController::class,'sendMessages']);

Route::get('/user',[HomeController::class,'user']);

Route::get('/admin',[HomeController::class,'admin']);

// All Admin routes

Route::get("search",[AdminController::class,"search"]);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);

Route::get('/delete/{id}',[AdminController::class,'delete']);

Route::get('/view_AdminMessages',[AdminController::class,'viewAdminMessages']);

