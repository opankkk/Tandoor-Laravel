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
    for ($i = 1; $i <= 5; $i++) {
      Produk::create([
        'user_id' => $i,
        'nama_produk' => 'Produk ' . $i,
        'harga' => 10000.00,
        'deskripsi' => 'Deskripsi Produk ' . $i
      ]);
    }
  }
}
