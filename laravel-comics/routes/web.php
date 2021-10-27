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
    $array_comics = config("dbApp.comics");
    $array_footer = config("dbApp.infoFooter");
    $header_menu = config("dbApp.menu");
    $cards = config("dbApp.cards");
    $data = 
    [
        "comics" => $array_comics,
        "menu"   => $header_menu,
        "stiCards" => $cards,
        "footerInfo" => $array_footer,        

    ];
    return view('home', $data);
});


