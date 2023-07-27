<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', function () {
    return view('welcome');
   
});
Route::get('/home', function () {
    return view('Home');
   
});
Route::get('/contact', function () {
    return view('contactUs');
   
});
Route::get('/careers', function () {
    return view('careers');
   
});
Route::get('/news', function () {
    return view('News');
   
});
Route::get('/blog', function () {
    return view('blog');
   
});
Route::get('/reports', function () {
    return view('report');
   
});

// Route::get('/search/', 'App\Http\Controllers\JobController@search')->name('search');
Route::post('search',[JobController::class,'search']);
Route::get('search',[JobController::class,'search']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//
Route::get('clients',[ClientController::class , 'index']);
Route::get('services',[ServiceController::class , 'index']);
