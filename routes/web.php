<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $comics = config('db');
    return view('main', compact('comics'));
})->name('main');
