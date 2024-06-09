@extends('admin.layouts.master')

@section('content')
<div class="card-header text-right">
    <div class="card-title">Form About</div>
    <a href="{{ route('about.index') }}" class="btn btn-info" role="button">Back</a>
</div>
<div class="card-body">
    <form action="{{ route('updateAbout', ['id' => $about->id]) }}" method="post">
        @csrf
        <div class="form-group">
            <label class="font-weight-bold">GAMBAR</label>
            <input type="file" class="form-control" name="gambar" disabled>
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Judul About</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                name="judul" value="{{ old('judul', $about->judul) }}"
                placeholder="Masukkan judul about">

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
                placeholder="Masukkan deskripsi about">{{ old('deskripsi', $about->deskripsi) }}</textarea>

            <!-- error message untuk content -->
            @error('deskripsi')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="{{ route('about.index') }}" class="btn btn-outline-secondary mr-2"
            role="button">Batal</a>
        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    </form>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'deskripsi' );
  </script>
@endsection