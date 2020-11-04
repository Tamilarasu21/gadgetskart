<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <?php
        if(!isset($_SESSION['user']))
        {
            header("Location:../index.php");
        }

        include "../includes/header.php";
        include "../includes/banner.php";
        include "../includes/navbar_user.php";
    ?>
    <div class="thanks">
        <img src="../assets/tick-icon.png" alt="" width="160px" height="160px">
        <h1>Thankyou for</h1>
        <h1>Purchasing</h1>
    </div>
    <?php include "../includes/footer.php"; ?>
    <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>