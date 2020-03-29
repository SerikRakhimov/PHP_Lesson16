<?php

namespace App;

use App\Order;
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


Route::get('/order/create','OrderController@create')
    ->name('order.create');
Route::get('/order/index','OrderController@index')
    ->name('order.index');
Route::get('/order/{order}','OrderController@show')
    ->name('order.show');
Route::post('/order/store','OrderController@store')
    ->name('order.store');
Route::get('/order/{order}/edit','OrderController@edit')
    ->name('order.edit');
Route::put('/order/{order}','OrderController@update')
    ->name('order.update');
Route::delete('/order/{order}','OrderController@delete')
    ->name('order.delete');

