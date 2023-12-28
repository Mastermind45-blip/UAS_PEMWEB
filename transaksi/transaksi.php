<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/transaksi.css">
    <title>Bayar Kuliah</title>
</head>
<body>
    <?php include("../libs/session.php"); ?>
    <h2>Daftar Yang Sudah Bayar Kuliah</h2>
    <button type="button" class="blue"><a href="tambah_transaksi.php">Tambah</a></button>
    <button type="button" class="blue"><a href="../data_mahasiswa/data.php">Data</a></button>
    <button type="button" class="blue"><a href="../libs/logout.php">Logout</a></button>

    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
        <?php 
        include("../libs/koneksi.php");
        $no = 1;
        $query = "SELECT * FROM transaksi";
        $result = mysqli_query($koneksi, $query);

        while($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td>
                    <a href="hapus_produk.php?id=<?php echo $data['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        };
        mysqli_close($koneksi);
        ?>
    </table>
    <form action="../generate_pdf/pdf.php" method="post" target="_blank">
        <button type="submit" name="cetakPDF">Cetak PDF</button>
    </form>
</body>
</html>
