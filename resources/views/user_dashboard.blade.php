@extends('template_user')

@section('content')
<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Unduh</a>
      </div>

      <table class="table">
        <thead>
          <tr scope="col">
            <th>ID</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Bobot/Kg</th>
            <th>Uang</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <th>Img1872861</th>
            <th>Sampah Plastik</th>
            <th>1</th>
            <th>10000</th>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>
@endsection
