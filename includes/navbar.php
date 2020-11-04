<header>
    <nav class="navbar navbar-inverse" style="margin-left:-1px;margin-right:-1px;background:#b2bcc2;border:none;">

        <div class="navbar-header">
            <a href="#" class="navbar-brand"><img src="assets/cart.png" alt="" width="40" height="40" class="img-circle" style="background:snow;padding:0px;margin-top:-10px"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') {
                                        echo 'active';
                                    } ?>"><a href="index.php" id="nl">Home</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'category.php') {
                                        echo 'active';
                                    } ?>"><a href="category.php" id="nl">Categories</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'offer.php') {
                                        echo 'active';
                                    } ?>"><a href="offer.php" id="nl">Offer</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'terms.php') {
                                        echo 'active';
                                    } ?>"><a href="terms.php" id="nl">Terms</a></li>
            </ul>
            <ul class="nav navbar-nav" style="float:right;">
                <li class="nav-item"><a href="user/login.php" id="nl">Buy</a></li>
                <li class="nav-item"><a href="seller/login.php" id="nl">Sell</a></li>
            </ul>
        </div>
    </nav>
</header>