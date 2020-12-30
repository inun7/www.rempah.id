<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>Rempah</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
	<!--
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version">

  <!-- Modal 
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body customer-box">
			-->
				<!-- Tab panes 
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form method="post" action="cekLogin.php" role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="username" id="username" placeholder="Masukan Username" type="text" style="color: black">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="password" id="password" placeholder="Masukan Password" type="password" style="color: black">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Login
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div> -->
<!-- end session -->


	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4e73df;">
			<div class="container-fluid">
				<a class="navbar-brand" href="/" style="color: white;">
					<img src="foto/rempah.png" height='55' alt="" />
					Rempah.id
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host" style="background-color: #4e73df;">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="#">Beranda</a></li>
						<!--
						<li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Data</a></li>
						-->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Tentang </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="#">Kontak</a>
								<a class="dropdown-item" href="#">Tentang</a>
								<a class="dropdown-item" href="#">Panduan</a>
							</div>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li><a class="hover-btn-new log orange" href="/login"><span>Login</span></a></li>
				  </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="Beranda" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Rempah.id</h2>
										<p class="lead" data-animation="animated fadeInLeft">Selamat datang di Website kami, setor dan kelola sampah anda disini. </p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->


			</div>
			<div class="carousel-item">
				<div id="Beranda" class="first-section" style="background-image:url('images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Rempah.id</h2>
										<p class="lead" data-animation="animated fadeInLeft">Selamat datang di Website kami, setor dan kelola sampah anda disini. </p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="Beranda" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Rempah.id</h2>
										<p class="lead" data-animation="animated fadeInLeft">Selamat datang di Website kami, setor dan kelola sampah anda disini. </p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

    <div id="overviews" class="section wb">
          <div class="section-title row text-center">
              <div class="col-md-8 offset-md-2">
                  <h3>Rempah Mall</h3>
              </div>
          </div>
          <!-- end title -->
      <div class="container">
          <hr class="invis">
          <div class="row">
            @foreach($produks as $produk)
              <div class="col-lg-3 col-12">
                  <div class="blog-item">
                      <div class="image-blog">
                        <a href="#">
                          <img src="{{ URL::to('/')}}/produk/{{$produk->foto}}" height='170'>
                        </a>
                      </div>
                      <div class="blog-title">
                        <h6><a href="#" title="">{{substr($produk->nama_produk, 0, 20)}}</a></h6>
                        <p>Rp.{{$produk->harga}}</p>
                      </div>
                      <div class="blog-button">
                        <a href="{{ route('produks.show', $produk->id)}}">
                          <input type="button" class="btn btn-info" value="Lihat Selengkapnya">
                        </a>
                      </div>
                   </div>
                   <br>
              </div><!-- end col -->
            @endforeach
          </div><!-- end row -->
      </div><!-- end container -->
		  
    </div><!-- end section -->


    <footer class="footer" style="background-color: #4e73df;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Tentang Kami</h3>
                        </div>
                        <p> Selamat datang di Website kami, setor dan kelola sampah anda disini. </p>
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://github.com/inun7"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Daftar Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Beranda</a></li>
                            <li><a href="berita.php">Berita</a></li>
                            <li><a href="data.php">Data</a></li>
            				<li><a href="kontak.php">Kontak</a></li>
            				<li><a href="tentang.php">Tentang</a></li>
                            <li><a href="panduan.php">Panduan</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Kontak Kami</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">sultonainunnazib@gmail.com</a></li>
                            <li><a href="#">www.rempah.id</a></li>
                            <li>Jember, East Java - Indonesian</li>
                            <li>+62 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->



    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">Rempah.id</a> Design By : <a href="bit.ly/inunPortfolio">Sulton Ainun Nazib</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>
