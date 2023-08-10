<?php

use App\Http\Controllers\Frontend\BlogsController;
use App\Http\Controllers\Frontend\CareersController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ReportsController;
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
    return redirect('/home');
});

Route::get('/home',[HomePageController::class,'Home']);
Route::get('/contact', function () {
    return view('contactUs');
   
});

Route::get('/careers',[CareersController::class,'Careers']);

Route::get('/news',[NewsController::class,'News']);
Route::get('/blog',[BlogsController::class,'Blogs']);

Route::get('/reports',[ReportsController::class,'Reports']);

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
