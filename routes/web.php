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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth']],function(){

	// BOOKS
	Route::get('/books','BookController@index');
	Route::post('/books','BookController@store');

	// CATEGORIES
	Route::get('/categories','CategoryController@index')->name('categories');
	Route::post('/categories','CategoryController@store');
	Route::put('/categories/{category}','CategoryController@update');
	Route::delete('/categories/{category}','CategoryController@destroy');

});



