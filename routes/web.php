<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukkController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;













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

Route::get('about', function(){
    return 'Ini Halaman About';
});
Route::get('contact', function(){
    return 'Ini Halaman Contact';
});
Route::get('biodata', function(){
    return "Nama Depan : Kirana"."<br>". 
           "Nama Belakang : Siti Aisah"."<br>".
           "Jenis Kelamin : Perempuan"."<br>".
           "Tanggal Lahir : 27 Juli 2008"."<br>".
           "Agama : Islam"."<br>".
           "Alamat : Rancamanyar"."<br>".
           "Telepon : 088229485067"."<br>";
});
//parameter
Route::get('biodata2/{depan}/{belakang}/{jenis}/{tgl}/{agama}/{alamat}/{telepon}', function($nama_depan,$nama_belakang,$jenis,$tanggal,$agama,$alamat,$telepon){
    return "Nama Depan : $nama_depan"."<br>". 
           "Nama Belakang : $nama_belakang"."<br>".
           "Jenis Kelamin : $jenis"."<br>".
           "Tanggal Lahir : $tanggal"."<br>".
           "Agama : $agama"."<br>".
           "Alamat : $alamat"."<br>".
           "Telepon :$telepon"."<br>";

});
Route::get('latihan/{bilangan1}/{bilangan2}', function($bilangan1,$bilangan2){
    return "Bilangan Ke 1 = $bilangan1"."<br>".
           "Bilangan Ke 2 = $bilangan2"."<br>". 
           "Penjumlahan = ". $bilangan1 + $bilangan2. "<br>".
           "Pengurangan = ". $bilangan1 - $bilangan2. "<br>". 
           "Perkalian = ".$bilangan1 * $bilangan2. "<br>".
           "Pembagian = ". $bilangan1 / $bilangan2. "<br>";
 });
Route :: get('murid', function(){

    $data_murid = ["Robben", "Marsel", "Kirana", "Adit"];
    $kelas = ["XI RPL 1","XI RPL 2","XI RPL 3","XI RPL 1"];

    return view('halaman_murid',compact('data_murid','kelas'));
});
Route:: get('/post', function(){

    $posts = Post::all();

    return view('Tampil_post',compact('posts'));
});

Route:: get('post',[PostController::class,'menampilkan']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//crud 
Route::resource('nilai', NilaiController::class);
Route::resource('produk', ProdukController::class);
Route::resource('pendaftaran', PendaftaranController::class);
Route::resource('product', ProductController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('telepon', TeleponController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('produkk', ProdukkController::class);
Route::resource('obat', ObatController::class);
Route::resource('pembeli', PembeliController::class);
Route::resource('transaksi', TransaksiController::class);