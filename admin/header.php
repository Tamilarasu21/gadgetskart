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
            <ul class="nav navbar-nav" style="font-size:16px;">
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'home.php') {
                                        echo 'active';
                                    } ?>"><a href="home.php" id="nl">Home</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'sellers.php') {
                                        echo 'active';
                                    } ?>"><a href="sellers.php" id="nl">Sellers</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'users.php') {
                                        echo 'active';
                                    } ?>"><a href="users.php" id="nl">Users</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'sales.php') {
                                        echo 'active';
                                    } ?>"><a href="sales.php" id="nl">Sales</a></li>
            </ul>
            <ul class="nav navbar-nav" style="float:right;">
            <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'logout.php') {
                                        echo 'active';
                                    } ?>">
                                        <a id="nl" href="#" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none;color:black;">Admin</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li class="dropdown-item"><a  href="#">Action</a></li>
                                            <li class="dropdown-item"><a  href="logout.php">logout</a></li>
                                    </ul>
                                    </li>
            </ul>
        </div>
    </nav>
</header>