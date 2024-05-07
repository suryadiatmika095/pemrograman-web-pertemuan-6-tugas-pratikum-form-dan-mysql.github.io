<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_mahasiswa_ui';
$conn = mysqli_connect($hostname, $username, 
$password, $dbname) or die ('Gagal terhubung ke database');
?>