<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['nama_kategori' => 'Pizza', 'deskripsi' => 'Pizza is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients.'],
            ['nama_kategori' => 'Burger', 'deskripsi' => 'A burger is a sandwich consisting of one or more cooked patties—usually ground meat, typically beef—placed inside a sliced bread roll or bun.'],
            ['nama_kategori' => 'Pasta', 'deskripsi' => 'Pasta is a type of food typically made from an unleavened dough of wheat flour mixed with water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking.'],
            ['nama_kategori' => 'Fries', 'deskripsi' => 'French fries, or simply fries, are deep-fried potatoes, usually cut into pieces and seasoned with salt.'],
        ];

        DB::table('kategori')->insert($kategori);
    }
}
