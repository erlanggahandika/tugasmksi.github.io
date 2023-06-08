<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- ================= Login page css | customize by erlangga ============================ -->
	<link rel="stylesheet" href="login.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- ================================= end ================================================= -->
	<title>Login Page</title>
</head>
<body>
	<div class="container">
		<div class="atur-ct">
			<div class="template-ct">

			<div class="row-tmpt">
				<div class="row-kiri">
					<div class="pt-bg">
					<div class="bg-rk"></div>
					</div>
				</div>

				<div class="row-kanan">
					
	<div class="kotak_login">
		<p class="tulisan_login">Welcome to Apple<span class="judul-txt">ria</span></p>

		<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='pt-alert'>
			<div class='alert'>
			<div class='aturnya'>Username dan Password tidak sesuai !</div>
			      </div>
			</div>";
		    }
	    }
	    ?>
 
		<form action="cek-login.php" method="post">
			
			<div class="form-inpt">
			
			<div class="row-inp">
				<div class="iconn">
				<i class='bx bx-user icon'></i>
				</div>
				<div class="inputny">
				<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
				</div>
			</div>
			</div>

			<div class="form-inpt">
			
			<div class="row-inp">
				<div class="iconn">
				<i class='bx bxs-lock icon'></i>
				</div>
				<div class="inputny">
				<input type="text" name="password" class="form_login" placeholder="Password .." required="required">
				</div>
			</div>
			</div>
 
			
 
			<div class="form-inpt">
			<div class="submit-erlngga">
			<input type="submit" class="tombol_login" value="Sign In">
			</div>
			</div>
 
			<br/>
			<br/>
			<div class="back-cuy">
			<a class="link" href="#">kembali</a>
			</div>

			<div class="txt-sz">
				<p>customize login page by <span class="byy">erlangga</span> <?= date('Y');?></p>
			</div>
		</form>
		
	</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>