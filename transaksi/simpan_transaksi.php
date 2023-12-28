<?php
include("../libs/koneksi.php");
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$harga = $_POST["harga"];

if(!isset($nim) || !isset($nama) || !isset($harga)) {
    echo "Data tidak ter-set!";
} else {
    mysqli_query($koneksi, "INSERT INTO transaksi VALUES (NULL, '$nim', '$nama', '$harga')") or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:transaksi.php");
}
?>
?>