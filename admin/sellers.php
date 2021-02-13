<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tamilarasu">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
</head>
<body>
    <?php
        if(!isset($_SESSION['admin']))
        {
            header("Location:index.php");
        }
        include_once "header.php";
    ?>
    <div class="main">
    <?php
        include "../config.php";
        $sql="select * from seller";
        $run=mysqli_query($con,$sql);

        $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($url,'edit=success')==true)
        {
            echo '<div class="alert alert-success alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Updated successfully</strong>
          </div>';
        }elseif(strpos($url,'delete=success')==true)
        {
            echo '<div class="alert alert-success alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Deleted successfully</strong>
          </div>';
        }
        ?>
        <h2 class="text-center text-success">Seller's List</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>S.No</th>
                    <th>Seller Name</th>
                    <th>Store Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
                <?php
                $a=1;
            while($row=mysqli_fetch_assoc($run))
            { ?>
                <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo ucwords($row['owner']); ?></td>
                    <td><?php echo ucwords($row['firmname']); ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo ucfirst($row['gender']); ?></td>
                    <td><a href="editSeller.php?sellerid=<?php echo $row['id']; ?>" class="text-info"><i class="fa fa-edit"></i></a>&emsp;
                    <a href="deleteGuys.php?sellerid=<?php echo $row['id']; ?>" class="text-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
            <?php $a++; } ?>
            </table>
        </div>
    </div>
    <?php include "footer.php" ?>

<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>