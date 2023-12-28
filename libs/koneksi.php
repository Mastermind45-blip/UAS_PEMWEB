<?php 
// Declare Variable
$hostname = "localhost";
$username = "joko";
$password = "";
$db_name = "db_admin";

// Connection To Mysql
$koneksi = mysqli_connect($hostname,$username,$password) or die("Koneksi gagal dibangun");
mysqli_select_db($koneksi, $db_name) or die("Database tidak dapat dibuka");

?>