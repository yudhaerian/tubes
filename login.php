<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","tubes");
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="logo.jpg">
    <title>Zahida</title>
<link rel="stylesheet" href="assets/css/login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="login-dark">
        <form method="post">
			<div class="form-group" ><a href="">LOGIN </a></div>
            <div class="illustration"><i><img src="zahida.png" width="108px" height="40px" alt=""></i></div>
            <div class="form-group"><input class="form-control" type="username" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" name="login"	type="submit">Log In</button></div><a href="daftar.php" class="forgot">Sudah Punya akun? Daftar disini</a></form>
   
			<?php
				// jika ada tombol simpan(tombol simpan ditekan)
				if (isset($_POST["login"]))
				{
					$ambil= $koneksi->query("SELECT * FROM admin WHERE username='$_POST[username]' AND password = '$_POST[password]'");
					
					// ngitung akun yang terambil
					$akunyangcocok = $ambil->num_rows;
					
					// jika 1 akun yang cocok, maka diloginkan
					if ($akunyangcocok==1)
					{
						//anda suskses login
						//mendapatkan akun dalam bentuk array
						$akun = $ambil->fetch_assoc();
						//simpan di session pelanggan
						$_SESSION["admin"] = $akun;
						echo "<div class='alert alert-primary'>Login sukses</div>
						<meta http-equiv='refresh' content='1;url=index.php'>";

					
					}
					else
					{
						// anda gagal login
						echo "<div class='alert alert-danger'>Gagal Login, Silahkan periksa akun anda!</div>
						<meta http-equiv='refresh' content='1;url=index.php'>";
					
					}
				}

				?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!--nav-->

<br>

<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->





</body>
</html>