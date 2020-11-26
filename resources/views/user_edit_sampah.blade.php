@extends('template_user')

@section('content')

  <div class="container text-center">
    <h1>Edit Sampah</span></h1>
  </div>

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br/>
@endif

    <hr>
    <div class="container">
      <form action="{{ route('sampahs.update', $sampah->id) }}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <table class="table" border=1>
          <tr>
            <td width="10%">Foto</td>
            <td>
              <img src="{{ URL::to('/')}}/sampah/{{$sampah->foto}}" class="img-thumbnail" width="100">
              <input type="hidden" name="hidden_name" value="{{$sampah->foto}}">
              <br> <br>
              <input type="file" name="foto" class="form-control" rows="8" cols="">
            </td>
          </tr>
          <tr>
            <td width="10%">Deskripsi</td>
            <td> <textarea class="form-control" name="deskripsi" rows="8" cols="">{{$sampah->deskripsi}}</textarea> </td>
          </tr>
        </table>
        <center>
          <input type="submit" class="btn btn-primary" value="Update Data Sampah" onclick="return confirm('Edit data sampah ini?')">
          <a href="{{route('sampahs.index')}}" class="btn btn-secondary">Kembali</a>
        </center>
      </form>
    </div>
<!-- end section -->

@endsection
