@extends('../../templates.admin')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Tambah Data Operator</span></h1>
  </div>
</div>

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br/>
    @endif

    <hr>
    <div class="container">
      <form action="{{route('operators.store')}}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table" border=1>
          <tr>
            <td width="10%">Nama Operator</td>
            <td><input type="text" name="nama_operator" class="form-control"></td>
          </tr>
          <tr>
            <td width="10%">Alamat</td>
            <td><input type="text" name="alamat" class="form-control"></td>
          </tr>
		  <tr>
			<td width="10%">Jenis Kelamin</td>
			<td>
			<input type="radio" name="jenis_kelamin" value="Laki-Laki">
			<label>Laki-Laki</label>
			&emsp;
            <input type="radio" name="jenis_kelamin" value="Perempuan">
			<label>Perempuan</label>
			</td>
          </tr>
		  <tr>
            <td width="10%">No HP</td>
            <td><input type="number" name="no_hp" class="form-control"></td>
          </tr>
          <tr>
            <td width="10%">Email</td>
            <td><input type="email" name="stok" class="form-control"></td>
          </tr>
          <tr>
            <td width="10%">Password</td>
            <td><input type="password" name="stok" class="form-control"></td>
          </tr>
		 </table>
		 <center>
        <input type="submit" class="btn btn-primary" value="Tambah Data Operator"> &emsp;
        <a href="{{route('operators.index')}}" class="btn btn-secondary">Kembali</a>
		</center>
      </form>
    </div>

@endsection
