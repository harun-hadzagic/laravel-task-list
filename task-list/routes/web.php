<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'name' => 'Harun'
    ]);
});

Route::get('/hello', function(){
    return "Hello";
})->name('HELLO');

Route::get('/hallo', function(){
    return redirect()->route('HELLO');
});

Route::get('/greet/{name}', function($name){
    return 'Hello ' . $name . '!';
});

Route::fallback(function(){
    return 'Still got somewhere';
});