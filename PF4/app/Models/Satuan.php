<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Satuan extends Model
{
    use HasFactory;

    protected $table = 'satuans';

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'satuan_id', 'id');
    }
}
