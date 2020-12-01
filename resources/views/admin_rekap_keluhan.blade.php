@extends('template_admin')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Keluhan</h1>
      </div>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Rekap Data Keluhan</h6>
        </div>
        <div class="card-body">
          @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div><br/>
          @endif
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($keluhans as $keluhan)
                <tr>
                  <td>{{ $keluhan->id }}</td>
                  <td>{{ $keluhan->judul }}</td>
                  <td>{{ substr($keluhan->keluhan, 0, 20) }}</td>
                  <td>{{ $keluhan->created_at }}</td>
                  <td><a href="{{ route('keluhans.show', $keluhan->id) }}" class="btn btn-warning">Rincian</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection
