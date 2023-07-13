<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get ('/name-form/{id?}',[CarController::class, 'form']);
Route::post('/submitName',[CarController::class, 'formSubmit']);
Route::post('/delete-name',[CarController::class, 'deleteCar']);
Route::get ('/form',[CarController::class, 'form']);
Route::get('/table',[CarController::class, 'getCars'])  ;  

Route::get('/app', function () {
    return view('app');
});