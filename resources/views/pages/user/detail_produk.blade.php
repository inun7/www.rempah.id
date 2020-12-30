@extends('../../templates.user')

@section('content')
    <div class="container">
      @if (session('success'))
          {{ session('success') }}
      @endif
      <div class="container">
        <br>
        <center>
          <h2>Detail Produk</h2>
        </center>
        <br>
        <div class="card">
          <div class="card-header">
            <div class="float-right">
              <a href="/vu_produk_orang" class="btn btn-secondary">Kembali</a>
            </div>
            <h5> {{$produk->nama_produk}} </h5>
            <small> Rp.{{$produk->harga}} </small>
          </div><div class="card-body" style="text-align: justify; text-indent: 1em;">
            <img src="{{ URL::to('/')}}/produk/{{$produk->foto}}" height='150'>
            <br> <br>
            <p>{{ $produk->deskripsi }}</p>
            <label>Stok: {{$produk->stok}} </label> <br>
            <br> <br>
            <center>
              <a href="{{route('transaksis.create')}}" type="button" class="btn btn-primary">Beli Produk Ini</a>
            </center>
        </div>
      </div>

<!-- end section -->

@endsection
