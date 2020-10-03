<?php
	session_start();
 
	if( empty($_SESSION['username']) ){
	    header('Location: home.php');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masjid Al-Munawwarah</title>
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">

	</style>
	<script type="text/javascript">
		// Prevent dropdown menu from closing when click inside the form
		$(document).on("click", ".navbar-right .dropdown-menu", function(e) {
			e.stopPropagation();
		});
	</script>
</head>

<body id="bg">
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
        <div class="navbar-header d-flex col">
            <a class="navbar-brand" href="admin.php">Masjid <b>Al-Munawwarah</b></a>
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="">Input Data <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="inputkegiatan.php" class="dropdown-item">Input Jadwal Kegiatan</a></li>
                        <li><a href="inputjadwal.php" class="dropdown-item">Input Jadwal Imam & Khatib</a></li>
                        <li><a href="inputkeuangan.php" class="dropdown-item">Input Informasi Keuangan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="">Informasi <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="inputkegiatan.php" class="dropdown-item">Jadwal Kegiatan</a></li>
                        <li><a href="inputdata.php" class="dropdown-item">Data Inventaris</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">Tulis Artikel</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a class="btn btn-primary mt-1 mb-1" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

	<!--Banner-->
	<div class="banner">
		<div class="bg-color">
			<div class="container">
				<div class="row">
					<div class="banner-text text-center">
						<h2 class="text-dec">Selamat Datang <br> <?php echo $_SESSION['username']; ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ Banner-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 m-auto">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for carousel items -->
						<div class="carousel-inner">
							<div class="item carousel-item active">
								<img src="images/Screenshot_20191127-005537_Chrome.jpg" alt="">
							</div>
							<div class="item carousel-item">
								<img src="images/warung-wakaf.jpg" alt="">
							</div>
							<div class="item carousel-item">
								<img src="images/pengajian.jpg" alt="">
							</div>
						</div>
						<!-- Carousel controls -->
						<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
							<span><i class="fa fa-angle-left"></i></span>
						</a>
						<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
							<span><i class="fa fa-angle-right"></i></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sect2">
		<center>
			<h1 class="head">ARTIKEL</h1>
		</center>
		<div class="container" id="tourpackages-carousel">

			<div class="row content">

				<div class="col-xs-18 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="http://placehold.it/500x300" alt="">
						<div class="caption">
							<h4>Thumbnail label</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
							<p><a href="#" class="btn btn-success btn-xs" role="button">Lihat Artikel</a></p>
						</div>
					</div>
				</div>

				<div class="col-xs-18 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="http://placehold.it/500x300" alt="">
						<div class="caption">
							<h4>Thumbnail label</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
							<p><a href="#" class="btn btn-success btn-xs" role="button">Lihat Artikel</a></p>
						</div>
					</div>
				</div>

				<div class="col-xs-18 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="http://placehold.it/500x300" alt="">
						<div class="caption">
							<h4>Thumbnail label</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
							<p><a href="#" class="btn btn-success btn-xs" role="button">Lihat Artikel</a></p>
						</div>
					</div>
				</div>

				<div class="col-xs-18 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="http://placehold.it/500x300" alt="">
						<div class="caption">
							<h4>Thumbnail label</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
							<p><a href="#" class="btn btn-success btn-xs" role="button">Lihat Artikel</a></p>
						</div>
					</div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</section>

	<footer class="bg-dark">
        <div class="container inner pt-60 pb-60">
            <div class="row foot">
                <div class="col-sm-12 col-md-6">
                    <div class="widget">
                        <h3 class="">Lokasi</h3>
                        <img src="images/peta.jpg" width="90%">
                    </div>
                </div>

                <div class="space30 visible-sm clearfix"></div>
                <div class="col-sm-12 col-md-6">
                    <div class="widget">
                        <h3 class="">Kontak Kami</h3><br>
                        <p><b> Masjid Al-Munawarrah </b></p>
                        <div class="space20"></div>
                        <p>Komplek Sarana Indah Permai, Jl. Beringin 8 Blok C4 No.1, <br> Kedaung, Kec. Pamulang, Kota Tangerang Selatan,<br> Banten 15415</p>
                        <p>+62 (021) 381 1708 </p>
                    </div>
                </div>
            </div>
            <center>
                <h4 class="head">&copy; Copyrights 2019. All Right Reserved.</h4>
            </center>
        </div>
    </footer>
</body>

</html>