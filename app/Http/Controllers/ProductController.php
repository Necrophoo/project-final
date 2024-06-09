<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Product::all();
        return view('admin.produk.index', [
            'produks' => $produks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.produk.create', [
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'id_kategori' => 'required|integer',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'harga'   => 'required',
        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/produks', $gambar->hashName());

        //create produk
        Product::create([
            'id_kategori' => $request->id_kategori,
            'gambar'     => $gambar->hashName(),
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'harga'   => $request->harga,

        ]);

        //redirect to index
        return redirect(route('produk.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoris = Kategori::all();
        $produk = Product::findOrFail($id);
        return view('admin.produk.edit', [
            'produk' => $produk,
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi form
        $this->validate($request, [
            'id_kategori' => 'required|integer',
            'gambar'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'harga'   => 'required',
        ]);

        //untuk mengambil ID produk
        $produk = Product::findOrFail($id);

        //Cek apabila gambar akan di upload
        if ($request->hasFile('gambar')) {

            //upload gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/produks', $gambar->hashName());

            //hapus gambar lama
            Storage::delete('public/produks/' . $produk->gambar);

            //update produk dengan gambar baru
            $produk->update([
                'id_kategori' => $request->id_kategori,
                'gambar'     => $gambar->hashName(),
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'harga'   => $request->harga
            ]);
        } else {

            //update produk tanpa gambar
            $produk->update([
                'id_kategori' => $request->id_kategori,
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'harga'   => $request->harga,
            ]);
        }

        //mengarahkan ke halaman index produk
        return redirect(route('produk.index'))->with('success', 'Data Berhasil Diupdate');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Product::findOrFail($id);

        Storage::delete('public/produks/' . $produk->gambar);

        $produk->delete();
        return redirect(route('produk.index'))->with('success', 'Data Berhasil Di hapus');
    }
}
