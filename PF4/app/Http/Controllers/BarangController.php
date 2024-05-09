<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan; // Jika menggunakan model

class BarangController extends Controller
{
    public function index()
    {
        $pageTitle = 'Daftar Barang';
        $barangs = Barang::all();
        return view('barang.index', compact('pageTitle', 'barangs'));
    }

    public function create()
    {
        $pageTitle = 'Tambah Barang';
        $satuans = DB::table('satuans')->get(); // Mengambil semua data satuan dari tabel "satuans"
        return view('barang.create', compact('pageTitle', 'satuans'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barangs,kode_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'nullable',
            'satuan_id' => 'required|exists:satuans,id', // Ubah "satuan" menjadi "satuans"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $barang = new Barang;
            $barang->kode_barang = $request->kode_barang;
            $barang->nama_barang = $request->nama_barang;
            $barang->harga_barang = $request->harga_barang;
            $barang->deskripsi_barang = $request->deskripsi_barang;
            $barang->satuan_id = $request->satuan_id;
            $barang->save();

            return redirect()->route('barang.index')->with('success', 'Data barang berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.'])->withInput();
        }
    }

    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';
        $barang = Barang::find($id);
        return view('barang.show', compact('pageTitle', 'barang'));
    }

    public function destroy(string $id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang.index');
    }

    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        $satuans = DB::table('satuans')->get(); // Mengambil semua data satuan dari tabel "satuans"
        $barang = Barang::find($id);
        return view('barang.edit', compact('pageTitle', 'satuans', 'barang'));
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'nullable',
            'satuan_id' => 'required|exists:satuans,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $barang = Barang::findOrFail($id);
            $barang->kode_barang = $request->kode_barang;
            $barang->nama_barang = $request->nama_barang;
            $barang->harga_barang = $request->harga_barang;
            $barang->deskripsi_barang = $request->deskripsi_barang;
            $barang->satuan_id = $request->satuan_id;
            $barang->save();

            return redirect()->route('barang.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.'])->withInput();
        }
    }
}
