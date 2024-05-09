<?php

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_barang' => 'BRG001',
                'nama_barang' => 'Buku Tulis',
                'harga_barang' => 5000,
                'deskripsi_barang' => 'Buku tulis dengan kertas berkualitas tinggi',
                'satuan_id' => 1, // ID dari satuan yang sesuai
            ],
            [
                'kode_barang' => 'BRG002',
                'nama_barang' => 'Pensil',
                'harga_barang' => 2000,
                'deskripsi_barang' => 'Pensil dengan kualitas yang baik',
                'satuan_id' => 1, // ID dari satuan yang sesuai
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel barang
        foreach ($data as $barang) {
            Barang::create($barang);
        }
    }
}
