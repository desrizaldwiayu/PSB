<?php
    include 'koneksi.php';
	session_start();
	if($_SESSION['level']==""){
		header("location:login.php");
	}else if($_SESSION['level']=="peserta"){
		header("location:daftar-peserta.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;400&display=swap" rel="stylesheet">
    <title>PSB</title>
</head>
<body>

    <!--bagian header-->
    <header>
        <h1><a href="index.php">Admin PSB</a></h1>
        <ul>
            <li><a href= "index.php">Beranda</a></li>
            <li><a href= "data-peserta.php">Data Peserta</a></li>
            <li><a href= "keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!--bagian content-->
    <section class="content">
        <h2>Beranda</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama'] ?> , Selamat Datang di Laman PSB</h3>

        </div>
    </section>

</body>
</html>