@extends('template_user')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Keluhan</span></h1>
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br/>
    @endif
    <hr>
      <div class="container text-center">
        <form action="{{ route('keluhans.store') }}" class="form" method="POST" enctype="multipart/form-data">
          @csrf
          <table class="table" border=1>
            <tr>
              <td width="10%">Judul</td>
              <td> <input type="text" name="judul" class="form-control"> </td>
            </tr>
            <tr>
              <td width="10%">Deskripsi</td>
              <td> <textarea class="form-control" name="keluhan" rows="12" cols=""></textarea> </td>
            </tr>
          </table>
          <input type="submit" class="btn btn-primary" value="Kirim Keluhan" onclick="return confirm('Kirim keluhan ini?')">
          <a href="{{route('sampahs.index')}}" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
  </div>
</div>

@endsection
