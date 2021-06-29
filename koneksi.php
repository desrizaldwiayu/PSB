<?php 
    // membuat koneksi db
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'psb';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'Error : '.mysqli_connect_error($conn);
    }
?>
