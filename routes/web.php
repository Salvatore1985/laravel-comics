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
    $iconsList = config('iconsList');
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('app', [
        "menu" => $menu,
        "comics" => $covers,
        'navbuyComics' => $navbuyComics,
        'iconsList' => $iconsList
    ]);
});

Route::get('/charactecrs', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.charactecrs', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('charactecrs');
Route::get('/comics', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.comics', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('comics');
Route::get('/movies', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.movies', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('movies');
Route::get('/tv', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.tv', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('tv');
Route::get('/games', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.games', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('games');
Route::get('/collectivles', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.collectivles', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('collectivles');
Route::get('/videos', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.videos', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('videos');
Route::get('/fans', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.fans', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('fans');
Route::get('/news', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.news', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('news');
Route::get('/shop', function () {
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.shop', ["menu" => $menu, 'comics' => $covers, 'navbuyComics' => $navbuyComics]);
})->name('shop');
