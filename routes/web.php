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
/**
    //Route::controller(SitesController::class)
    //    ->group(function() {
    //        Route::get('index', 'index')->name('index');
    //    });

     //    dd($val = \Illuminate\Support\Facades\Crypt::encryptString('touhid'),
    //    \Illuminate\Support\Facades\Crypt::decryptString($val));
 */

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
