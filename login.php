<?php 
session_start();
error_reporting(0);
include 'koneksi.php';
if($_SESSION['level']==""){
	}else if($_SESSION['level']=="admin"){
		header("location:index.php");
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

    <!--bagian main login-->
    <section class="main-login">
        <div class="box-login">
            <h2>Login Peserta</h2>
            
            <!--bagian form login-->
            <form action="cek_login.php" method="post">
                <div class="box">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="user" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="pass" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="login" value="Login" class="btn-login">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>

        </div>

    </section>
</body>
</html>