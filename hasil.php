<?php

session_start();

include 'koneksi.php';

//input yang tidak difilter
// $q = $_GET['q'];
// end

// input yang difilter
$q = Trim(htmlentities($_GET['q']));
//end
$posts = mysqli_query($conn, "SELECT * FROM news WHERE title LIKE '%{$q}%' OR category LIKE '%{$q}%'");

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appleria | home of artikel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Site Icons erlangga -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../vendor/aos/aos.css" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="tt.css" rel="stylesheet">
  <link rel="stylesheet" href="admin.css">

  <!-- Custom styles for this template -->
  <link href="style1.css" rel="stylesheet">

  <!-- Responsive styles for this template -->
  <link href="responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="colors.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="bootstrap.css" rel="stylesheet">

<!-- box icons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>





  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <div class="bglg">
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="">Appleria<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="">Home</a></li>
          <li><a class="nav-link scrollto" href="">Profile</a></li>
          <li><a class="nav-link scrollto " href="">Info</a></li>
          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="">News</a></li>
              <li><a href="">Ekonomi</a></li>
              <li><a href="">Travel</a></li>
              <li><a href="">Sports</a></li>
              <li><a href="">Business</a></li>
              <li><a href="">Health</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="admin_logout.php" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->
  </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Powerful Artikel With Appleria<span>.</span></h1>
          <h2>We are team of talented digital marketers</h2>
        </div>
      </div>

	  
		<form action="hasil.php" method="get">
		<div class="pt-icon">
		    <div class="iconny">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgb(255, 145, 0);transform: ;msFilter:;"><path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path></svg>
			</div>

			<div class="inputcri">
			<input type="text" name="q">
			</div>

			<div class="cari-berita">
			<input type="submit" value="Cari Berita">
			</div>
		</div>
		
		
	</form>
	
	

    </div>
  </section><!-- End Hero -->

  <main id="main">

  <section class="section first-section">

      <h3>Hasil pencarian untuk "<?php echo $q; ?>"</h3>
	
	<?php echo mysqli_num_rows($posts); ?> hasil

    <hr>

    <?php
	
	while($row = mysqli_fetch_array($posts)) {
	
    echo "<a href='post.php?id={$row['id']}'><h2>{$row['title']}</h2></a>";
		echo "<small>Tanggal {$row['publish']}</small>";
		echo "<hr>";
    

  
		
	}
	
	?>
             
    
   
        
    
  <!-- Vendor JS Files -->
  <script src="../vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../vendor/aos/aos.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>