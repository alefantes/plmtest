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
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['namespace' => 'Plm', 'prefix' => 'plm'], function () {
    Route::get('/', 'IndexController')->name('plm.index');
    Route::get('/create', 'CreateController')->name('plm.create');
    Route::post('/', 'StoreController')->name('plm.store');
    Route::get('/{plm}', 'ShowController')->name('plm.show');
    Route::get('/edit/{plm}', 'EditController')->name('.plm.edit');
    Route::patch('/{plm}', 'UpdateController')->name('plm.update');
    Route::delete('/{plm}', 'DestroyController')->name('plm.delete');
});



Auth::routes();
