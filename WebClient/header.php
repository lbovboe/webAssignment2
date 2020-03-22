<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <script src="https://kit.fontawesome.com/8d7689987a.js"></script>
</head>

<body>
    <!-- Top Nav Bar -->
    <div class="top-nav-bar">
        <form class="search-box" action="search.php" method="post">

            <span>
                <a class="logo" href="index.php">TECH@CS</a>
            </span>

            <input type="text" class="searchinput" />

            <button class="searchicon" type="submit" name="submit-search">search</button>



        </form>
        <div class="login-bar">
            <?php
            if (isset($_SESSION['idnum'])) {
                echo
                    '<form action="../Server/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">LogOut</button>
                </form>';
            } else {
                echo
                    '<form action="../Server/login.inc.php" method="post">
                   <input type="text" name="mailuid" placeholder="Username/E-mail...">
                   <input type="password" name="pwd" placeholder="password..">
                   <button type="submit" name="login-submit">login</button>
               </form>
               <a href="signup.php">SignUp</a>';
            }
            ?>



        </div>
    </div>
    <!-- End of top nav bar -->