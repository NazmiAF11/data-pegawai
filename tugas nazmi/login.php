<?php

// require_once('function/helper.php');
require_once('function/koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>www.DATA_PEGAWAI.com</title>
	<link rel="stylesheet" href="<?= 'style.css' ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<div class="topbar">
	<h2 class="text-topbar">Selamat Datang Di Aplikasi Data Pegawai</h2>
		<h3 class="text-topbar">Masukan Akun Anda</h3>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#0099ff" fill-opacity="1" d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,261.3C840,267,960,245,1080,218.7C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
	</svg>

	<form action="config/aksi_login.php" method="post">
		<div class="content">
			<div class="card-login">
				<div class="card-main">
					<div class="card-header">Login</div>
					<div class="card-body">
						<form class="form-login" method="POST" action="<?= '' ?>">
							<label class="form-label">username</label>
							<input type="username" name="username" class="form-input"required>
							

							<label class="form-label">password</label>
							<input type="password" name="password" class="form-input">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="autoSizingCheck">
								<label  class="form-label">Login Sebagai</label>
								<select class="form-control" name="level">
									<option value="masyarakat">Masyarakat</option>
									<option value="petugas">Petugas</option>
									<option value="admin">Admin</option>
								</select>
								<!-- <label class="form-check-label" for="autoSizingCheck">
									Remember me
								</label> -->
								<button type="submit" class="btn btn-login">Login</button>
							</div>
					</div>

	</form>

	</div>
	<div class="text-center">
		<a class="small" href="register.php">Create an Account!</a>
	</div>
	</div>
	</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>