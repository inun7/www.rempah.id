@extends('template_user')

@section('content')

  <div class="container">
    <h2>Produk</h2>
  </div>

  <div id="overviews" class="section wb">
      <div class="container">
          <hr class="invis">
          <div class="row">
            @foreach($produks as $produk)
              <div class="col-lg-3 col-12">
                  <div class="blog-item">
                      <div class="image-blog">
                        <a href="#">
                          <img src="{{ URL::to('/')}}/produk/{{$produk->foto}}" height='150'>
                        </a>
                      </div>
                      <div class="blog-title">
                        <h6><a href="#" title="">{{substr($produk->nama_produk, 0, 20)}}</a></h6>
                        <p>Rp.{{$produk->harga}}</p>
                      </div>
                      <div class="blog-button">
                        <a href="{{ route('produks.show', $produk->id)}}">
                          <input type="button" class="btn btn-info" value="Lihat Selengkapnya">
                        </a>
                      </div>
                   </div>
                   <br>
              </div><!-- end col -->
            @endforeach
          </div><!-- end row -->
      </div><!-- end container -->
  </div><!-- end section -->

@endsection
