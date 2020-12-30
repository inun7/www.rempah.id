@extends('../../templates.admin')

@section('content')

  <div class="container text-center">
    <h1>Edit Data Operator</span></h1>
  </div>

<!-- Logika Tampil dan Tambah Berita -->
@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br/>
@endif

    <hr>
    <div class="container">
      <form action="{{route('operators.update', $operator->id)}}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <table class="table" border=1>
          <tr>
            <td width="10%">Nama</td>
            <td><input type="text" name="nama_operator" class="form-control" value="{{$operator->nama_operator}}"></td>
          </tr>
          <tr>
            <td width="10%">Alamat</td>
            <td> <input type="text" name="alamat" class="form-control" value="{{$operator->alamat}}"> </td>
          </tr>
          <tr>
            <td width="10%">Jenis Kelamin</td>
            <td> <input type="text" class="form-control" value="{{$operator->jenis_kelamin}}" readonly> </td>
          </tr>
          <tr>
            <td width="10%">Nomor HP</td>
            <td><input type="number" name="no_hp" class="form-control" value="{{$operator->no_hp}}"></td>
          </tr>
          <tr>
            <td width="10%">Email</td>
            <td><input type="email" name="email" class="form-control" value="{{$operator->email}}"></td>
          </tr>
		  <tr>
            <td width="10%">Password</td>
            <td><input type="text" name="password" class="form-control" value="{{$operator->password}}"></td>
          </tr>
        </table>
        <center>
          <input type="submit" class="btn btn-primary" value="Edit Data Operator" onclick="return confirm('Edit data operator ini?')">
          <a href="{{route('operators.index')}}" class="btn btn-secondary">Kembali</a>
        </center>
      </form>
    </div>
<!-- end section -->

@endsection
