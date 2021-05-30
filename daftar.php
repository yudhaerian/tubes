<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","tubes");
?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="logo.jpg">
    <title>Register</title>
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
			<div class="form-group" ><a href="">REGISTER </a></div>
            <div class="illustration"><i><img src="zahida.png" width="108px" height="40px" alt=""></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="text" name="password" placeholder="Password"></div>
			<div class="form-group"><input class="form-control" type="text" name="nama" placeholder="Nama"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" name="save"	type="submit">Register</button></div><a href="login.php" class="forgot">Login</a>
			<?php 
				if (isset($_POST['save']))
				{
					$koneksi->query("INSERT INTO admin
					(username,password,nama_lengkap)
					VALUES('$_POST[username]','$_POST[password]','$_POST[nama]')");

					echo "<div class='alert alert-info'>Pendaftaran Berhasil Silahkan Login!! </div>;
				<meta http-equiv='refresh' content='1;url=daftar.php'>";}
			?>
			</form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
