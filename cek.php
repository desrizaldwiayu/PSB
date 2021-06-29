<?php
    session_start();
    include 'koneksi.php';
	if($_SESSION['level']==""){
		header("location:login.php");
	}else if($_SESSION['level']=="admin"){
		header("location:index.php");
	}
    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran 
    WHERE id_pendaftaran = '".$_POST['cek']."' ");
    $p = mysqli_fetch_object($peserta);
	if($p==""){
		echo "<script>alert('Data tidak ada');window.location='daftar-peserta.php';</script>";
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

    <!----bagian box form---->

    <section class="box-formulir">
	
	<h2>Cek Status</h2><p style="text-align:right;"><a href= "daftar-peserta.php">Daftar</a> | <a href= "keluar.php">Keluar</a></p>
            <div class="box">
                <table class="table-data" border="0">
        <tr>
            <td>Kode Pendaftaran</td>
            <td>:</td>
            <td><?php echo $p->id_pendaftaran ?></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><?php echo $p->th_ajaran ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $p->jurusan ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $p->nm_peserta ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin </td>
            <td>:</td>
            <td><?php echo $p->jk ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $p->agama ?></td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td>:</td>
            <td><?php echo $p->alamat ?></td>
        </tr>
		<tr>
            <td>Status </td>
            <td>:</td>
            <td><b><i><?php echo $p->status ?></i></b></td>
        </tr>
    
    </table>
            </div>

    </section>

</body>
</html>