<?php

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
    return view('main');
});

Route::get('/item/{id}', function($id) {
  return view('item');
});

Route::get('/category/{id}', function($id) {
  return view('category');
});

Route::get('/search/{query}', function($query) {
  return view('item');
});


Route::get('/admin', function() {
  return view('admin');
});
