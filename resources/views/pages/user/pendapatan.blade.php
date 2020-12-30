@extends('../../templates.user')

@section('content')
<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pendapatan</h1>
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
                <th>Nama Produk</th>
                <th>Kuantitas</th>
                <th>Tanggal</th>
				<th>Nomor Resi</th>
				<th>Total Harga</th>
				<th>Diterima Tanggal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <th>Keranjang</th>
                <th>12</th>
                <th>21 Februari 2020</th>
				<th>09182719</th>
                <th>Rp.20000</th>
				<th>23 Februari 2020</th>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection
