<?php
session_start();
$key = $_GET['key'];

unset($_SESSION['users']["$key"]);
header("location:adminPage.php");
