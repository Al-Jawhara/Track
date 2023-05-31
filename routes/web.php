<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

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
// Route::get('/apple1',[PhoneController::class,'apple1']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', function (){
    auth()->logout();
    Session()->flush();    
    return Redirect::to('/track');    
})->name('logout');
        
Route::get('/alhela',[TrackController::class,'alhela']);
Route::get('/alhela2',[TrackController::class,'alhela2']);
   

Route::get('/track',[TrackController::class,'track']);
Route::get('/checkout/{id}',[TrackController::class,'checkout'])->name('checkout');
Route::get('/invoice',[TrackController::class,'invoice'])->name('invoice');
Route::get('/product',[TrackController::class,'product'])->name('product');
