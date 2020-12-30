@extends('../../templates.user')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Buat Pesanan Transaksi</span></h1>
  </div>
</div>

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br/>
    @endif

    <hr>
    <div class="container text-center">
      <form action="{{route('transaksis.store')}}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table" border=1>
          <tr>
            <td width="10%">Kuantitas</td>
            <td><input type="number" name="kuantitas" class="form-control"></td>
			<input type="hidden" name="status" value="Menunggu Konfirmasi">
          </tr>
		  
        </table>
        <input type="submit" class="btn btn-primary" value="Tambah Data Produk">
      </form>
    </div>
<!-- end section -->

@endsection
