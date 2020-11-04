<header>
    <nav class="navbar navbar-inverse" style="margin-left:-1px;margin-right:-1px;background:#b2bcc2;border:none;">
        <div class="navbar-header">
        <a href="#" class="navbar-brand"><img src="../assets/cart.png" alt="" width="40" height="40" class="img-circle" style="background:snow;padding:0px;margin-top:-10px"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'home.php') {
                                        echo 'active';
                                    } ?>"><a href="home.php" id="nl">Home</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'category.php') {
                                        echo 'active';
                                    } ?>"><a href="category.php" id="nl">Categories</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'brands.php') {
                                        echo 'active';
                                    } ?>"><a href="brands.php" id="nl">Brands</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'offer.php') {
                                        echo 'active';
                                    } ?>"><a href="offer.php" id="nl">Offer</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'myorder.php') {
                                        echo 'active';
                                    } ?>"><a href="myorder.php" id="nl">My Orders</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'cart.php') {
                                        echo 'active';
                                    } ?>">
                    <?php
                    include "../config.php";

                    $stmt = "select * from cart where email='" . $_SESSION['user'] . "'";
                    $exe = mysqli_query($con, $stmt);
                    $n = mysqli_num_rows($exe);
                    if ($n == 0) {
                        echo '<a href="cart.php" id="nl"><span>cart</span>&nbsp;<span class="badge badge-light">0</span></a>';
                    } else {
                        echo '<a href="cart.php" id="nl"><span>cart</span>&nbsp;<span class="badge badge-light">' . $n . '</span></a>';
                    }
                    ?>
                </li>
                </ul>
                <ul class="nav navbar-nav" style="float:right;">
                <li class="nav-item"><a id="nl" href="#" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none;color:black;"><?php echo $_SESSION["user"]; ?></a>
            <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="logout.php">Logout</a></li>
            </ul>    
            </li>
            </ul>
        </div>
    </nav>
</header>