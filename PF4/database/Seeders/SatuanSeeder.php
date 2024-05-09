<?php

use Illuminate\Database\Seeder;
use App\Models\Satuan;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data ke tabel satuan
        $data = [
            [
                'kode_satuan' => 'PCS',
                'nama_satuan' => 'Pieces',
            ],
            [
                'kode_satuan' => 'KG',
                'nama_satuan' => 'Kilogram',
            ],
            [
                'kode_satuan' => 'M',
                'nama_satuan' => 'Meter',
            ],
            [
                'kode_satuan' => 'L',
                'nama_satuan' => 'Liter',
            ],
        ];


        // Masukkan data ke dalam tabel satuan
        foreach ($data as $satuan) {
            Satuan::create($satuan);
        }
    }
}
