@extends('template_bs')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Verifikasi Data Sampah</span></h1>
  </div>
</div>
<br>
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br/>
    @endif

      <div class="container">
        <form action="{{ route('sampahs2.update', $sampah->id) }}" class="form" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <table class="table" border=1>
            <tr>
              <td width="10%">Foto</td>
              <td> <img src="{{ URL::to('/')}}/sampah/{{$sampah->foto}}" class="img-thumbnail" width="75"> </td>
            </tr>
            <tr>
              <td width="10%">Deskripsi</td>
              <td> <textarea class="form-control" name="deskripsi" rows="8" cols="" readonly>{{$sampah->deskripsi}}</textarea> </td>
            </tr>
            <tr>
              <td width="10%">Bobot/Kg</td>
              <td><input class="form-control" type="number" name="bobot" value="{{$sampah->bobot}}"></td>
            </tr>
            <tr>
              <td width="10%">Uang/Rupiah</td>
              <td><input class="form-control" type="number" name="uang" value="{{$sampah->uang}}"></td>
            </tr>
          </table>
          <center>
            <input type="submit" class="btn btn-primary" value="Verifikasi" onclick="return confirm('Verifikasi data sampah ini?')">
            <a href="{{route('sampahs2.index')}}" class="btn btn-secondary">Kembali</a>
          </center>
        </form>
      </div>

<!-- end section -->

@endsection
