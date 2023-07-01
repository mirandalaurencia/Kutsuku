<?php
    session_start();
    include("config/koneksi.php");

    # Get product
    $sql = mysqli_query($koneksi,"SELECT c.*, s.* 
                                  FROM master_sepatu s
                                  JOIN master_category c
                                  ON c.category_id = s.category_sepatu
                                  WHERE c.category_status = 'A'
                                  LIMIT 8");
    $rows = mysqli_fetch_all($sql, MYSQLI_ASSOC);

    # Get category
    $sql_cat = mysqli_query($koneksi,"SELECT * 
                                  FROM master_category
                                  WHERE category_status = 'A'
                                  LIMIT 4");
    $rows_cat = mysqli_fetch_all($sql_cat, MYSQLI_ASSOC);

    # If logout success
    if (isset($_SESSION['message'])) {
      echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
      unset($_SESSION['message']);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
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
                  <?php if (isset($_SESSION['login'])) : ?>
                    <li class="nav-item">
                      <a class="nav-link " href="login.php" style="padding-left: 15px;">
                        <p><?= $_SESSION['username'] ?></p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="logout.php" style="padding-left: 15px;">
                        <span class="fa fa-sign-out"></span>
                      </a>
                    </li>
                  <?php else : ?>
                    <li class="nav-item">
                      <a class="nav-link " href="login.php" style="padding-left: 15px;">
                        <span class="fa fa-user fa-1x"></span>
                      </a>
                    </li>
                  <?php endif ?>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      
      <!-- slider section -->
      <section class="slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Welcome To <br>
                          <span>
                            KUTSUKU
                          </span>
                        </h1>
                        <p>
                          Best shoes for your best stinky legs
                        </p>
                        <div class="btn-box">
                          <a href="product.php" class="btn-1">
                            Shop Now
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Delivering <br>
                          <span>
                            your classic shoes
                          </span>
                        </h1>
                        <p>
                          Unbox a New Experience with Our Special Packaging
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </section>
      <!-- end slider section -->
    </div>

    <!-- about section -->
    <section class="about_section layout_padding" style="padding-bottom: 0px !important;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  About Us
                </h2>
              </div>
              <p>
                Welcome to Kutsuku, your ultimate online shoe store. Discover our extensive collection of stylish and comfortable shoes for every occasion. With top-notch brands, impeccable quality, and exceptional customer service, we're here to provide you with a delightful shopping experience. Find your perfect pair and step into style with Kutsuku.
              </p>
              <a href="product.php">
                Shop Now
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
            <img src="images/aboutsepatu.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- product section -->
    <div class="body_bg layout_padding">
      <section class="service_section ">
        <div class="container">
          <div class="heading_container">
            <h2>
              Categories
            </h2>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <?php foreach($rows_cat as $rc) : ?>
              <div class="col-md-3 mb-5">
                <div class="box">
                  <div class="img-box">
                    <img src="images/s-1.png" alt="">
                  </div>
                  <h4>
                    <?php echo $rc['category_name']; ?>
                  </h4>
                  <p>
                    From Rp. 200.000++ with many variants
                  </p>
                  <a href="product.php">
                    Shop Now
                  </a>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </section>

      <section class="service_section ">
        <div class="container">
          <div class="heading_container">
            <h2>
              New Collection
            </h2>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-md-center">
            <?php foreach($rows as $r) : $sepatu_id = $r['id_sepatu']; ?>
              <div class="col-sm-3 mb-2">
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

    <!-- Script -->
    <script src="admin/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>