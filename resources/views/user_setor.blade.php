@extends('template_user')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Tukar Poin > Setor Sampah</span></h1>
  </div>
</div>

<!-- Logika Tampil dan Tambah Berita -->
  <center>
    <br>
    <div class="container">
      @if (session('success'))
          {{ session('success') }}
      @endif
    <div class="container">
      <form action="" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table" border=1>
          <tr>
            <td width="10%">Foto</td>
            <td> <input type="file" name="foto"> </td>
          </tr>
          <tr>
            <td width="10%">Deskripsi</td>
            <td> <textarea class="form-control" name="deskripsi" rows="8" cols=""></textarea> </td>
            <input type="hidden" name="bobot">
            <input type="hidden" name="uang">
          </tr>
        </table>
        <input type="submit" name="add" class="btn btn-primary" value="Setor Sampah">
        <br>
        <br>
      </form>
    </div>
  </center>
<!-- end section -->

@endsection
