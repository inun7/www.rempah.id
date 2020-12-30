<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rempah</title>

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="/css/sb-admin-2.min.css">

</head>

<body class="bg-gradient-primary">

  <div class="container" style="margin-top: 3px;">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
				  <a class="btn btn-primary" href="/" style="color:white; margin-left: 730px;">Kembali</a>
                  <div class="text-center">
					<img src="foto/rempah.png" height='55' alt="" />
                    <h1 class="h4 text-gray-900 mb-4">Create your account Rempah.id</h1>
                  </div>
                  <form class="user" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
				  @csrf
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama...">
                    </div>
					<div class="form-group">
                      <input type="text" name="alamat" class="form-control form-control-user" placeholder="Alamat...">
                    </div>
					<div class="form-group">
					  <select class="form-control" name="jenis_kelamin">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					  </select>
					</div>
					<div class="form-group">
                      <input type="number" name="no_hp" class="form-control form-control-user" placeholder="No Handphone...">
                    </div>
					<div class="form-group">
					  <select class="form-control" name="jenis_bank">
						<option value="BRI">BRI</option>
						<option value="BNI">BNI</option>
						<option value="BCA">BCA</option>
						<option value="Mandiri">Mandiri</option>
					  </select>
					</div>
                    <div class="form-group">
                      <input type="number" name="rekening" class="form-control form-control-user" placeholder="Nomor Rekening...">
                    </div>
					<div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" placeholder="Email...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user"  placeholder="Password...">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="/login">Login</a>
                    &emsp;
                    <a class="small" href="/forgotpassword">Forget Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script type="text/javascript" src="/vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script type="text/javascript" src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script type="text/javascript" src="/js/sb-admin-2.min.js"></script>

</body>

</html>
