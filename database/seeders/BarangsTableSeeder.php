<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang' =>'Laptop', 'jenis_barang'=>'Elektronik', 'harga'=>'Rp.8.000.000', 'stok'=>'5'],
            ['nama_barang' =>'Kerudung', 'jenis_barang'=>'Pakaian', 'harga'=>'Rp.45.000', 'stok'=>'10'],
            ['nama_barang' =>'Jepit Rambut', 'jenis_barang'=>'Aksesoris', 'harga'=>'Rp.12.000', 'stok'=>'7'],
            ['nama_barang' =>'Handphone', 'jenis_barang'=>'Elektronik', 'harga'=>'Rp.5.000.000', 'stok'=>'9'],
            ['nama_barang' =>'Tv', 'jenis_barang'=>'Elektronik', 'harga'=>'Rp.16.000.000', 'stok'=>'4'],
            ['nama_barang' =>'Baju', 'jenis_barang'=>'Pakaian', 'harga'=>'Rp.100.000', 'stok'=>'15'],
            ['nama_barang' =>'Celana', 'jenis_barang'=>'Pakaian', 'harga'=>'Rp.200.000', 'stok'=>'12'],
            ['nama_barang' =>'Sepatu', 'jenis_barang'=>'Pakaian', 'harga'=>'Rp.1.000.000', 'stok'=>'9'],
            ['nama_barang' =>'Pensil', 'jenis_barang'=>'Alat Tulis', 'harga'=>'Rp.10.000', 'stok'=>'20'],
            ['nama_barang' =>'Pengahpus', 'jenis_barang'=>'Alat Tulis', 'harga'=>'Rp.5.000', 'stok'=>'16']

           ];
           // masukan data ke database
           DB::table('barangs')->insert($barangs);
    
        
    }
}
