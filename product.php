<?php
    session_start();
    include("config/koneksi.php");

    # Get product
    $sql = mysqli_query($koneksi,"SELECT c.*, s.* 
                                  FROM master_sepatu s
                                  JOIN master_category c
                                  ON c.category_id = s.category_sepatu
                                  WHERE c.category_status = 'A'");
    $rows = mysqli_fetch_all($sql, MYSQLI_ASSOC);
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

    <div class="body_bg layout_padding">
      <section class="service_section" style="margin-left: 55px;">
        <div class="container">
          <div class="heading_container">
            <h2>
              Our Products
            </h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
            <?php foreach($rows as $r) : $sepatu_id = $r['id_sepatu']; ?>
              <div class="col-sm-3 mb-3">
                  <div class="card" style="width: 18rem;">
                      <img class="card-img-top bg-dark" src="images/iconsepatu.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title"><?php echo $r['nama_sepatu']; ?></h5>
                          <p class="card-text text-info"><?= $r['harga_sepatu']; ?>
                              <span><small class="text-muted"><?= $r['category_name']; ?></small></span>
                          </p>
                          <a href=<?= "detail.php?id_sepatu=$sepatu_id" ?> class="btn btn-primary">Detail</a>
                      </div>
                  </div>
              </div>
            <?php endforeach ?>
          </div>
      </section>
    </div>

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