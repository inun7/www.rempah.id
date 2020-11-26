@extends('template_admin')

@section('content')

<!-- Logika Tampil dan Tambah Berita -->
    <div class="container">
      @if (session('success'))
          {{ session('success') }}
      @endif
      <div class="container">
        <br>
        <center>
          <h2>Review Keluhan</h2>
        </center>
        <br>
        <div class="card">
          <div class="card-header">
            <div class="float-right">
              <a href="{{ route('keluhans.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
            <h5> {{$keluhan->judul}} </h5>
            <small> {{$keluhan->created_at}} oleh Penulis </small>
          </div><div class="card-body" style="text-align: justify; text-indent: 1em;">
            <p>{{ $keluhan->keluhan }}</p>
        </div>
      </div>

<!-- end section -->

@endsection
