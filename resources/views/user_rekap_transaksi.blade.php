@extends('template_user')

@section('content')
<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rekap Transaksi</h1>
      </div>

      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div><br/>
      @endif

        <hr>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr scope="col">
                <th>ID</th>
                <th>ID Produk</th>
                <th>Kuantitas</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
              @foreach($transaksis as $transaksi)
              <tr>
                <th>{{$transaksi->id}}</th>
                <th>{{$transaksi->id_produk}}</th>
                <th>{{$transaksi->kuantitas}}</th>
                <th>{{$transaksi->created_at}}</th>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection
