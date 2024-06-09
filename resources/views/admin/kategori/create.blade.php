@extends('admin.layouts.master')

@section('content')
<div class="card-header text-right">
    <div class="card-title">Form Kategori</div>
    <a href="{{ route('kategori.index') }}" class="btn btn-info" role="button">Back</a>
</div>
<div class="card-body">
    <form action="{{ route('storeKategori') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required="required" placeholder="Masukkan nama kategori">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required" placeholder="Masukkan deskripsi kategori"></textarea>
        </div>

        <div class="text-right">
            <a href="{{ route('kategori.index') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
</div>

@endsection