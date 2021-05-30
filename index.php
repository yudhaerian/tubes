﻿<?php
session_start();
//Koneksi Database
$koneksi = new mysqli("localhost","root","","tubes");


if (!isset($_SESSION['admin']))
{
     echo "<div class='alert alert-danger'>Login dulu gaes wkw </div> <meta http-equiv='refresh' content='1;url=login.php'>";
    // echo "alert('Login dulu gaes :(');</script>";
    // echo "<script>location='login.php';</script>";
    // header('location=login.php');
     exit();
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="logo.jpg">
    <title>Zahida</title>

	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="zahida.png" width="120px" alt=""></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">                  
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
    <br>
			        <li><a href="index.php"><i class="fa fa-user-md"></i> Dashboard</a></li>
                    <li><a href="index.php"><i class="fa fa-dollar"></i> Anggaran Dana</a></li>
    <br>
                    <li><a href="index.php?halaman=penjualan"><i class="fa fa-dollar"></i> Penjualan</a></li>
                    <li><a href="index.php?halaman=pengeluaran"><i class="fa fa-dollar"></i> Pengeluaran</a></li>

                    <li><a href="index.php?halaman=kontak"><i class="fa fa-group"></i> Kontak</a></li>
    <br>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                    <button type="button" class="navbar-toggle" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="menu")
                    {
                        include 'menu.php';
                    }
                    
                    //penjualan
                    elseif ($_GET['halaman']=="tambahpenjualan")
                    {
                        include 'tambahpenjualan.php';
                    }
                    elseif ($_GET['halaman']=="penjualan")
                    {
                        include 'penjualan.php';
                    }
                    elseif ($_GET['halaman']=="hapuspenjualan")
                    {
                        include 'hapuspenjualan.php';
                    }
                    elseif ($_GET['halaman']=="ubahpenjualan")
                    {
                        include 'ubahpenjualan.php';
                    }
                

                    //pengeluaran
                    elseif ($_GET['halaman']=="tambahpengeluaran")
                    {
                        include 'tambahpengeluaran.php';
                    }
                    elseif ($_GET['halaman']=="ubahpengeluaran")
                    {
                        include 'ubahpengeluaran.php';
                    }
                    elseif ($_GET['halaman']=="pengeluaran")
                    {
                        include 'pengeluaran.php';
                    }
                    elseif ($_GET['halaman']=="hapuspengeluaran")
                    {
                        include 'hapuspengeluaran.php';
                    }


                    //kontak
                    elseif ($_GET['halaman']=="kontak")
                    {
                        include 'kontak.php';
                    }
                    elseif ($_GET['halaman']=="tambahkontak")
                    {
                        include 'tambahkontak.php';
                    }
                     elseif ($_GET['halaman']=="ubahkontak")
                    {
                        include 'ubahkontak.php';
                    }
                     elseif ($_GET['halaman']=="hapuskontak")
                    {
                        include 'hapuskontak.php';
                    }

                    //logout
                    elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                   
                }
                else
                {
                    include 'home.php';
                }
                
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
