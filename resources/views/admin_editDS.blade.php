@extends('template_admin')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Update Data Sampah</span></h1>
  </div>
</div>

<!-- Logika Tampil dan Tambah Berita -->
  <center>
    <br>
    <div class="container">
      @if (session('success'))
          {{ session('success') }}
      @endif
      <form action="{{ route('sampahs3.update', $sampah->id) }}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <table class="table" border=1>
          <!-- <tr>
            <td width="10%">Foto</td>
            <td> <input type="file" name="foto" src="{{$sampah->foto}}"> </td>
          </tr> -->
          <tr>
            <td width="10%">Deskripsi</td>
            <td> <textarea class="form-control" name="deskripsi" rows="8" cols="">{{$sampah->deskripsi}}</textarea> </td>
          </tr>
          <tr>
            <td width="10%">Bobot</td>
            <td><input class="form-control" type="number" name="bobot" value="{{$sampah->bobot}}"></td>
          </tr>
          <tr>
            <td width="10%">Uang</td>
            <td><input type="number" name="uang" value="{{$sampah->uang}}"></td>
          </tr>
        </table>
        <input type="submit" class="btn btn-primary" value="Verifikasi">
        <br>
        <br>
      </form>
  </center>
<!-- end section -->

@endsection
