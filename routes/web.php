<?php

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
    return view('pages/home');
})->name('/');


Route::get('about' ,[\App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('services',[\App\Http\Controllers\ServicesController::class,'index'])->name('services');

Route::get('pricing',[\App\Http\Controllers\PricingController::class,'index'])->name('pricing');
Route::get('contact',[\App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::get('get-quote',[\App\Http\Controllers\GetquoteController::class,'index'])->name('getquote');
Route::get('services-details',[\App\Http\Controllers\ServicesdetailsController::class,'index'])->name('services-details');
