<?php

session_start();

include 'koneksi.php';

$id = $_GET['id'];
$q  = mysqli_query($conn, "SELECT * FROM news WHERE id = {$id}") or die(mysqli_error($conn));
$post = mysqli_fetch_array($q);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appleria | News</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Site Icons erlangga -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="vanila1.css">

  <!-- Template native css | custom by erlangga -->
  <link rel="stylesheet" href="temp1.css">

  <!-- ===== animated js by erlangga ======= -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- =======================================================
  * Template Name: xxx as erlangga!
  * Author: native by erlangga
  * edit by erlangga handika.
  ======================================================== -->
</head>

<body>

  <div class="mrwapper">
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top header-inner-pages">
    <div class="container">

      <div class="atasny">
		<div class="aturnnt">
		<div class="rowlgi">
	  <div class="judul">
	  <h1 ><a href="">Appleria<span>.</span></a></h1>
	  </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      
	  <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
		<div class="navmy">
          <div class="t1">
		  <li><a class="nav-link scrollto" href="">About</a></li>
		  </div>
		  <div class="t1">
		  <li><a class="nav-link scrollto" href="">Beranda</a></li>
		  </div>
		  <div class="t1">
		  <li><a class="nav-link scrollto" href="">Contact</a></li>
		  </div>

      
      <div class="t2">
        <div class="border-t2">
          <div class="atur-t2">
            <a href="#">Join</a>
          </div>
        </div>
      </div>
     </div>
         
        </ul>

        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

	 
	  </div>
		</div>
	  </div>
      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

     

       <div class="ptjudul">
	   <div class="d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-delay="200"> 
          <div class="tmpt-page" data-aos="fade-right" data-aos-delay="500">
            <div class="border-pge">
              <div class="atur-pge">
                 <div class="judul-new">
                 <h2 data-aos="fade-right" data-aos-delay="550"><?php echo $post['title']; ?></h2>
                 <p data-aos="fade-right" data-aos-delay="550"><?= $post['publish']; ?></p>
                 </div>
                 <div class="titlenya">
                 <a href="#" data-aos="fade-right" data-aos-delay="550"><?php echo $post['category'];?> <span class="logicerlngga"> / Detail</span></a>
                 </div>
              </div>
            </div>
          </div>
          <ol>
            
           
          </ol>
        </div>
	   </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="nama-post" data-aos="fade-right" data-aos-delay="200">
            
           
            
        </div>

        <div class="gambar-top" data-aos="fade-up" data-aos-delay="200">
            <div class="gambarnya">
               
            </div>
        </div>

        <div class="text-awal" data-aos="fade-up" data-aos-delay="220">
            <p class="text-appleria">Jakarta, Appleria.com - <span class="named">
            <div class="atas-ct">
              <div class="border-ct">
                <div class="atur-atas" data-aos="zoom-in" data-aos-delay="600">
                <?= $post['content']; ?> 
                </div>
              </div>
            </div>
			
            </span></p>
        </div>
		

		<div class="padding-top">
		
<?php

include 'koneksi.php';
$pesan = mysqli_query($conn, "SELECT * FROM guestbook ORDER BY tanggal");

?>


	
	<div class="form-kmn">
	<h3 data-aos="fade-right" data-aos-delay="550">Tambahkan Komentar</h3>
	
	<form action="hasilpost.php" method="post">
	
		<div class="inputnnn" data-aos="fade-right" data-aos-delay="500">
		Nama: <input type="text" name="userid" value="<?php echo $_SESSION['username']; ?>" readonly><br>
		</div>
		
		<div class="inputnnn" data-aos="fade-right" data-aos-delay="500">
		Pesan: <br>
		<textarea name="comment" cols="40" rows="5"></textarea>
		</div>
		<br>
		

		<div class="ptpp">
			<div class="inputny" data-aos="zoom-in" data-aos-delay="500">
			<input type="submit" value="Kirim">
			</div>
		</div>
	
	</form>
	</div>

	<div class="pt-form" data-aos="fade-right" data-aos-delay="500">
	<p>Recently Comment</p>
      <hr>
	<?php
	
	while($row = mysqli_fetch_array($pesan)) {
	
		echo "<small>Oleh <b>{$row['userid']}</b> pada {$row['tanggal']}</small>";
		echo "<p>{$row['comment']}</p>";
		echo "<hr>";
		
	}
	
	?>
	</div>
		</div>
        
      </div>
    </section>

  </div>
   
<script>
  AOS.init();
</script>  
</body>

</html>