@extends('../../templates.admin')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Update Data Sampah</span></h1>
  </div>
</div>

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br/>
@endif

    <div class="container text-center">
      <form action="{{ route('sampahs3.update', $sampah->id) }}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <table class="table" border=1>
          <tr>
            <td width="10%">Deskripsi</td>
            <td> <textarea class="form-control" name="deskripsi" rows="8" cols="">{{$sampah->deskripsi}}</textarea> </td>
          </tr>
          <tr>
            <td width="10%">Bobot/Kg</td>
            <td><input class="form-control" type="number" name="bobot" value="{{$sampah->bobot}}"></td>
          </tr>
          <tr>
            <td width="10%">Uang/Rupiah</td>
            <td><input type="number" name="uang" value="{{$sampah->uang}}" class="form-control"></td>
          </tr>
        </table>
        <input type="submit" class="btn btn-primary" value="Edit" onclick="return confirm('Update data sampah ini?')">
        <a href="{{route('sampahs3.index')}}" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
<!-- end section -->

@endsection
