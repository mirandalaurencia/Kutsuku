<?php
    # Membuat session
    session_start();
    include("config/koneksi.php");

    if (isset($_POST["email"]) && isset($_POST["password"]))
    {   
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = mysqli_query($koneksi,"SELECT *  
                                FROM master_user
                                WHERE 
                                    user_email = '$email' and 
                                    user_password = '$password' and
                                    user_status= 'A'");
        $row = mysqli_num_rows($sql);

        if ($row > 0){
            $user = mysqli_fetch_array($sql);

            # Set session user and login
            $_SESSION['username'] = $user['user_nama'];
            $_SESSION['login'] = 'YES';
            
            # Direct to select_sepatu
            header("location:index.php");
        } else {
            $_SESSION['message'] = "Login failed!";
            header("location:login.php");
        }
    } else {
        $_SESSION['message'] = "Login failed!";
        header("location:login.php");
    }
?>