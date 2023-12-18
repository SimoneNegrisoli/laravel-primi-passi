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
    return view('home');
})->name('home');


Route::get('/about', function () {
    $data = [
        'nome' => 'simone',
        'eta' => '29',
        'classe' => '107',
        'colors' => [
            'primo' => 'rosso',
            'secondo' => 'giallo',
            'terzo' => 'verde',
        ],
    ];
    return view('about', $data);
})->name('about');

Route::get('/contacts', function () {
    $data = [
        'nome' => 'Boolean',
        'corso' => 'corso full stack developer',
    ];
    return view('pages.contacts', $data);
})->name('contacts');
