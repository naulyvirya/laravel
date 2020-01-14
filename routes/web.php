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

// Route Optional Parameter
Route::get('halo/{nama?}/{kelas?}', function($nama='Nauly'){
    return 'Haloo nama saya adalah ' .$nama;
});

// Route Optional 3 Parameter
Route::get('pesanan/{makanan?}/{minuman?}/{harga?}', function($makan=null,$minum=null,$harga=null){
    if (isset($makan)) {
        echo 'Anda memesan ' .$makan;
    } if (isset($minum)) {
        echo ' dan ' .$minum;
    } if (isset($harga)) {
        echo ' dengan Harga Rp' .$harga;
    } if ($makan == null && $minum == null && $harga == null) {
        echo 'Anda belum memesan.';
    }
});

Route::get('/penggajian', function(){
    $query = App\Penggajian::all();
    return $query;
});

// Mengakses Model
Route::get('/testmodel', function(){
    $query = App\Post::all();
    return $query;
});

Route::get('/testmodel1', function(){
    $query = App\Post::find(8);
    return $query;
});

Route::get('/testmodel2', function(){
    $query = App\Post::where('title','like','%Tips Menikah%')->get();
    return $query;
});

Route::get('/testmodel3', function(){
    $post = App\Post::find(8);
    $post->title="Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('/testmodel4', function(){
    $post = App\Post::find(8);
    $post->delete();
    // cek data di database
});

Route::get('/testmodel5', function(){
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "Shalat Malam, Sedekah, Puasa Sunah, Silaturahmi, Senyum, Doa, tobat";
    $post->save();
    return $post;
});

Route::get('hello', 'SiswaController@hello');
Route::get('nama', 'SiswaController@nama');
Route::get('kelas', 'SiswaController@kelas');
Route::get('alamat', 'SiswaController@alamat');
Route::get('sekolah', 'SiswaController@sekolah');
Route::get('hobi', 'SiswaController@hobi');
Route::get('ttl', 'SiswaController@ttl');
Route::get('umur', 'SiswaController@umur');
Route::get('teman', 'SiswaController@teman_sebangku');
Route::get('pulang', 'SiswaController@jam_pulang');
Route::get('warnakucing/{warna?}', 'SiswaController@warnakucing');
Route::get('beli/{makanan?}/{harga?}', 'SiswaController@beli');

Route::get('profil', function(){
    return view('biodata');
});

Route::get('profil-1', function(){
    return view('biodata1');
});

Route::get('profil-2', function(){
    return view('biodata2');
});

Route::get('profil-3', function(){
    return view('biodata3');
});

Route::get('profil-4', function(){
    return view('biodata4');
});

Route::get('profil-5', function(){
    return view('biodata5');
});

// CRUD BOOK
Route::get('book', 'BookController@index');
Route::get('book-create/{judul}','BookController@create');
Route::get('book/{id}','BookController@show');
Route::get('book-edit/{id}/{judul}','BookController@edit');
Route::get('book-delete/{id}','BookController@delete');
Route::get('book-select','BookController@select');
Route::get('book-count','BookController@count');
