<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/characters', function () {
    return view('guest.characters');
})->name('guest.characters');

Route::get('/comics', function () {
    $result = config('db.comics');
    $footerList = config('footer');



    $actions = config('db.action_client');
    // @dd($footerList);
    // @dd($result);
    return view('comics.index', compact('result'), compact('actions'), compact('footerList'));
})->name('guest.comics');




Route::get('/comics/{id}', function ($id) {

    $comic = config('db.comics')[$id];

    return view('comics.post', compact('comic'));
})->name('comic');




Route::get('/movies', function () {
    return view('guest.movies');
})->name('guest.movies');

Route::get('/tv', function () {
    return view('guest.tv');
})->name('guest.tv');

Route::get('/games', function () {
    return view('guest.games');
})->name('guest.games');

Route::get('/collectibles', function () {
    return view('guest.collectibles');
})->name('guest.collectibles');

Route::get('/video', function () {
    return view('guest.video');
})->name('guest.video');

Route::get('/fans', function () {
    return view('guest.fans');
})->name('guest.fans');

Route::get('/news', function () {
    return view('guest.news');
})->name('guest.news');
