<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
    use Outdoortest\front\Front;
    use Outdoortest\utility\Utility;
    use Outdoortest\body\Body;
?>

<?php
    $front = new Front();
    $banners = $front->getallbanners();

    $body = new Body;
    $g_data = $body->fetchabody();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Out Door Gear | Interview</title>
  </head>
  <body>
    <div class="container">
        <!-- Navbar start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="<?=Utility::ImageFolder . $g_data['nav_img']?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Utility::AdminWebView;?>index.php">Admin</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar end -->
    </div>
    <div class="container-fluid m-0 p-0">
        <!-- Banners start -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <?php
                $i = 0;
                foreach($banners as $banner): ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$i;?>" class="<?php if($i == 1) echo 'active'; ?>" aria-current="<?php if($i == 1) echo 'true'; ?>" aria-label="Slide <?=$i;?>"></button>
                <?php
                    $i++;
                    endforeach;
                ?>
          </div>
          <div class="carousel-inner">
            <?php
                $i = 0;
                foreach($banners as $banner):
            ?>
            <div class="carousel-item <?php if($i == 1){echo 'active';} ?>">
              <img src="<?=Utility::BannersFolder. $banner['banner_img']?>" class="d-block w-100" alt="<?=$banner['banner_img']?>">
              <div class="carousel-caption d-none d-md-block">
                <h5><?=$banner['header']?></h5>
                <p><?=$banner['banner_text']?></p>
              </div>
            </div>
            <?php
                $i++;
                endforeach;
            ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- Banners end -->
        <!-- Body text -->
        <div class="m-2">
            <?=$g_data['body_text'];?>
        </div>
        <!-- Body text end -->
        <!-- Footer start -->
        <footer class="footer px-5 mt-5">
            <div class="row text-center">
                <div class="col-md-4">
                    <h5 style="text-align: left !important;">About Us...</h5>
                    <p class="mt-2" style="text-align: justify;"><?=$g_data['about_us']?></p>
                </div>
                <div class="col-md-4">
                    <h5 style="text-align: left !important;">24/7 Customer Support</h5>
                    <p class="mt-2" style="text-align: justify;"><?=$g_data['customer_support']?></p>
                </div>
                <div class="col-md-4">
                    <h5 style="text-align: left !important;">Let us Help You</h5>
                    <ul style="margin-left: 10px !important; text-align: left !important;">
                        <li><a href="#">About OutdoorGears</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Our Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4">
                    <p class="fw-bold">Hotline: <?=$g_data['hot_line']?></p>
                </div>
                <div class="col-sm-4">
                    <p class="fw-bold">E-mail: <?=$g_data['e_mail']?></p>
                </div>
                <div class="col-sm-4">
                    <p class="fw-bold">WhatsApp: <?=$g_data['whatsapp']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 text-center">
                    <span class="text-center fw-bold text-success">Connect with Us</span><br>
                    <div class="mt-2">
                        <a href="<?=$g_data['facebook_link']?>"><i class="fab fa-facebook" style="font-size: 1.5rem; color: blue;"></i></a>&nbsp;&nbsp;
                        <a href="<?=$g_data['insta_link']?>"><i class="fab fa-instagram" style="font-size: 1.5rem; color: red;"></i></a>&nbsp;&nbsp;
                        <a href="<?=$g_data['linked_link']?>"><i class="fab fa-linkedin" style="font-size: 1.5rem; color: black;"></i></a>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <p class="text-center fw-bold mt-2"><?=$g_data['footer_copyright'];?></p>
        </footer>
        <!-- Footer end -->
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>