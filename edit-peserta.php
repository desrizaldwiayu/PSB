<?php
    session_start();
    include 'koneksi.php';
	if($_SESSION['level']==""){
		header("location:login.php");
	}else if($_SESSION['level']=="peserta"){
		header("location:daftar-peserta.php");
	}
    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran 
    WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
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
        <h1><a href="beranda.php">Admin PSB</a></h1>
        <ul>
            <li><a href= "beranda.php">Beranda</a></li>
            <li><a href= "data-peserta.php">Data Peserta</a></li>
            <li><a href= "keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!--bagian content-->
    <section class="content">
        <h2>Edit Peserta</h2>
		<form action="proses-edit-peserta.php" method="post">
        <div class="box">
        <table class="table-data" border="0">
        <tr>
            <td>Kode Pendaftaran</td>
            <td>:</td>
			<td><?php echo $p->id_pendaftaran ?><input name="id_pendaftaran" class="input-control" value="<?php echo $p->id_pendaftaran ?>" hidden/></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><input type="text" name="th_ajaran" class="input-control" value="<?php echo $p->th_ajaran ?>" /></td>
			<td>Status</td>
			<td>:</td>
			<td>
				<select class="input-control" name="status">
					<option value="<?php echo $p->status ?>">-- <?php echo $p->status ?> --</option>
					<option value="Diterima">Diterima</option>
					<option value="Ditolak">Ditolak</option>
					<option value="Menunggu">Menunggu</option>
					
			</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
			<td>
				<select class="input-control" name="jurusan">
					<option value="<?php echo $p->jurusan ?>">-- <?php echo $p->jurusan ?> --</option>
					<option value="IPA">IPA</option>
					<option value="IPS">IPS</option>
					
			</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
			
            <td><input type="text" name="nm_peserta" class="input-control" value="<?php echo $p->nm_peserta ?>" /></td>
        </tr>
		<tr>
            <td>Tempat Lahir</td>
            <td>:</td>
			
            <td><input type="text" name="tmp_lahir" class="input-control" value="<?php echo $p->tmp_lahir ?>" /></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl_lahir" class="input-control" value="<?php echo $p->tgl_lahir ?>" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin </td>
            <td>:</td>
            <td>
				<select class="input-control" name="jk">
					<option value="<?php echo $p->jk ?>">-- <?php echo $p->jk ?> --</option>
					<option value="laki-laki">laki-laki</option>
					<option value="perempuan">perempuan</option>
					
			</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
			<td>
				<select class="input-control" name="agama">
					<option value="<?php echo $p->agama ?>">-- <?php echo $p->agama ?> --</option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Katolik">Katolik</option> 
					<option value="Budha">Budha</option>
					<option value="Hindu">Hindu</option>
					<option value="Konghucu">Khonghucu</option>
			</td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td>:</td>
			<td>
				<textarea class="input-control" name="alamat"><?php echo $p->alamat ?></textarea>
			</td>
        </tr>
		<tr>
            <td></td>
            <td></td>
			<td></td>
			<td>
				<input type="submit" name="submit" class="btn-daftar" value="Simpan">
			</td>
        </tr>
    </table>

        </div>
    </section>
	</form>
</body>
</html>