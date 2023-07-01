<?php
    error_reporting(0);
    session_start();

    # If signup failed
    if (isset($_SESSION['message'])) {
        echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
        unset($_SESSION['message']);
    }
?>

<html>
    <head>
        <title>Welcome to Kutsuku</title>

        <!-- Custom icon -->
        <link rel="icon" href="images/iconsepatu.png">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="blur">
                <div class="log-in">
                    <img src="images/iconsepatu.png" height="100" width="100" />
                    <h1 >SIGN UP</h1>
                </div>
                
                <form method='POST' action="check_signup.php" style="margin-bottom: 0px;">
                    <input 
                        type='Text' 
                        placeholder='Masukkan Nama'
                        name='nama'
                        required
                    />

                    <input 
                        type='Text' 
                        placeholder='Masukkan Alamat'
                        name='alamat'
                        required
                    />  
                
                    <input 
                        type='Text' 
                        placeholder='Masukkan Email'
                        name='email'
                        required
                    />

                    <input 
                        type='PASSWORD' 
                        placeholder='Masukkan Password' 
                        name='password'
                        required
                    />

                    <input 
                        id='btn-input'
                        type='SUBMIT'
                        value='Sign Up'
                        name='signup'
                    />
                </form>
                <a href="index.php">
                    <input 
                        id="btn-cancel"
                        type='button'
                        value='Cancel'
                        name='cancel'
                    />
                </a>
            </div>
        </div>
    </body>
</html>