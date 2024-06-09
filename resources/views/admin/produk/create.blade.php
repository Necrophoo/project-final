@extends('admin.layouts.master')

@section('content')
<div class="card-header text-right">
    <div class="card-title">Form Kategori</div>
    <a href="{{ route('kategori.index') }}" class="btn btn-info" role="button">Back</a>
</div>
<div class="card-body">
    <form action="{{ route('storeProduk') }}" method="POST" enctype="multipart/form-data">
    
        @csrf
        <div class="form-group">
            <label for="deskripsi">Nama Kategori</label>
            <select class="form-control" name="id_kategori" id="id_kategori" required="required">
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->deskripsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">GAMBAR</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                name="gambar">

            <!-- error message untuk title -->
            @error('gambar')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama Produk">

            <!-- error message untuk title -->
            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                placeholder="Masukkan deskripsi Produk">{{ old('deskripsi') }}</textarea>

            <!-- error message untuk content -->
            @error('deskripsi')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label class="font-weight-bold">Harga</label>
            <textarea class="form-control @error('harga') is-invalid @enderror" name="harga" rows="5"
                placeholder="Masukkan harga Produk">{{ old('harga') }}</textarea>

            <!-- error message untuk content -->
            @error('harga')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>

    </form>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'deskripsi' );
  </script>
@endsection