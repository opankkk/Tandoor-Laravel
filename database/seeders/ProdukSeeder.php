<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'user_id' => 1,
            'nama_produk' => 'Tomat',
            'harga' => 'Rp.10.000',
            'deskripsi' => 'Tomat Merah'
        ]);
    }
}
