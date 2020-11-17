@extends('template_user')

@section('content')
<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ route('sampahs.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Buat Data Sampah</a>
      </div>

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div><br/>
        @endif

        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr scope="col">
                <th>ID</th>
                <!-- <th>Foto</th> -->
                <th>Deskripsi</th>
                <th>Bobot/Kg</th>
                <th>Uang</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sampahs as $sampah)
              <tr>
                <th>{{$sampah->id}}</th>
                <!-- <th>{{$sampah->foto}}</th> -->
                <th>{{$sampah->deskripsi, 0, 20}}</th>
                <th>{{$sampah->bobot}}</th>
                <th>{{$sampah->uang}}</th>
                <th>{{$sampah->created_at}}</th>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection
