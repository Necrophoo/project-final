<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HalamanMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizza = Product::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'pizza');
        })->get();
        $pasta = Product::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'pasta');
        })->get();
        $burger = Product::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'burger');
        })->get();
        $fries = Product::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'fries');
        })->get();
        $produks = Product::all();
        return view('user.menu', [
            'produks' => $produks,
            'pizza' => $pizza,
            'burger' => $burger,
            'pasta' => $pasta,
            'fries' => $fries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
