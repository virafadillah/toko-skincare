<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Tampilkan semua data produk
     */
    public function index()
    {
        $data = Produk::latest()->get();
        return view('produk.index', compact('data'));
    }

    /**
     * Tampilkan form tambah produk
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Simpan data produk ke database
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'stok' => 'required|integer'
        ]);

        // Simpan data
        Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * (Optional) Detail produk
     */
    public function show($id)
    {
        $data = Produk::findOrFail($id);
        return view('produk.show', compact('data'));
    }

    /**
     * Tampilkan form edit
     */
    public function edit($id)
    {
        $data = Produk::findOrFail($id);
        return view('produk.edit', compact('data'));
    }

    /**
     * Update data produk
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'stok' => 'required|integer'
        ]);

        // Cari data
        $data = Produk::findOrFail($id);

        // Update
        $data->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil diupdate!');
    }

    /**
     * Hapus data produk
     */
    public function destroy($id)
    {
        $data = Produk::findOrFail($id);
        $data->delete();

        return redirect('/produk')->with('success', 'Produk berhasil dihapus!');
    }
}