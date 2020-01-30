<?php

Route::get('/', function () {
    return view('welcome');
});


//example how to send a variable from the router to the view
Route::get('/about', function () {
    return view('about', ['name' => 'Taylor']);
});

Route::get('/contact', function () {
    $books = [ 'Book1', 'Book2', 'Book3'];
    return view('contact', compact('books'));
});

Route::get('/authors', 'AuthorsController@index');

Route::get('/authors/create', 'AuthorsController@create');

Route::post('/authors', 'AuthorsController@store');

Route::get('/authors/{author}', 'AuthorsController@show');

Route::get('/authors/{author}/edit', 'AuthorsController@edit');

Route::patch('/authors/{author}', 'AuthorsController@update');

Route::delete('/authors/{author}', 'AuthorsController@destroy');

