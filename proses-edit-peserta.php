<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  $id_pendaftaran = $_POST['id_pendaftaran'];
  $th_ajaran   = $_POST['th_ajaran'];
  $jurusan   	= $_POST['jurusan'];
  $nm_peserta    = $_POST['nm_peserta'];
  $tmp_lahir    = $_POST['tmp_lahir'];
  $tgl_lahir    = $_POST['tgl_lahir'];
  $jk    = $_POST['jk'];
  $agama    = $_POST['agama'];
  $alamat    = $_POST['alamat'];
  $status    = $_POST['status'];
  $query  = "UPDATE tb_pendaftaran SET th_ajaran = '$th_ajaran', jurusan = '$jurusan', nm_peserta = '$nm_peserta', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', agama = '$agama', alamat = '$alamat', status = '$status'";
  $query .= "WHERE id_pendaftaran = '$id_pendaftaran'";
  $result = mysqli_query($conn, $query);
  // periska query apakah ada error
  if(!$result){
		die ("Query gagal dijalankan: ".mysqli_errno($conn).
						 " - ".mysqli_error(conn));
  } else {
	//tampil alert dan akan redirect ke halaman index.php
	//silahkan ganti index.php sesuai halaman yang akan dituju
	  echo "<script>alert('Data berhasil diubah.');window.location='edit-peserta.php?id=$id_pendaftaran';</script>";
  }


 
?>