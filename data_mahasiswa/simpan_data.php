<?php 
include("../libs/koneksi.php");
$nim = $_POST["nim"];
$nama = $_POST["nama"];

if(empty($nim) || empty($nama)){
    echo "Data kosong!";
} else {
    mysqli_query($koneksi,"INSERT into data values (NULL,'$nim','$nama')") or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:data.php");
}
?>