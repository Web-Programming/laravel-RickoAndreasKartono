<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Buat route ke halaman profile
Route::get("/profil", function () {
    return view("profil");
});

//Route dengan paramater
Route::get("/mahasiswa/{nama}", function ($nama = "Ricko") {
    echo "<h1>Halo Nama Saya $nama</h1>";
});

//Route dengan paramater(tidak wajib)
Route::get("/mahasiswa2/{nama?}", function ($nama = "Ricko") {
    echo "<h1>Halo Nama Saya $nama</h1>";
});

//Route dengan paramater lebih dari 1
Route::get("/profil/{nama?}/{pekerjaan?}/{umur?}", function ($nama = "Ricko", $pekerjaan = "Mahasiswa", $umur = "18") {
    echo "<h1>Halo Nama Saya $nama. Saya adalah $pekerjaan. umur saya adalah $umur</h1>";
});

//Redirect
Route::get("/hubungi", function () {
    echo "<h1>Hubungi kami</h1>";
})->name("call"); //named route

Route::redirect("/contact", "/hubungi");

Route::get("/halo", function () {
    echo "<a href='" . route('call') . "'>" . route('call') . "</a>";
});

Route::prefix("/mahasiswa")->group(function(){
    Route::get("/jadwal", function () {
        echo "<h1>Jadwal Mahasiswa<h1>";
    });
    Route::get("/materi", function () {
        echo "<h1>Materi Perkuliahan<h1>";
    });
    //dan lain2
});
