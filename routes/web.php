<?php

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

// Route Basic
Route::get('/about', function(){
    return '<h1>Halo</h1>'
        .'Selamat datang di webapp saya<br>'
        .'Laravel emang keren.';
});

// Route Parameter
Route::get('pesan/{makan}', function($mkn){
    return 'Makanan yang Saya Pesan adalah '.$mkn;
});

// Route 3 Parameter
Route::get('gofood/{makan}/{minum}/{harga}', function($mkn,$mnm,$hrg){
    return 'Tadi saya nge-Gofood, Makanan yang Saya Pesan adalah '.$mkn.
        '<br>Minumannya '.$mnm.
        '<br>Harga Makanan sama Minumannya Rp ' .$hrg;
});


// Route::get('profil', function(){
//     return view('biodata');
// });

// Route::get('profil-1', function(){
//     return view('biodata1');
// });

// Route::get('profil-2', function(){
//     return view('biodata2');
// });

// Route::get('profil-3', function(){
//     return view('biodata3');
// });

// Route::get('profil-4', function(){
//     return view('biodata4');
// });

// Route::get('profil-5', function(){
//     return view('biodata5');
// });
