@extends('../../templates.user')

@section('content')
<div class="all-title-box">
  <div class="container text-center">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Toko & Produk Saya</h1>
        <a href="{{route('produks.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Buat Data Produk</a>
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
                <th>Foto</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Harga/Rupiah</th>
                <th colspan="2">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($produks as $produk)
              <tr>
                <th>{{$produk->id}}</th>
                <th>{{$produk->nama_produk}}</th>
                <th><img src="{{ URL::to('/')}}/produk/{{$produk->foto}}" class="img-thumbnail" width="75"></th>
                <th>{{substr($produk->deskripsi, 0, 20)}}</th>
                <th>{{$produk->stok}}</th>
                <th>{{$produk->harga}}</th>
                <td><a href="{{route('produks.edit', $produk->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{route('produks.destroy', $produk->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Hapus produk ini?')">Hapus</button>
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
