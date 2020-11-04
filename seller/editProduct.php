<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php
        include "../includes/header.php";
        include "../includes/banner.php";
        include "../includes/navbar_seller.php";
        include_once "../config.php";
    ?>
<body bgcolor="#f9f9f9">
    <div class="main">
        <?php
             if(!isset($_SESSION['seller']))
             {
                 header("Location:../index.php");
             }
             
            $Url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($Url,"add=error")==true)
            {
                echo '<div class="alert alert-danger alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error Occured</strong></div>';
            }
        ?>
        <div class="container">
            <form action="updateProduct.php" method="get" enctype="multipart/form-data" class="well form-horizontal">
                <legend><h1 class="text-success text-center">Edit Your Product</h1></legend>
                <!-- product id -->
                            <?php
                                    echo '<input type="hidden" name="product_id" class="form-control" id="product_id" value="'.$_GET['product_id'].'">';
                            ?>
                <!-- product name -->
                <div class="form-group">
                    <label for="product_name" class="col-md-4 control-label">Product Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <?php
                                if(isset($_GET['product_name']))
                                {
                                    $product_name=$_GET['product_name'];
                                    echo '<input type="text" name="product_name" class="form-control" id="product_name" value="'.$product_name.'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="product_name" class="form-control" id="product_name">';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- category -->
                <div class="form-group">
                    <label for="category" class="col-md-4 control-label">Product Category</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                             <?php
                                if(isset($_GET['category']))
                                {
                                    $category=$_GET['category'];
                                    echo '<input type="text" name="category" class="form-control" id="category" value="'.$category.'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="category" class="form-control" id="category">';
                                }
                             ?>
                        </div>
                    </div>
                </div>
                <!-- brand -->
                <div class="form-group">
                    <label for="brand" class="col-md-4 control-label">Product brand</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th"></i></span>
                             <?php
                                    if(isset($_GET['brand']))
                                    {
                                        $brand=$_GET['brand'];
                                        echo '<input type="text" name="brand" class="form-control" id="brand" value="'.$brand.'">';
                                    }
                                    else
                                    {
                                        echo '<input type="text" name="brand" class="form-control" id="brand">';
                                    } 
                             ?>
                             </select>
                        </div>
                    </div>
                </div>    
                <!-- color -->
                <div class="form-group">
                    <label for="color" class="col-md-4 control-label">Product color</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            <?php
                                if(isset($_GET['color']))
                                {
                                    $color=$_GET['color'];
                                    echo '<input type="text" name="color" id="color" class="form-control" value="'.$color.'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="color" id="color" class="form-control">';
                                }
                            ?>
                        </div>
                    </div>
                </div>                
                <!-- actual price -->
                <div class="form-group">
                    <label for="aprce" class="col-md-4 control-label">Actual Price</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <?php
                                if(isset($_GET['aprice']))
                                {
                                    $aprice=$_GET['aprice'];
                                    echo '<input type="text" name="aprice" id="aprice" class="form-control" value="'.$aprice.'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="aprice" id="aprice" class="form-control">';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- offer price -->
                <div class="form-group">
                    <label for="oprice" class="col-md-4 control-label">Offer Price</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-cc"></i></span>
                            <?php
                                if(isset($_GET['oprice']))
                                {
                                    $oprice=$_GET['oprice'];
                                    echo '<input type="text" name="oprice" id="oprice" class="form-control" value="'.$oprice.'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="oprice" id="oprice" class="form-control">';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- product desc-->
                <div class="form-group">
                    <label for="description" class="col-md-4 control-label">Product Description</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <?php
                                if(isset($_GET['description']))
                                {
                                    $description=$_GET['description'];
                                    echo '<textarea name="description" id="description" class="form-control" cols="30" rows="10" style="resize:none;">'.$description.'</textarea>';
                                }
                                else
                                {
                                    echo '<textarea name="description" id="description" class="form-control" cols="30" rows="3" style="resize:none;"></textarea>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Quantity -->
                <div class="form-group">
                    <label for="quantity" class="col-md-4 control-label">Quantity</label>
                    <div class="col-md-2 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                        <?php
                            if(isset($_GET['quantity']))
                            {
                                $quantity=$_GET['quantity'];
                                echo '<input type="number" name="quantity" id="quantity" class="form-control" value="'.$quantity.'" min="1" max="100">';
                            }
                            else
                            {
                                echo '<input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1" max="100">';
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <!-- button -->
                <div class="form-group">
                    <label for="quantity" class="col-md-4 control-label"></label>
                    <div class="col-md-2 inputGroupContainer">
                        <div class="input-group">
                            <button name="edit" class="btn btn-success btn-block"><i class="fa fa-check"></i>&emsp;Update</button>
                        </div>
                    </div>
                </div>
                </td></tr>
    </table>   
    </form>
        </div>
    </div>
    <?php include "../includes/footer.php" ?>
    <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
