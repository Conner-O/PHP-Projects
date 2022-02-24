<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <title>Iowa State University Central Stores</title>
</head>
<nav class="navbar">
    <a class="navbar-brand" href="index.php">
        <img src="https://order.centralstores.iastate.edu/SiteImages/215-SchoolImages/215-isu1.svg" width="200" height="40" class="d-inline-block align-top" alt="">
    </a>
    <div class="wrapper">
        <li class="navItem"><a href="index.php" class="navLink">Home</a></li>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<li class=\"navItem\"><a href='profile.php' class=\"navLink\">Profile page</a></li>";
            echo "<li class=\"navItem\"><a href='includes/logout.inc.php' class=\"navLink\">Log out</a></li>";
        } else {
            echo "<li class=\"navItem\"><a href='signup.php' class=\"navLink\">Sign up</a></li>";
            echo "<li class=\"navItem\"><a href='login.php' class=\"navLink\">Log in</a></li>";
        }
        ?>
    </div>
</nav>

<div class="wrapper">

</div>

<body>
    <header>

    </header>