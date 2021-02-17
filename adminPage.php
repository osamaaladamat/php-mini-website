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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet" />
    <title>Admin Dashboard</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 3rem;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 10px 10px 0 0;
        }

        td {
            padding: 12px 20px;
            max-width: 600px;
            min-width: 10rem;
            border: 1px solid #dddddd;
        }

        .tableContainer {
            margin: 5rem 0 0 10rem;
        }

        tr:first-of-type td {

            background-color: #c9c9c9;
            color: black;
            text-align: left;

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
        <main>
            <div class="tableContainer">
                <Table>
                    <tr>
                        <td>User Name</td>
                        <td>Password</td>
                        <td>Role</td>
                        <td>Delete</td>
                    </tr>

                    <?php foreach ($_SESSION["users"] as $key => $value) : ?>
                        <tr>
                            <td> <?php echo $value["username"]; ?> </td>
                            <td> <?php echo $value["password"]; ?> </td>
                            <td> <?php echo $value["role"];     ?> </td>
                            <td> <?php echo '<a href="delete.php?key=' . $key . '"><input class="btn btn-sm btn-warning btn-block" value="Delete" type="submit"/></a>';
                                    ?> </td>
                            <?php /* 2nd way (without redirecting)

                                 echo "<form method='post'>
                                <input type='hidden' name='key' value='$key'>
                                <input type='submit' name='delete2' value='delete'></form>"; 
                                
                                !! add this to the top of the doc !!
                                if (isset($_POST['delete2'])) {
                                    $key = $_POST['key'];
                                    unset($_SESSION['users']["$key"]);}
                                */
                            ?>
                        </tr>
                    <?php endforeach; ?>
                </Table>
            </div>
        </main>
    </div>
</body>

</html>