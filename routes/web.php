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
    $dccomics = config('dccomics');
    $iconsList = config('iconsList');
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.comics', [
        "menu" => $menu,
        "comics" => $covers,
        'navbuyComics' => $navbuyComics,
        'iconsList' => $iconsList,
        'dccomics' => $dccomics
    ]);
})->name('home');

Route::get('/charactecrs', function () {
    $dccomics = config('dccomics');
    $iconsList = config('iconsList');
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    $menu = config('menu');
    return view('guest.charactecrs', [
        "menu" => $menu,
        "comics" => $covers,
        'navbuyComics' => $navbuyComics,
        'iconsList' => $iconsList,
        'dccomics' => $dccomics
    ]);
})->name('charactecrs');





Route::get('/comics/{id}', function ($id) {
    $dccomics = config('dccomics');
    $iconsList = config('iconsList');
    $navbuyComics = config('navbuyComics');
    $covers = config('comics');
    if (is_numeric($id) && $id >= 0 && $id < count($covers)) {

        $cover = $covers[$id];

        $menu = config('menu');
        return view(
            'guest.infocover',
            [
                "menu" => $menu,
                "comic" => $cover,
                'navbuyComics' => $navbuyComics,
                'iconsList' => $iconsList,
                'dccomics' => $dccomics
            ]
        );
    } else {
        abort(404, 'comic not find');
    }
})->name('info-cover');
