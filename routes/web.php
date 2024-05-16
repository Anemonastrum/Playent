<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RentalController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');


Route::get('playstation/createinvent', 'App\Http\Controllers\PlaystationController@createinvent')->name('playstation.createinvent');
Route::post('playstation/createinvent', 'App\Http\Controllers\PlaystationController@storeinvent')->name('playstation.storeinvent');
Route::get('playstation/{invent}/editinvent', 'App\Http\Controllers\PlaystationController@editinvent')->name('playstation.editinvent');
Route::put('playstation/{invent}/updateinvent', 'App\Http\Controllers\PlaystationController@updateinvent')->name('playstation.updateinvent');
Route::delete('playstation/{invent}/destroyinvent', 'App\Http\Controllers\PlaystationController@destroyinvent')->name('playstation.destroyinvent');

Route::resource('playstation', 'App\Http\Controllers\PlaystationController');
Route::resource('paket', 'App\Http\Controllers\PaketController');
Route::resource('rental', 'App\Http\Controllers\RentalController');

