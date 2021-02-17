<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/nav.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet" />
  <title>Home</title>
</head>

<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1"></div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="index.php"><img src="assets/images/adam_logo (2).png"></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <?php
          if (!isset($_SESSION["userId"])) {
            print_r('<a class="btn btn-md btn-outline-info mr-2" href="login.php">login</a>');
          }
          ?>
          <?php
          if (!isset($_SESSION["userId"])) {
            print_r('<a class="btn btn-md btn-outline-info " href="register.php">Register</a>');
          }
          ?>
          <?php
          if (isset($_SESSION["userId"])) {
            print_r('<h4 style="text-align:center;">Welcome : ' . ucfirst($_SESSION["welcomeName"]) . '</h4>');
          }
          ?>
          <!-- <a class="btn btn-md btn-outline-info mr-2" href="login.php">login</a>
          <a class="btn btn-md btn-outline-info " href="register.php">Register</a> -->
        </div>
      </div>
    </header>

    <main role="main">
      <div id="myCarousel" class="carousel slide mt-3" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="" alt="">
            <div class="container">
              <!-- <div class="carousel-caption">
                <h1>Want to create a new account ?</h1>
                <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Register</a></p>
              </div> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="" alt="">
            <div class="container">
              <!-- <div class="carousel-caption">
                <h1>Already have an account ? </h1>
                <p><a class="btn btn-lg btn-primary" href="users.php" role="button">Login</a></p>
              </div> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="" alt="">
            <div class="container">
              <!-- <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div> -->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </main>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>