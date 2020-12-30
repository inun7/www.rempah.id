@extends('../../templates.operator')

@section('content')

<div class="all-title-box">
  <div class="container text-center">
    <h1>Tukar Poin > Rekap </span></h1>
  </div>
</div>

<!-- Logika Tampil dan Tambah Berita -->
  <center>
    <div id="overviews" class="section wb">
      <a href="addBerita.php"> <input type="button" class="btn btn-primary" value="Tambah Berita"> </a>
      <br> <br>
      <table class="table" width='25%' border=1>
        <thead class="thead-dark">
            <tr>
                <th scope="col" width="3%">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Foto</th>
                <th scope="col">Deskripsi</th>
                <th scope="col" width="13%">Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
            while ($data = mysqli_fetch_array($get_data)) {
              ?>
                <tr>
                    <th scope="row" class="text-center"><?= $no; ?></th>
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['foto'] ?></td>
                    <td><?= $data['deskripsi'] ?></td>
                    <td> <a href="editBerita.php?id=<?= $data['idBerita']?>">
                           <input type="button" class="btn btn-warning" value="Edit"> </a> |
                         <a href="deleteBerita.php?id=<?= $data['idBerita']?>" onclick="return confirm('Hapus berita ini?')">
                           <input type="button" class="btn btn-danger" value="Delete"> </a>
                    </td>
                </tr>
                <?php
                $no++;
              }
             ?>
        </tbody>
      </table>
    </div>
  </center>
<!-- end section -->

@endsection
