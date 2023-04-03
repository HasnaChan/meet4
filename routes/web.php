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
    return view('master');
});


Route::get('/mahasiswa', function () {
    $nama = 'Hasna Salsabilla Abdullah';
    $nilai = 100;
    return view('example.mahasiswa',compact('nama','nilai'));
 });


Route::get('/', function(){
    return view('home');
});
Route::get('/tentang', function(){
    return view('tentang');
});
Route::get('/kontak', function(){
    return view('kontak');
});


//GENSHIN
Route::get('/genshin', function () {
    $characters = [
        ['name' => 'Qiqi', 'element' => 'Anemo', 'image' => 'qiqi.png'],
        ['name' => 'Diluc', 'element' => 'Pyro', 'image' => 'diluc.webp'],
        ['name' => 'Keqing', 'element' => 'Electro', 'image' => 'keqing.webp'],
        ['name' => 'Klee', 'element' => 'Pyro', 'image' => 'klee.webp']

    ];
    return view('example.genshin', compact('characters'));
    //compact -> berguna untuk membuat array dari variabel dan nilainya.
});
