<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            ['nama_kategori' => 'Pizza', 'deskripsi' => 'Deskripsi untuk Pizza'],
            ['nama_kategori' => 'Burger', 'deskripsi' => 'Deskripsi untuk Burger'],
            ['nama_kategori' => 'Pasta', 'deskripsi' => 'Deskripsi untuk Pasta'],
            ['nama_kategori' => 'Fries', 'deskripsi' => 'Deskripsi untuk Fries'],
        ];

        foreach ($kategori as $kat) {
            Kategori::create($kat);
        }
    }
}