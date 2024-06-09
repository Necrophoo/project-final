@extends('user.layouts.master')
@section('content')
<section class="food_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our Menu
      </h2>
    </div>

    <ul class="filters_menu">
      <li class="active" data-filter="*">All</li>
      <li data-filter=".burger">Burger</li>
      <li data-filter=".pizza">Pizza</li>
      <li data-filter=".pasta">Pasta</li>
      <li data-filter=".fries">Fries</li>
    </ul>

    <div class="filters-content">
      <div class="row grid">
        @foreach ($pizza as $item)
        <div class="col-sm-6 col-lg-4 all pizza">
          <div class="box">
            <div>

              <div class="img-box">
                <img src="{{ asset ('/storage/produks/' . $item->gambar) }}" alt="" />
              </div>
              <div class="detail-box">
                <h5>{{ $item->nama }}</h5>
                <p>
                  {!! $item->deskripsi !!}
                </p>
                <div class="options">
                  <h6>{{ $item->harga }}</h6>
                  <button><a href="https://wa.me/6285363441969?text=Halo%20Feane,%20saya%20ingin%20membeli%20Pizza" style="all:unset"><i class="fas fa-shopping-cart"></i>
                  </a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        @foreach ($burger as $item)
        <div class="col-sm-6 col-lg-4 all burger">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="{{ asset ('/storage/produks/' . $item->gambar) }}" alt="" />
              </div>
              <div class="detail-box">
                <h5>{{ $item->nama }}</h5>
                <p>
                  {!! $item->deskripsi !!}
                </p>
                <div class="options">
                  <h6>{{ $item->harga }}</h6>
                  <button><a href="https://wa.me/6285363441969?text=Halo%20Feane,%20saya%20ingin%20membeli%20Burger" style="all:unset"><i class="fas fa-shopping-cart"></i>
                    </a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        @foreach ($pasta as $item)
        <div class="col-sm-6 col-lg-4 all pasta">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="{{ asset ('/storage/produks/' . $item->gambar) }}" alt="" />
              </div>
              <div class="detail-box">
                <h5>{{ $item->nama }}</h5>
                <p>
                  {!! $item->deskripsi !!}
                </p>
                <div class="options">
                  <h6>{{ $item->harga }}</h6>
                  <button><a href="https://wa.me/6285363441969?text=Halo%20Feane,%20saya%20ingin%20membeli%20Pasta" style="all:unset"><i class="fas fa-shopping-cart"></i>
                    </a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        @foreach ($fries as $item)
        <div class="col-sm-6 col-lg-4 all fries">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="{{ asset ('/storage/produks/' . $item->gambar) }}" alt="" />
              </div>
              <div class="detail-box">
                <h5>{{ $item->nama }}</h5>
                <p>
                  {!! $item->deskripsi !!}
                </p>
                <div class="options">
                  <h6>{{ $item->harga }}</h6>
                  <button><a href="https://wa.me/6285363441969?text=Halo%20Feane,%20saya%20ingin%20membeli%20Fries" style="all:unset"><i class="fas fa-shopping-cart"></i>
                    </a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        View More
      </a>
    </div>
  </div>
</section>

<!-- end food section -->
@endsection