@extends('../../templates.user')

@section('content')

  <div class="container text-center">
    <h1>Verifikasi Transaksi</span></h1>
  </div>

<!-- Logika Tampil dan Tambah Berita -->
@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br/>
@endif

    <hr>
    <div class="container">
      <form action="{{route('transaksis.update', $transaksi->id)}}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <table class="table" border=1>
          <tr>
            <td width="10%">Kuantitas</td>
            <td><input type="number" name="kuantitas" class="form-control" value="{{$transaksi->kuantitas}}"></td>
          </tr>
          <tr>
            <td width="10%">Nomor Resi</td>
            <td><input type="text" name="no_resi" class="form-control" value="{{$transaksi->no_resi}}"></td>
          </tr>
          <tr>
            <td width="10%">Status</td>
            <td>
              <select class="form-control" name="status">
                <option value="{{$transaksi->status}}">{{$transaksi->status}}</option>
                <option value="Pengemasan">Pengemasan</option>
                <option value="Pengiriman">Pengiriman</option>
                <option value="Sampai di tujuan">Sampai di tujuan</option>
				<!--
                <option value="Diterima dengan baik">Diterima</option>
				-->
              </select>
            </td>
          </tr>
        </table>
        <center>
          <input type="submit" class="btn btn-primary" value="Verifikasi" onclick="return confirm('Verifikasi transaksi ini?')">
          <a href="{{route('transaksis.index')}}" class="btn btn-secondary">Kembali</a>
        </center>
      </form>
    </div>
<!-- end section -->

@endsection
