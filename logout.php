<?php
    session_start();
    session_destroy();
    session_start();

    $_SESSION['message'] = "Logout success!";
    header("location:index.php");
?>