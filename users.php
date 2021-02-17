<?php
//The users array
$usersArray = array(
    array(
        "username" => "adam",
        "password" => "admin123",
        "role" => "admin"
    ),
    array(
        "username" => "firas",
        "password" => "firas123",
        "role" => "user"
    ),

    array(
        "username" => "mohammad",
        "password" => "mohammad123",
        "role" => "user"
    ),

    array(
        "username" => "hamzah",
        "password" => "hamzah123",
        "role" => "user"
    ),

    array(
        "username" => "idrees",
        "password" => "idrees123",
        "role" => "user"
    ),
);

$_SESSION["users"] = $usersArray;

/* This is used because the login button on index brings user here to set the session array and then redirect them to the login so that the login page can loop on the array */
// header("Location: login.php");
