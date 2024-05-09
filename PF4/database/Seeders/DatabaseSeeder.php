<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BarangSeeder::class, // Sesuaikan dengan nama seeder barang Anda
            SatuanSeeder::class, // Sesuaikan dengan nama seeder barang Anda
        ]);
    }
}
