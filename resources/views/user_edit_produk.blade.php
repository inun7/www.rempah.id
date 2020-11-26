@extends('template_user')

@section('content')

  <div class="container text-center">
    <h1>Edit Data Produk</span></h1>
  </div>

<!-- Logika Tampil dan Tambah Berita -->
@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br/>
@endif

    <hr>
    <div class="container">
      <form action="{{route('produks.update', $produk->id)}}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <table class="table" border=1>
          <tr>
            <td width="10%">Nama Produk</td>
            <td><input type="text" name="nama_produk" class="form-control" value="{{$produk->nama_produk}}"></td>
          </tr>
          <tr>
            <td width="10%">Foto</td>
            <td>
              <img src="{{ URL::to('/')}}/produk/{{$produk->foto}}" class="img-thumbnail" width="100">
              <input type="hidden" name="hidden_name" value="{{$produk->foto}}">
              <br> <br>
              <input type="file" name="foto" class="form-control" rows="8" cols="">
            </td>
          </tr>
          <tr>
            <td width="10%">Deskripsi</td>
            <td> <textarea class="form-control" name="deskripsi" rows="8" cols="">{{$produk->deskripsi}}</textarea> </td>
          </tr>
          <tr>
            <td width="10%">Stok</td>
            <td><input type="number" name="stok" class="form-control" value="{{$produk->stok}}"></td>
          </tr>
          <tr>
            <td width="10%">Harga/Rupiah</td>
            <td><input type="number" name="harga" class="form-control" value="{{$produk->harga}}"></td>
          </tr>
          <tr>
            <td width="10%">Jenis Bank</td>
            <td>
              <select class="form-control" name="jenis_bank">
                <option value="{{$produk->jenis_bank}}">Terpilih: {{$produk->jenis_bank}}</option>
                <option value="BRI">BRI</option>
                <option value="BNI">BNI</option>
                <option value="BCA">BCA</option>
                <option value="Mandiri">Mandiri</option>
              </select>
            </td>
          </tr>
          <tr>
            <td width="10%">Rekening Transaksi</td>
            <td><input type="number" name="rekening_transaksi" class="form-control" value="{{$produk->rekening_transaksi}}"></td>
          </tr>
        </table>
        <center>
          <input type="submit" class="btn btn-primary" value="Edit Data Produk" onclick="return confirm('Edit produk ini?')">
          <a href="{{route('produks.index')}}" class="btn btn-secondary">Kembali</a>
        </center>
      </form>
    </div>
<!-- end section -->

@endsection
