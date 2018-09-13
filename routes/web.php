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
    $links = [
        // key => value
        'https://platzi.com/laravel' => 'Curso de Laravel',
        'https://laravel.com' => 'Pagina de Laravel'
    ];
    return view('welcome', [
        'teacher' => 'Diego Curumaco',
        'links' => $links
    ]);
});

Route::get('/acerca', function() {
    return view('about');
});