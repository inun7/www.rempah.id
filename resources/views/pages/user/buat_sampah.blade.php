@extends('../../templates.user')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Setor Sampah</span></h1>
  </div>
</div>

<!-- Logika Tampil dan Tambah Berita -->
@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br/>
@endif

    <hr>
    <div class="container text-center">
      <form action="{{ route('sampahs.store') }}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table" border=1>
          <tr>
            <td width="10%">Foto</td>
            <td><input type="file" name="foto" class="form-control" rows="8" cols=""></td>
          </tr>
          <tr>
            <td width="10%">Deskripsi</td>
            <td> <textarea class="form-control" name="deskripsi" rows="8" cols=""></textarea> </td>
          </tr>
        </table>
        <input type="submit" class="btn btn-primary" value="Setor Sampah">
        <a href="{{route('sampahs.index')}}" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
<!-- end section -->

@endsection
