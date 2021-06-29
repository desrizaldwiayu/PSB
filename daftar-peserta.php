<?php
    include 'koneksi.php';
	session_start();
	if($_SESSION['level']==""){
		header("location:login.php");
	}else if($_SESSION['level']=="admin"){
		header("location:login.php");
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
	
	<h2>Cek Status</h2><p style="text-align:right;"><a href= "keluar.php">Keluar</a></p>
	<div class="box">
	<form action="cek.php" method="post">
                <table border="0" class="table-form">
                    <tr>
                        <td>ID Pendaftaran </td>
                        <td>:</td>
                        <td>
                            <input type="text" name="cek" class="input-control">   <input type="submit" name="submit" class="btn-daftar" value="Cek">
                        </td>
                </table>
				</form>
            </div>

        <h2>Formulir Pendaftaran Siswa Baru </h2>
		

        <!--bagian form-->
        <form method="POST" action="proses-daftar.php" enctype="multipart/form-data" >
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2021/2022" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan">
                                <option value="">--Pilih--</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                                
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Data Diri Calon Siswa</h3>
            <div class="box">
                <table border=0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" min="2006-12-30" name="tgl_lahir" class="input-control">
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="laki-laki">Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama">
                                <option value="">--Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option> 
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Khonghucu</option>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat"></textarea>
                        </td>
                    </tr>
					<tr>
                        <td>File</td>
                        <td>:</td>
                        <td>
                            <input type="file" name="gambar" required="" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><br>
                            <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                        </td>
                    </tr>
                </table>
            </div>

    </section>

</body>
</html>