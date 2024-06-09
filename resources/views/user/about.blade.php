@extends('user.layouts.master')
@section('content')
    <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row ">
        @foreach ($abouts as $item)      
        <div class="col-md-6">
            <div class="img-box">
                <img src="{{ asset ('/storage/abouts/' . $item->gambar) }}" alt="" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="detail-box">
                <div class="heading_container">
                    <h2>{{ $item->judul }}</h2>
                </div>
                <p>
                    {!! $item->deskripsi !!}
                </p>
            </div>
        </div>
        @endforeach
    </div>
    </div>
  </section>

  <!-- end about section -->
@endsection