<?php
    include 'koneksi.php';
	
	session_start();
	if($_SESSION['level']==""){
		header("location:login.php");
	}else if($_SESSION['level']=="admin"){
		header("location:login.php");
	}

		
        // ambil 1 id terbesar dikolom id_pendaftar, lalu ambil 5 karakter dari sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
		$gambar = $_FILES['gambar']['name'];
		
		if($gambar != "") {
		  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
		  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
		  $ekstensi = strtolower(end($x));
		  $file_tmp = $_FILES['gambar']['tmp_name'];   
		  $angka_acak     = rand(1,999);
		  $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
				if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
						move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
						  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
						  $result = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
							'".$generateId."',
							'".date('Y-m-d')."',
							'".$_POST['th_ajaran']."',
							'".$_POST['jurusan']."',
							'".$_POST['nm']."',
							'".$_POST['tmp_lahir']."',
							'".$_POST['tgl_lahir']."',
							'".$_POST['jk']."',
							'".$_POST['agama']."',
							'".$_POST['alamat']."',
							'Menunggu',
							'".$nama_gambar_baru."'
							)");
						  // periska query apakah ada error
						  if(!$result){
							  die ("Query gagal dijalankan: ".mysqli_errno($conn).
								   " - ".mysqli_error($conn));
						  } else {
							//tampil alert dan akan redirect ke halaman index.php
							//silahkan ganti index.php sesuai halaman yang akan dituju
							echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
						  }

					} else {     
					 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
						echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='daftar-peserta.php';</script>";
					}
		} else {
					   $result = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
						'".$generateId."',
						'".date('Y-m-d')."',
						'".$_POST['th_ajaran']."',
						'".$_POST['jurusan']."',
						'".$_POST['nm']."',
						'".$_POST['tmp_lahir']."',
						'".$_POST['tgl_lahir']."',
						'".$_POST['jk']."',
						'".$_POST['agama']."',
						'".$_POST['alamat']."',
						'Menunggu',
						''
						)");
						  // periska query apakah ada error
						  if(!$result){
							  die ("Query gagal dijalankan: ".mysqli_errno($conn).
								   " - ".mysqli_error($conn));
						  } else {
							//tampil alert dan akan redirect ke halaman index.php
							//silahkan ganti index.php sesuai halaman yang akan dituju
							echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
						  }
		}

 
    
?>