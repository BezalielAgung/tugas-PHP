<?php
    if(isset($_POST["submit"])){
       
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            // akun siswa
            if($_POST["username"] == "siswa" &&
            $_POST["password"] == "siswaganteng"){
                header("Location: dataSiswa.php");
                exit;
            } 
            // akun admin
            else if($_POST["username"] == "admin" &&
            $_POST["password"] == "adminkere"){
                header("Location: adminDataSiswa.php");
            } else {
                $error = true;
            }
        }else{
            $kosong = true;
        }

    }
    /* siswa= username = siswa password = siswaganteng
       admin= username = admin password = adminkere 
    */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Login User</h1>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <br>

            <label for="password">Password</label>
            <input type="password" name="password"id="password">
            <br>

            <?php
                if(isset($error)){
                    echo "Username atau Password salah!";
                }
                if(isset($kosong)){
                    echo "Isi kolom!";
                }
            ?>
            <br>
            <button type="submit" name="submit">Log in</button>
        </form>

    </body>
</html>