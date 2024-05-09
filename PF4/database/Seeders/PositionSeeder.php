<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus entri yang sudah ada di tabel positions
        DB::table('positions')->truncate();

        // Tambahkan kembali entri kelas 1 sampai 6
        DB::table('positions')->insert([
            [
                'code' => '1',
                'name' => 'barang berat',
                'description' => 'barang berat'
            ],
            [
                'code' => '2',
                'name' => 'barang ringan',
                'description' => 'barang ringan'
            ],
            [
                'code' => '3',
                'name' => 'barang standar',
                'description' => 'barang standar'
            ],
            [
                'code' => '4',
                'name' => 'barang privat',
                'description' => 'barang privat'
            ],
        ]);
    }
}
