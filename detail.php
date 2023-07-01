<?php
    session_start();
    include("config/koneksi.php");

    if (isset($_GET['id_sepatu'])) {
        $id_sepatu = $_GET['id_sepatu'];

        $sql = mysqli_query($koneksi,"SELECT * 
                                         FROM master_sepatu
                                         WHERE id_sepatu = '$id_sepatu'");
        $row = mysqli_fetch_array($sql);
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Kutsuku</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
            <a class="navbar-brand mr-5" href="index.php">
              <img src="images/iconsepatu.png" style="width: 50px; height: 50px" alt="">
              <span>
                Kutsuku
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="product.php"> Product </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cart.php" style="padding-left: 15px;">
                      <span class="fa fa-shopping-cart"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="login.php" style="padding-left: 15px;">
                      <span class="fa fa-user fa-1x"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
            <img src="images/aboutsepatu.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  <?= $row['nama_sepatu'] ?>
                </h2>
              </div>
              <p style="font-weight: bold; font-size: 28px;">
                Rp. <?= $row['harga_sepatu'] ?>
              </p>
              <p style="text-align: center; color: gray;">
                <b><?= $row['nama_sepatu'] ?> try to express festive in more playful way, combine comfortness and quirky style with 2 padded ears made from genuine leather.</b>
                <br><br>
                Pair <?= $row['nama_sepatu'] ?> with simple cut quirky outfit for cheering up your Festive Season on Raya
              </p>
              <br>
              <p>
                Size:
              </p>
              <div class="mb-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="37" value="37">
                  <label class="form-check-label" for="37">37</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="38" value="38">
                  <label class="form-check-label" for="38">38</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="39" value="39">
                  <label class="form-check-label" for="39">39</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="40" value="40">
                  <label class="form-check-label" for="40">40</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="41" value="41">
                  <label class="form-check-label" for="41">41</label>
                </div>
              </div>
              <a href="product.php">
                Add to cart
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about section -->

    <!-- info section -->
    <section class="info_section">
      <div class="footer_contact" style="margin-bottom: 50px !important;">
        <div class="heading_container">
          <h2>
            Detail Ukuran
          </h2>
        </div>
          <center>
            <div class="box">
              <img src="images/ukuran.jpg" alt="">
            </div>
          </center>
      </div>
    </section>

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        Copyright &copy; 2023 All Rights Reserved By
        <a href="index.php">Kutsuku</a>
      </p>
    </section>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </body>
</html>