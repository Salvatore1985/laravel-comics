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
    $covers = config('comics');
    $menu = config('menu');
    return view('app', ["menu" => $menu, "comics" => $covers]);
});

Route::get('/charactecrs', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.charactecrs', ["menu" => $menu, 'comics' => $covers]);
})->name('charactecrs');
Route::get('/comics', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.comics', ["menu" => $menu, 'comics' => $covers]);
})->name('comics');
Route::get('/movies', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.movies', ["menu" => $menu, 'comics' => $covers]);
})->name('movies');
Route::get('/tv', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.tv', ["menu" => $menu, 'comics' => $covers]);
})->name('tv');
Route::get('/games', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.games', ["menu" => $menu, 'comics' => $covers]);
})->name('games');
Route::get('/collectivles', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.collectivles', ["menu" => $menu, 'comics' => $covers]);
})->name('collectivles');
Route::get('/videos', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.videos', ["menu" => $menu, 'comics' => $covers]);
})->name('videos');
Route::get('/fans', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.fans', ["menu" => $menu, 'comics' => $covers]);
})->name('fans');
Route::get('/news', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.news', ["menu" => $menu, 'comics' => $covers]);
})->name('news');
Route::get('/shop', function () {
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.shop', ["menu" => $menu, 'comics' => $covers]);
})->name('shop');
