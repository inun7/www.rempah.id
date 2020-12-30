@extends('../../templates.admin')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rekap Operator Bank Sampah</h1>
        <a href="{{route('operators.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Buat Data Operator</a>
      </div>
      <hr>

      @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br/>
      @endif

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="card-body">
          <h6 class="m-0 font-weight-bold text-primary">Rekap Operator Bank Sampah</h6>
        </div>
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
				  <th>Nama</th>
				  <th>Alamat</th>
				  <th>Jenis Kelamin</th>
				  <th>No HP</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($operators as $operator)
                <tr>
                  <td>{{ $operator->id }}</td>
                  <td>{{ $operator->nama_operator }}</td>
                  <td>{{ $operator->alamat }}</td>
				  <td>{{ $operator->jenis_kelamin }}</td>
				  <td>{{ $operator->no_hp }}</td>
				  <td>{{ $operator->email }}</td>
				  <td>{{ $operator->password }}</td>
                  <td><a href="{{ route('operators.edit', $operator->id)}}" class="btn btn-warning">Edit</a></td>
                  <td>
                      <form action="{{ route('operators.destroy', $operator->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Hapus data operator ini?')">Hapus</button>
                      </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  @endsection
