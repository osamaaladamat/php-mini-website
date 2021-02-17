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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet" />
    <title>Home</title>
    <style>
        body {
            background-image: url(assets/images/welcome.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position-y: 5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="index.php"><img src="assets/images/adam_logo (2).png" style="max-width: 150px;"> </a> </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-md btn-outline-info mr-2" href="index.php">Home</a>
                </div>
            </div>
        </header>
    </div>
    <?php
    /* This sets the [userid] to a random number so that the home page can check on it weather to display the login and register buttons */
    $_SESSION["userId"] = rand();

    ?>
</body>