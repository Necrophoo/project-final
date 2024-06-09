@extends('admin.layouts.master')

@section('content')
<!-- Main content -->
        <div class="card-header text-right">
            <a href="{{ route('about.create') }}" class="btn btn-primary" role="button">Tambah About</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered" id="data-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($abouts as $about)
                      
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><img src="{{ asset ('/storage/abouts/' . $about->gambar) }}" width="50" height="50"></td>
                    <td>{{ $about->judul }}</td>
                    <td>{!! $about->deskripsi !!}</td>
                    <td>
                      <a href="{{ route ('editAbout', ['id'=>$about->id]) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
                      <a href="{{ route('deleteAbout', ['id' => $about->id]) }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
<!-- /.content -->
@endsection