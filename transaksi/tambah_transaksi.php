<?php 
include("../libs/koneksi.php");
$query1 = "SELECT nim FROM data";
$query2 = "SELECT nama FROM data";

$dataNim = mysqli_query($koneksi, $query1);
$dataNama = mysqli_query($koneksi, $query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tambah_transaksi.css">
    <title>Form transaksi</title>
</head>
<body>
    <div class="container">
        <?php include("../libs/session.php"); ?>
        <h3>Form Kontak</h3>
        <form action="simpan_transaksi.php" method="POST">
            <table>
                <tbody>
                    <tr>
                        <td>nim</td>
                        <td>
                            <select name="nim">
                                <?php while($row1 = mysqli_fetch_array($dataNim)):; ?>
                                <option value="<?php echo $row1[0];?>"><?php echo $row1[0] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                    </tr>
                    <?php
                    // Reset the internal pointer of $dataNim to the beginning
                    mysqli_data_seek($dataNim, 0);
                    ?>
                    <tr>
                        <td>nama</td>
                        <td>
                            <select name="nama">
                                <?php while($row2 = mysqli_fetch_array($dataNama)):; ?>
                                <option value="<?php echo $row2[0];?>"><?php echo $row2[0] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Bayar</td>
                        <td><input type="text" name="harga" required="true" autocomplete="off" placeholder="Masukan dengan harga 2500000"></td>
                    </tr>
                </tbody>
            </table>
            <div class="navigation-container">
                <button type="submit">Simpan</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
