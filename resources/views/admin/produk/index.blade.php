@extends('admin.layouts.master')

@section('content')
<!-- Main content -->
        <div class="card-header text-right">
            <a href="{{ route('createProduk') }}" class="btn btn-primary" role="button">Tambah Produk</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered" id="data-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Kategori</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($produks as $produk)
                      
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><img src="{{ asset ('/storage/produks/' . $produk->gambar) }}" width="50" height="50"></td>
                    <td>{{ $produk->kategori ? $produk->kategori->nama_kategori : '-' }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{!! $produk->deskripsi !!}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>
                      <a href="{{ route ('editProduk', ['id'=>$produk->id]) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
                      <a href="{{ route('deleteProduk', ['id' => $produk->id]) }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
<!-- /.content -->
@endsection