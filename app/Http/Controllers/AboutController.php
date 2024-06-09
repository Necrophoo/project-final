<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', [
            'abouts' => $abouts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.about.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',

        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/abouts', $gambar->hashName());

        //create about
        About::create([
            'gambar'     => $gambar->hashName(),
            'judul'     => $request->judul,
            'deskripsi'   => $request->deskripsi,


        ]);

        //redirect to index
        return redirect(route('about.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', [
            'about' => $about,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi form
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'judul'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',

        ]);

        //untuk mengambil ID about
        $about = About::findOrFail($id);

        //Cek apabila gambar akan di upload
        if ($request->hasFile('gambar')) {

            //upload gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/abouts', $gambar->hashName());

            //hapus gambar lama
            Storage::delete('public/abouts/' . $about->gambar);

            //update about dengan gambar baru
            $about->update([
                'gambar'     => $gambar->hashName(),
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi,
            ]);
        } else {

            //update about tanpa gambar
            $about->update([
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi,

            ]);
        }

        //mengarahkan ke halaman index about
        return redirect(route('about.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);

        Storage::delete('public/abouts/' . $about->gambar);

        $about->delete();
        return redirect(route('about.index'));
    }
}
