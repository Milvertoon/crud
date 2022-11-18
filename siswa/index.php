<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Login - SMKN 4 KENDAL</h2><br>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        } else if($_GET['pesan'] ==  "logout"){
            echo "Anda telah berhasil logout";
        } else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <br><br>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>