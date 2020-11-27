@extends('template_bs')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      </div>

      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div><br/>
      @endif

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Rekap Data Sampah</h6>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Foto</th>
                      <th>Deskripsi</th>
                      <th>Bobot/Kg</th>
                      <th>Uang/Rupiah</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sampahs as $sampah)
                    <tr>
                      <td>{{ $sampah->id }}</td>
                      <td> <img src="{{ URL::to('/')}}/sampah/{{$sampah->foto}}" class="img-thumbnail" width="75"> </td>
                      <td>{{ substr($sampah->deskripsi, 0, 20) }}</td>
                      <td>{{ $sampah->bobot }}</td>
                      <td>{{ $sampah->uang }}</td>
                      <td>{{ $sampah->created_at }}</td>
                      <td><a href="{{ route('sampahs2.edit',$sampah->id)}}" class="btn btn-success">Verifikasi</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

  @endsection
