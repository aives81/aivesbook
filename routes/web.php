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
    return view('welcome');
});

Route::get('/About-me', function () {
    return view('about');
});

Route::get('/Mes-services', function () {
    return view('services');
});

Route::get('/Mes-experiences', function () {
    return view('experiences');
});

Route::get('/Mes-realisations', function () {
    return view('realisations');
});

Route::get('/Ma-formation', function () {
    return view('formations');
});

Route::get('/Contactez-moi', function () {
    return view('contact');
});
