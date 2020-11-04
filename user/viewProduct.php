<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tamilarasu Arunachalam">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
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
        include "../config.php";
        $product_id=$_GET['product_id'];
        $sql="select * from products where product_id='".$product_id."'";
        $run=mysqli_query($con,$sql);
    ?>
    <div class="main">
        <div class="container">
            <div class="card">
                <div class="row">
            <?php
            while($row=mysqli_fetch_assoc($run))
            {
                $offer=$row['aprice']-$row['oprice'];
                ?>
                <form action='' method='post'>
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap"> 
                        <div class="img-big-wrap">
                            <div><img src="../seller/<?php echo $row['path']?>" class="img-responsive"></div>
                        </div>
                        </article> <!--//gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
                        <article class="card-body p-5">
                        <h3 class="title mb-3"><?php echo ucwords($row['product_name'])." - ".ucwords($row['color']) ?></h3>
                        <p class="price-detail-wrap"> 
                        <span class="price h3 text-warning"> 
                            <span class="currency">&#8377;.</span><span class="num"><?php echo $row['oprice']?></span>
                            <s><small><span class="currency">&#8377;.</span><span class="num"><?php echo $row['aprice']?></span></small></s>
                        </span>  
                        </p> <!-- price-detail-wrap .// -->
                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p><?php echo $row['description'] ?></p></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Brand</dt>
                            <dd><?php echo ucwords($row['brand'])?></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Category</dt>
                            <dd><?php echo ucwords($row['category']) ?></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Color</dt>
                            <dd><?php echo ucwords($row['color']) ?></dd>
                        </dl>
                        <hr>
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['product_name'] ?>"'>
                        <input type="hidden" name="category" value="<?php echo $row['category'] ?>"'>
                        <input type="hidden" name="price" value="<?php echo $row['oprice'] ?>"'>
                        <input type="hidden" name="seller_email" value="<?php echo $row['user'] ?>"'>
                        <button type="submit" name='add' class='btn btn-lg btn-primary text-uppercase'><i class='fa fa-cart-plus'></i> Add to Cart</button>
                        </article> <!-- card-body.// -->
                    </aside>
                </form> <!-- col.// -->
            <?php
            }
            ?>
                </div>
            </div>
        </div>
    </div>
<?php include "../includes/footer.php" ?>
<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php
    if(isset($_POST['add']) && isset($_GET['product_id']))
    {
        $sql="select * from cart where email='".$_SESSION['user']."' and product_id='".$product_id."'";
        $read=mysqli_query($con,$sql);
        $num=mysqli_num_rows($read);
        if($num >= 1)
        {
            echo "<script>alert('Already added to cart')</script>";
        }
        else
        {
            $items=array(
                "product_id"=>$_POST['product_id'],
                "product_name"=>$_POST['product_name'],
                "category"=>$_POST['category'],
                "price"=>$_POST['price'],
                "email"=>$_SESSION['user'],
                "seller_email"=>$_POST['seller_email']
            );
            $keys1=[];
            $values1=[];
            if(is_array($items))
            {
                $DataArr = array();
                foreach($items as $keys=>$values)
                {
                    $keys1[]=$keys;
                    $values1[]=$values;
                }
                $query = "insert into cart (".implode(',',$keys1).") values ('".implode("','",$values1)."')";
                $run=mysqli_query($con, $query); 
            }
        }
    }
?>