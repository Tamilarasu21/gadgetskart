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
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'products.php') {
                                        echo 'active';
                                    } ?>"><a href="products.php" id="nl">My Products</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'addProduct.php') {
                                        echo 'active';
                                    } ?>"><a href="addProduct.php" id="nl">Add Product</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'orders.php') {
                                        echo 'active';
                                    } ?>"><a href="orders.php" id="nl">Orders</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'stock.php') {
                                        echo 'active';
                                    } ?>"><a href="stock.php" id="nl">Stock</a></li>
                <li class="nav-item"><a href="logout.php" id="nl"></i>Logout</a></li>
            </ul>
        </div>
    </nav>
</header>