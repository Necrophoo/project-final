@extends('admin.layouts.master')

@section('content')
<!-- Main content -->
        <div class="card-header text-right">
            <a href="{{ route('kategori.create') }}" class="btn btn-primary" role="button">Tambah Kategori</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered" id="data-table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kategoris as $kategori)
                  <tr>
                    <td> {{ $loop->index + 1 }}</td>
                    <td> {{ $kategori->nama_kategori }}</td>
                    <td> {{ $kategori->deskripsi }} </td>
                    <td>
                      <a href="{{route('editKategori', ['id' => $kategori->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                      <a href="{{ route('deleteKategori', ['id' => $kategori->id]) }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
<!-- /.content -->
@endsection