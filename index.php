<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/index.css">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="left-container">
                <h3>Universitas El Tortora</h3>
                <p>Selamat Datang di El Tortora</p>
            </div>
            <div class="right-container">
                <h2>Sign in</h2>
                <div style="margin-top:10px;">
                    <?php
                    if(isset($_GET['pesan'])) {
                        if($_GET['pesan'] == 'gagal') {
                            echo "Login gagal! username dan password salah!";
                        } else if ($_GET["pesan"] == "logout") {
                            echo "Anda berhasil untuk logout";
                        } else if ($_GET["pesan"] == "belum_login") {
                            echo "belum login";
                    }};
                    ?>
                </div>
                <form method="POST" action="./libs/check_login.php">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                <input type="text" name="username" required placeholder="Username">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <input type="password" name="password" required placeholder="Password">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="navigation-container">
                        <button type="submit">login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
