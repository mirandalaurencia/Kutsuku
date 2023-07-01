<?php
    # Membuat session
    session_start();
    include("config/koneksi.php");

    if (isset($_POST["nama"]) && isset($_POST["alamat"]) &&
        isset($_POST["email"]) && isset($_POST["password"]))
    {   
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = mysqli_query($koneksi,"SELECT *  
                                FROM master_user
                                WHERE user_email = '$email'");
        $row = mysqli_num_rows($sql);

        if ($row > 0){
            $_SESSION['message'] = "Your email already registered!";
            header("location:signup.php");
        } else {
            $sql_add_user = mysqli_query($koneksi, "INSERT INTO master_user(user_nama, user_alamat, user_email,     
                                        user_password) 
                                        VALUES('$nama', '$alamat', '$email', '$password')");
                                        
            if ($sql) {
                $_SESSION['message'] = "Welcome to Kutsuku. Please login.";
                header("location:login.php");
            } else {
                $_SESSION['message'] = "Sign up failed!.";
                header("location:signup.php");
            }
        }
    } else {
        $_SESSION['message'] = "Sign up failed!";
        header("location:signup.php");
    }
?>