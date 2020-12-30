@extends('../../templates.user')

@section('content')
<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{route('sampahs.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Buat Data Sampah</a>
      </div>
      <hr>

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div><br/>
        @endif

        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Sampah</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="thead-dark">
                  <tr scope="col">
                    <th>ID</th>
                    <th width="10%">Foto</th>
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
                    <th>{{$sampah->id}}</th>
                    <th> <img src="{{ URL::to('/')}}/sampah/{{$sampah->foto}}" class="img-thumbnail" width="75"> </th>
                    <th>{{substr($sampah->deskripsi, 0, 20)}}</th>
                    <th>{{$sampah->bobot}}</th>
                    <th>{{$sampah->uang}}</th>
                    <th>{{$sampah->created_at}}</th>
                    <td><a href="{{ route('sampahs.edit',$sampah->id)}}" class="btn btn-warning">Edit</a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
