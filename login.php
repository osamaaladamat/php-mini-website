<?php
session_start();

if (!isset($_SESSION['users'])) {
    include "users.php";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    foreach ($_SESSION["users"] as $key => $value) {

        if (
            $_POST["username"] == $value["username"]
            && $_POST["password"] == $value["password"]
            && $value["role"] == "admin"
        ) {
            header("Location: adminPage.php");
        } elseif (
            $_POST["username"] == $value["username"]
            && $_POST["password"] == $value["password"]
            && $value["role"] == "user"
        ) {
            $_SESSION["welcomeName"] = $_POST["username"];
            header("Location: welcome.php");
        } else {
            $error1 = "Please enter correct username and password";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet" />
    <title>Login</title>
    <style>
        #error {
            color: red;
            padding: 1rem;
            font-weight: 500;
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
                    <a class="btn btn-md btn-outline-info mr-2" href="login.php">Login</a>
                    <a class="btn btn-md btn-outline-info " href="register.php">Register</a>
                </div>
            </div>
        </header>
    </div>
    <div class="formContainer">
        <form class="form-signin" method="post">
            <div class="text-center">
                <h1 class="h3 mb-5 font-weight-normal">Login to your account</h1>
            </div>
            <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="username">
                <label for="inputEmail">Username</label>
            </div>

            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                <label for="inputPassword">Password</label>
            </div>
            <div id="error">
                <?php
                if (isset($_POST['submit'])) {
                    if (isset($error1)) {
                        echo $error1;
                    }
                }
                ?>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Adam-Abusamra 2020</p>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </div>

</body>

</html>