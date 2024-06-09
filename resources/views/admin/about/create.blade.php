@extends('admin.layouts.master')

@section('content')
<div class="card-header text-right">
    <div class="card-title">Form About</div>
    <a href="{{ route('about.index') }}" class="btn btn-info" role="button">Back</a>
</div>
<div class="card-body">
    <form action="{{ route('storeAbout') }}" method="POST" enctype="multipart/form-data">
    
        @csrf
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
            <label class="font-weight-bold">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                name="judul" value="{{ old('judul') }}" placeholder="Masukkan judul About">

            <!-- error message untuk title -->
            @error('judul')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                placeholder="Masukkan deskripsi about">{{ old('deskripsi') }}</textarea>

            <!-- error message untuk content -->
            @error('deskripsi')
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