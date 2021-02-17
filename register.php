<?php
session_start();

if (!isset($_SESSION['users'])) {
    include "users.php";
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
    <title>Home</title>
    <!-- <style>
        #error {
            color: red;
            padding: 1rem;
            font-weight: 500;
        }
    </style> -->
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
        <form class="form-signin" method="post" action="register.php">
            <div class="text-center">
                <h1 class="h3 mb-5 font-weight-normal">Create a new account</h1>
            </div>
            <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="username" autofocus name="username">
                <label for="inputEmail">Username</label>
            </div>

            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
                <label for="inputPassword">Password</label>
            </div>
            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password2">
                <label for="inputPassword">Confirm-Password</label>
            </div>
            <div class="form-label-group">
                <input type="text" id="phoneNumber" class="form-control" placeholder="Phone Number" autofocus name="phoneNumber">
                <label for="phoneNumber">Phone-Number</label>
            </div>
            <!-- <div id="error">
                <?php
                // if (
                //     isset($error1) ||
                //     isset($error2) ||
                //     isset($error3) ||
                //     isset($error4)
                // ) {
                //     echo $error1;
                //     echo "<br>";
                //     echo $error2;
                //     echo "<br>";
                //     echo $error3;
                //     echo "<br>";
                //     echo $error4;
                // }
                ?>
            </div> -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Adam-Abusamra 2020</p>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </div>
    <?php
    //Required input fields
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_SESSION["users"] as $key => $value) {
            if (
                $_POST["username"] == $value["username"]
                && $_POST["password"] == $value["password"]
            ) {
                print_r("Account already exists <br>");
                //$error1 = "Account already exists";
            }
        }

        if (empty($_POST["username"])) {
            print_r("Please enter username <br>");
            // $error2 = "Please enter username";
        } elseif (empty($_POST["password"]) || empty($_POST["password2"])) {
            print_r("Please set password <br>");
            //$error3 = "Please set password";
        } elseif (
            $_POST["password"] != $_POST["password2"]
        ) {
            print_r("Passwords do not match! <br>");
            //$error4 = "Passwords do not match!";
        }
        // $_POST["phoneNumber"] == "" is the same as empty
        elseif (empty($_POST["phoneNumber"])) {
            print_r("Please enter phone number <br>");
            //$error5 = "Please enter phone number";
        }
        /* if (!empty($_POST["username"]) || !empty($_POST["password"])) */ else {
            $newUser = array(
                "username" => $_POST["username"],
                "password" => $_POST["password"],
                "role"     => "user"
            );
            array_push($_SESSION["users"], $newUser);
            $_SESSION["welcomeName"] = $_POST["username"];
            header("Location: welcome.php");
        }
    }
    ?>
</body>

</html>