<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneFormController;
use App\Http\Controllers\PhoneDataController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form', [PhoneFormController::class, 'showForm'])->name('Form');
Route::post('/success', [PhoneFormController::class, 'submitForm']);

Route::get('/Data', [PhoneDataController::class, 'index'])->name('Data');