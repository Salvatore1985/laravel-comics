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
    $menu = config('menu');
    return view('app', ["menu" => $menu]);
});

Route::get('/charactecrs', function () {
    $menu = config('menu');
    return view('guest.charactecrs', ["menu" => $menu]);
})->name('charactecrs');
Route::get('/comics', function () {
    $menu = config('menu');
    return view('guest.comics', ["menu" => $menu]);
})->name('comics');
Route::get('/movies', function () {
    $menu = config('menu');
    return view('guest.movies', ["menu" => $menu]);
})->name('movies');
Route::get('/tv', function () {
    $menu = config('menu');
    return view('guest.tv', ["menu" => $menu]);
})->name('tv');
Route::get('/games', function () {
    $menu = config('menu');
    return view('guest.games', ["menu" => $menu]);
})->name('games');
Route::get('/collectivles', function () {
    $menu = config('menu');
    return view('guest.collectivles', ["menu" => $menu]);
})->name('collectivles');
Route::get('/videos', function () {
    $menu = config('menu');
    return view('guest.videos', ["menu" => $menu]);
})->name('videos');
Route::get('/fans', function () {
    $menu = config('menu');
    return view('guest.fans', ["menu" => $menu]);
})->name('fans');
Route::get('/news', function () {
    $menu = config('menu');
    return view('guest.news', ["menu" => $menu]);
})->name('news');
Route::get('/shop', function () {
    $menu = config('menu');
    return view('guest.shop', ["menu" => $menu]);
})->name('shop');
