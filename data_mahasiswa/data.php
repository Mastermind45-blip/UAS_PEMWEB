<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/data.css">
    <title>Suppliers</title>
</head>
<body>
    <?php include("../libs/session.php"); ?>
    <div class="container-supplier">
        <div>
            <form action="simpan_data.php" method="POST">
                <h3>Input data mahasiswa</h3>
                <br/>
                <table class="tabel-1">
                    <tbody>
                        <tr>
                            <td><input type="text" name="nim" required="true" autocomplete="off" placeholder="Masukan NIM"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="nama" required="true" autocomplete="off" placeholder="Masukan Nama Mahasiswa"></td>
                        </tr>
                        <tr>
                            <td>
                                <br/>
                                <div class="navigation-container">
                                    <button type="submit">Simpan</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div>
            <br/>
            <div>
                <button><a href="../transaksi/transaksi.php">transaksi</a></button>
                <button><a href="../libs/logout.php">Logout</a></button>
            </div>
            <br/>
            <h2>Data Mahasiswa</h2>
            <br/>
            <table class="tabel-2">
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                </tr>
                <?php 
                include("../libs/koneksi.php");
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT nim, nama FROM data");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td>
                            <a href="hapus_data.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                        </td>
                    </tr>
                    <?php
                };
                ?>
            </table>
        </div>
    </div>
    <br/>
</body>
</html>