<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'BlogController@index')->name('home');

Route::get('/blogs', 'BlogController@index')->name('blogs');
Route::get('/blogs/create', 'BlogController@create')->name('blogs.create');
Route::post('/blogs/store', 'BlogController@store')->name('blogs.store');
//Trash Route
Route::get('/blogs/trash', 'BlogController@trash')->name('blogs.trash');
Route::get('/blogs/trash/{id}/restore', 'BlogController@restore')->name('blogs.restore');
Route::delete('/blogs/trash/{id}/permanent-delete', 'BlogController@permanentDelete')->name('blogs.permanent-delete');

Route::get('/blogs/{id}', 'BlogController@show')->name('blogs.show');
Route::get('/blogs/{id}/edit', 'BlogController@edit')->name('blogs.edit');
Route::patch('/blogs/{id}/update', 'BlogController@update')->name('blogs.update');
Route::delete('/blogs/{id}/delete', 'BlogController@delete')->name('blogs.delete');

//Admin Routes
Route::get('/admin', 'AdminController@index')->name('admin.index');